<?php
if (!defined('ABSPATH'))
    exit;
oxi_team_show_slider_user_capabilities();
global $wpdb;
if (!empty($_REQUEST['_wpnonce'])) {
    $nonce = $_REQUEST['_wpnonce'];
}
$table_icon = $wpdb->prefix . 'oxi_div_social_icon';
$oxitype = 'team';
if (!empty($_POST['submit']) && $_POST['submit'] == 'Save') {
    if (!wp_verify_nonce($nonce, 'oxiteamstyleicon')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $iconname = sanitize_text_field($_POST['icon-name']);
        $iconclass = sanitize_text_field($_POST['icon-class']);
        $iconcolor = sanitize_text_field($_POST['icon-color']);
        $iconbgcolor = sanitize_text_field($_POST['icon-bg-color']);
        if (empty($_POST['oxi-team-id'])) {
            $wpdb->query($wpdb->prepare("INSERT INTO {$table_icon} (name, type, class, color, bgcolor) VALUES (%s, %s, %s, %s, %s)", array($iconname, $oxitype, $iconclass, $iconcolor, $iconbgcolor)));
        }
        if (!empty($_POST['oxi-team-id']) && is_numeric($_POST['oxi-team-id'])) {
            $item_id = (int) $_POST['oxi-team-id'];
            $wpdb->update("$table_icon", array("name" => $iconname, "class" => $iconclass, "color" => $iconcolor, "bgcolor" => $iconbgcolor), array('id' => $item_id), array('%s', '%s', '%s', '%s'), array('%d'));
        }
    }
}
if (!empty($_POST['delete']) && is_numeric($_POST['id'])) {
    if (!wp_verify_nonce($nonce, 'oxiteamstyledelete')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        global $wpdb;
        $id = $_POST['id'];
        $wpdb->query($wpdb->prepare("DELETE FROM $table_icon WHERE id = %d", $id));
    }
}

if (!empty($_POST['Edit']) && is_numeric($_POST['id']) && $_POST['Edit'] == 'edit') {
    if (!wp_verify_nonce($nonce, 'oxiteamstyleedit')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['id'];
        $editdata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_icon WHERE id = %d ", $item_id), ARRAY_A);
        echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#oxi-team-style-model").modal("show")  }, 500); });</script>';
    }
}
$icondata = $wpdb->get_results('SELECT * FROM ' . $table_icon . ' WHERE type = "team" ORDER BY name', ARRAY_A);
?>
<div class="wrap">
    <?php echo oxi_team_show_admin_head(); ?>
    <h1> Team Showcase Social Icon <button type="button" class="btn btn-success" data-toggle="modal" data-target="#oxi-team-style-model"> Add New</button></h1>
    <div class="oxilab-admin-wrapper table-responsive" style="margin-top: 20px; margin-bottom: 20px; max-width: 500px">
        <table class="table table-hover widefat " style="background-color: #fff; border: 1px solid #ccc">
            <thead>
                <tr>
                    <th style="width: 25%">Icon Name</th>
                    <th style="width: 30%">Font Awesome</th>
                    <th style="width: 20%">Style</th>
                    <th style="width: 25%">Edit Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($icondata as $value) {
                    echo ' <tr>';
                    echo '  <td >' . $value['name'] . '</td>';
                    echo ' <td >' . $value['class'] . '</td>';
                    echo '<td ><button type="button" class="btn btn-success" style="margin-right: 5px; margin-left: 5px; color:' . $value['color'] . '; background-color: ' . $value['bgcolor'] . '; border-color: transparent;"><i class="' . $value['class'] . ' " aria-hidden="true" style="color:' . $value['color'] . '; background-color: ' . $value['bgcolor'] . ';"></i></button> <i class=" ' . $value['class'] . ' " aria-hidden="true" style="color:' . $value['bgcolor'] . ';"></i></td>';
                    echo '<td >   
                                   <form method="post">
                                            ' . wp_nonce_field("oxiteamstyleedit") . '
                                            <input type="hidden" name="id" value="' . $value['id'] . '">
                                            <button type="submit" class="btn btn-success"  title="Edit" style="float:left; margin-right: 5px; margin-left: 5px;" value="edit" name="Edit"><i class="fas fa-clone" aria-hidden="true"></i></button>
                                    </form>
                                    <form method="post" class="oxi-team-delete">
                                            ' . wp_nonce_field("oxiteamstyledelete") . '
                                            <input type="hidden" name="id" value="' . $value['id'] . '">
                                            <button class="btn btn-danger" style="float:left"  title="Delete"  type="submit" value="delete" name="delete"><i class="far fa-trash-alt" aria-hidden="true"></i></button>  
                                    </form>
                                   
                             </td>';
                    echo ' </tr>';
                }
                ?>

            </tbody>
        </table> 
    </div>
</div>
<div class="modal fade" id="oxi-team-style-model" >
    <form method="post">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Social Settings</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row form-group-sm">
                        <label for="icon-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Social Name">Icon Name</label>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="text" value="<?php
                            if (!empty($editdata['name'])) {
                                echo oxilab_team_admin_html_special_charecter($editdata['name']);
                            }
                            ?>" id='icon-name'  name="icon-name"  placeholder="Facebook">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="icon-class" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Font Awesome Icon Class" >Font Awesome Class</label>
                        <div class="col-sm-6 ">
                            <input class="form-control" type="text" value="<?php
                            if (!empty($editdata['class'])) {
                                echo oxilab_team_admin_html_special_charecter($editdata['class']);
                            }
                            ?>" id='icon-class'  name="icon-class" placeholder="fab fa-facebook">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="icon-color" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Icon Color">Color</label>
                        <div class="col-sm-6 ">
                            <input class="form-control oxilab-vendor-color" type="text" value="<?php echo $editdata['color']; ?>" id='icon-color'  name="icon-color">
                        </div>
                    </div>
                    <div class="form-group row form-group-sm">
                        <label for="icon-bg-color" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Icon Background Color, Also works on Font color When style have only Color">Background Color</label>
                        <div class="col-sm-6 ">
                            <input class="form-control oxilab-vendor-color" data-format="rgb" data-opacity="true"  type="text" value="<?php echo $editdata['bgcolor']; ?>" id='icon-bg-color'  name="icon-bg-color">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="oxi-team-id" id="oxi-team-id" value="<?php echo $editdata['id']; ?>">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                    <?php wp_nonce_field("oxiteamstyleicon") ?>
                </div>
            </div>
        </div>
    </form>
</div>
