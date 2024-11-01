<?php
if (!defined('ABSPATH'))
    exit;
oxi_team_show_slider_user_capabilities();
global $wpdb;
if (!empty($_REQUEST['_wpnonce'])) {
    $nonce = $_REQUEST['_wpnonce'];
}
$table_name = $wpdb->prefix . 'oxi_div_category';
$oxitype = 'team';


if (!empty($_POST['Edit']) && is_numeric($_POST['id']) && $_POST['Edit'] == 'edit') {
    if (!wp_verify_nonce($nonce, 'oxiteamstyleedit')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['id'];
        $editdata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $item_id), ARRAY_A);
        echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#oxi-team-style-model").modal("show")  }, 500); });</script>';
    }
}
if (!empty($_POST['delete']) && is_numeric($_POST['id'])) {
    if (!wp_verify_nonce($nonce, 'oxiteamstyledelete')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        global $wpdb;
        $id = $_POST['id'];
        if ($_POST['class'] != 'oxi-team-cat-all') {
            $wpdb->query($wpdb->prepare("DELETE FROM $table_name WHERE id = %d", $id));
        }
    }
}
if (!empty($_POST['submit']) && $_POST['submit'] == 'Save') {
    if (!wp_verify_nonce($nonce, 'oxiteamstylecategory')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $categoryname = sanitize_text_field($_POST['category-name']);
        if ($_POST['class'] == 'oxi-team-cat-all') {
            $categoryclass = 'oxi-team-cat-all';
        } else {
            $categoryclass = strtolower(str_replace(' ', '-', 'oxi-team-cat-' . sanitize_text_field($_POST['category-name'])));
        }
        if (empty($_POST['oxi-team-id'])) {
            $wpdb->query($wpdb->prepare("INSERT INTO {$table_name} (name, type, class) VALUES (%s, %s, %s)", array($categoryname, $oxitype, $categoryclass)));
        }
        if (!empty($_POST['oxi-team-id']) && is_numeric($_POST['oxi-team-id'])) {
            $item_id = (int) $_POST['oxi-team-id'];
            $wpdb->update("$table_name", array("name" => $categoryname, "class" => $categoryclass), array('id' => $item_id), array('%s', '%s'), array('%d'));
        }
    }
}
$categorydata = $wpdb->get_results('SELECT * FROM ' . $table_name . ' WHERE type = "team" ORDER BY name', ARRAY_A);
?>
<div class="wrap">
    <?php echo oxi_team_show_admin_head(); ?>
    <h1> Team Showcase Category <button type="button" class="btn btn-success" data-toggle="modal" data-target="#oxi-team-style-model"> Add New</button></h1>
    <div class="oxilab-admin-wrapper table-responsive" style="margin-top: 20px; margin-bottom: 20px; max-width: 300px">
        <table class="table table-hover widefat " style="background-color: #fff; border: 1px solid #ccc">
            <thead>
                <tr>
                    <th style="width: 60%">Category</th>
                    <th style="width: 40%">Edit Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($categorydata as $value) {
                    echo ' <tr>';
                    echo '  <td >' . $value['name'] . '</td>';
                    echo '<td >   
                                   <form method="post">
                                            ' . wp_nonce_field("oxiteamstyleedit") . '
                                            <input type="hidden" name="id" value="' . $value['id'] . '">
                                            <button type="submit" class="btn btn-success"  title="Edit" style="float:left; margin-right: 5px; margin-left: 5px;" value="edit" name="Edit"><i class="fas fa-clone" aria-hidden="true"></i></button>
                                    </form>
                                    <form method="post" class="oxi-team-delete">
                                            ' . wp_nonce_field("oxiteamstyledelete") . '
                                            <input type="hidden" name="id" value="' . $value['id'] . '">
                                            <input type="hidden" name="class" value="' . $value['class'] . '">
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
                    <h4 class="modal-title">Category Settings</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row form-group-sm">
                        <label for="category-name" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Category Name">Category Name</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" value="<?php
                            if (!empty($editdata['name'])) {
                                echo oxilab_team_admin_html_special_charecter($editdata['name']);
                            }
                            ?>" id='category-name'  name="category-name"  placeholder="Manager">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="oxi-team-id" id="oxi-team-id" value="<?php echo $editdata['id']; ?>">
                    <input type="hidden" name="class" id="class" value="<?php echo $editdata['class']; ?>">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="submit" value="Save">
                    <?php wp_nonce_field("oxiteamstylecategory") ?>
                </div>
            </div>
        </div>
    </form>
</div>
