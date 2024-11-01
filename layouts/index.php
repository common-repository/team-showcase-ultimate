<?php
if (!defined('ABSPATH'))
    exit;
oxi_team_show_slider_user_capabilities();
global $wpdb;
$table_import = $wpdb->prefix . 'oxi_div_import';
$oxitype = 'team';
if (!empty($_POST['submit']) && $_POST['submit'] == 'Save') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'oxiteamstyleselect')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $oxiteamstyle = sanitize_text_field($_POST['oxi-team-style']);
        $oxiteamname = sanitize_text_field($_POST['style-name']);
        $oxiteamdata = sanitize_text_field($_POST['oxi-team-data']);

        $table_name = $wpdb->prefix . 'oxi_div_style';
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_name} (name, type, style_name, css) VALUES ( %s, %s, %s, %s )", array($oxiteamname, $oxitype, $oxiteamstyle, $oxiteamdata)));
        $redirect_id = $wpdb->insert_id;
        if ($redirect_id == 0) {
            $url = admin_url("admin.php?page=oxi-team-show-slider-new");
        }
        if ($redirect_id != 0) {
            $url = admin_url("admin.php?page=oxi-team-show-slider-new&styleid=$redirect_id");
        }
        echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
        exit;
    }
}

if (!empty($_POST['oxi-team-import']) && $_POST['oxi-team-import'] != '') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'oxiteamstyleimportdeactive')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $oxiteamimport = sanitize_text_field($_POST['oxi-team-import']);
        $wpdb->query($wpdb->prepare("DELETE FROM {$table_import} WHERE name = %d AND type = %s", $oxiteamimport, $oxitype));
    }
}
$importdata = $wpdb->get_results("SELECT * FROM $table_import WHERE type = 'team' ORDER by name ASC", ARRAY_A);
?>


<div class="wrap">
    <?php echo oxi_team_show_admin_head(); ?>
    <div class="oxilab-admin-wrapper">
        <div class="oxilab-admin-row">
            <h1> Select Layouts</h1>
            <p> View our layouts and select from button with name</p>
        </div>
        <div class="oxilab-admin-row">
            <?php
            foreach ($importdata as $value) {
                $stylesrtid = $value['name'];
                echo '<div class="oxilab-admin-style-preview" id="style_' . $value['name'] . '">
                        <div class="oxilab-admin-style-preview-top">';
                include oxi_team_showcase_and_slider . 'layouts/style_' . $value['name'] . '.php';
                echo '</div>';
                echo '<div class="oxilab-admin-style-preview-bottom">
                        <div class="oxilab-admin-style-preview-bottom-left">
                            Template ' . $stylesrtid . '
                        </div>        
                        <div class="oxilab-admin-style-preview-bottom-right">
                              <input type="hidden" value="" id="oxi-team-data-' . $stylesrtid . '">
                              <button type="button" class="btn btn-warning" id="oxi-team-style-deactive-' . $stylesrtid . '">Deactive</button>
                              <button type="button" class="btn btn-success" id="oxi-team-style-' . $stylesrtid . '" data-toggle="modal" data-target="#oxi-team-style-model">Create New</button>
                        </div>
                     </div>';
                echo ' </div>';
                echo ' 
                     <script type="text/javascript">                                  
                        jQuery(document).ready(function () {
                            jQuery("#oxi-team-style-deactive-' . $stylesrtid . '").click(function () {
                                    var status = confirm("Do you Want to Deactive?");
                                    if (status == false) {
                                        return false;
                                    } else {
                                        jQuery("#oxi-team-import").val("' . $stylesrtid . '");
                                        jQuery("form#oxi-team-import-data").submit();
                                    }                                
                            });
                            jQuery("#oxi-team-style-' . $stylesrtid . '").on("click", function () {
                                 jQuery("#oxi-team-style").val("");
                                 jQuery("#oxi-team-data").val("");
                                 jQuery("#style-name").val("");
                                 jQuery("#oxi-team-data").val(jQuery("#oxi-team-data-' . $stylesrtid . '").val());
                                 jQuery("#oxi-team-style").val("style_' . $stylesrtid . '");                 
                             });
                        });        
                    </script>';
            }
            ?>
            <div class="oxilab-admin-style-preview">
                <div class="oxilab-admin-style-preview-top">
                    <a href="<?php echo admin_url("admin.php?page=oxi-team-show-slider-import"); ?>">
                        <div class="oxilab-admin-add-new-item">
                            <span>
                                <i class="fa fa-plus-circle"></i>
                                Add More Templates
                            </span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <form method="post" id="oxi-team-import-data">
        <input type="hidden" name="oxi-team-import" id="oxi-team-import" value="">
<?php wp_nonce_field("oxiteamstyleimportdeactive") ?>
    </form>
    <div class="modal fade" id="oxi-team-style-model" >
        <form method="post">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Team Settings</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row form-group-sm">
                            <label for="style" class="col-sm-6 col-form-label"  data-toggle="tooltip" class="tooltipLink" data-original-title="Give Your Template Name">Name</label>
                            <div class="col-sm-6 nopadding">
                                <input class="form-control" type="text" value="" id='style-name'  name="style-name">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="oxi-team-style" id="oxi-team-style" value="">
                        <input type="hidden" name="oxi-team-data" id="oxi-team-data" value="">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
<?php wp_nonce_field("oxiteamstyleselect") ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>