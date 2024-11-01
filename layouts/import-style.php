<?php
if (!defined('ABSPATH'))
    exit;
oxi_team_show_slider_user_capabilities();
global $wpdb;
$table_import = $wpdb->prefix . 'oxi_div_import';
$oxitype = 'team';
if (!empty($_POST['oxi-team-import']) && $_POST['oxi-team-import'] != '') {
    $nonce = $_REQUEST['_wpnonce'];
    if (!wp_verify_nonce($nonce, 'oxiteamstyleimport')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $oxiteamimport = sanitize_text_field($_POST['oxi-team-import']);
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_import} (name, type) VALUES ( %d, %s)", array($oxiteamimport, $oxitype)));
        $redirect_id = $wpdb->insert_id;
        if ($redirect_id == 0) {
            $url = admin_url("admin.php?page=oxi-team-show-slider-import");
        }
        if ($redirect_id != 0) {
            $url = admin_url("admin.php?page=oxi-team-show-slider-new#style_$oxiteamimport");
        }
        echo '<script type="text/javascript"> document.location.href = "' . $url . '"; </script>';
        exit;
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
            $directory = oxi_team_showcase_and_slider . '/layouts/';
            $filecount = 0;
            $files = glob($directory . "*.{php}", GLOB_BRACE);
            if ($files) {
                $filecount = count($files);
            }
            $filecount = $filecount - 2;
            for ($i = 1; $i <= $filecount; $i++) {
                $importname = $i;
                $importstatus = '';
                foreach ($importdata as $value) {
                    if ($importname == $value['name']) {
                        $importstatus = 'true';
                    }
                }
                if ($importstatus != 'true') {
                    echo '<div class="oxilab-admin-style-preview">
                        <div class="oxilab-admin-style-preview-top">';
                    include oxi_team_showcase_and_slider . 'layouts/style_' . $i . '.php';
                    echo '</div>';
                    echo '<div class="oxilab-admin-style-preview-bottom">
                        <div class="oxilab-admin-style-preview-bottom-left-import">
                            Template ' . $i . '
                        </div>';
                    if ($i > 10 && get_option('oxi_team_show_slider_license_status') != 'valid') {
                        echo '<div class="oxilab-admin-style-preview-bottom-right-import">
                                    <button type="button" class="btn btn-danger">Pro Only</button>
                              </div>';
                    } else {
                        echo '<div class="oxilab-admin-style-preview-bottom-right-import">
                                    <button type="button" class="btn btn-success oxi-team-style-active" id="oxi-team-style-active" oxi-data="' . $i . '">Active</button>
                              </div>';
                    }
                    echo '</div> </div>';
                }
            }
            ?>
        </div>
    </div>
    <form method="post" id="oxi-team-import-data">
        <input type="hidden" name="oxi-team-import" id="oxi-team-import" value="">
        <?php wp_nonce_field("oxiteamstyleimport") ?>
    </form>
</div>