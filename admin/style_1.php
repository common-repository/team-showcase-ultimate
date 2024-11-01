<?php
if (!defined('ABSPATH'))
    exit;
oxi_team_show_slider_user_capabilities();
global $wpdb;
$styleid = (int) $_GET['styleid'];
$table_name = $wpdb->prefix . 'oxi_div_style';
$table_list = $wpdb->prefix . 'oxi_div_list';
$table_icon = $wpdb->prefix . 'oxi_div_social_icon';
$table_category = $wpdb->prefix . 'oxi_div_category';
$oxitype = 'team';
$oxilabteamselectdata = array();
$itemid = '';
$listexdata = array('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '',);
if (!empty($_REQUEST['_wpnonce'])) {
    $nonce = $_REQUEST['_wpnonce'];
}
if (!empty($_POST['submit']) && $_POST['submit'] == 'submit') {
    if (!wp_verify_nonce($nonce, 'oxiteamshownewdata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $oxilabteamcategory = '';
        if (!empty($_POST['oxilab-team-category'])) {
            $numItems = count($_POST['oxilab-team-category']);
            if ($numItems > 0) {
                foreach ($_POST['oxilab-team-category'] as $value) {
                    $oxilabteamcategory .= $value . '|||';
                }
            }
        }
        $data = ' oxi-team-name {#}|{#}' . sanitize_text_field($_POST['oxi-team-name']) . '{#}|{#}'
                . ' oxi-team-designation {#}|{#}' . $_POST['oxi-team-designation'] . '{#}|{#}'
                . ' oxi-team-profile-image {#}|{#}' . sanitize_text_field($_POST['oxi-team-profile-image']) . '{#}|{#}'
                . 'oxi-team-socail-First {#}|{#}' . sanitize_text_field($_POST['oxi-team-socail-First']) . '{#}|{#}'
                . 'oxi-team-socail-First-url {#}|{#}' . sanitize_text_field($_POST['oxi-team-socail-First-url']) . '{#}|{#}'
                . 'oxi-team-socail-Second {#}|{#}' . sanitize_text_field($_POST['oxi-team-socail-Second']) . '{#}|{#}'
                . 'oxi-team-socail-Second-url {#}|{#}' . sanitize_text_field($_POST['oxi-team-socail-Second-url']) . '{#}|{#}'
                . 'oxi-team-socail-Third {#}|{#}' . sanitize_text_field($_POST['oxi-team-socail-Third']) . '{#}|{#}'
                . 'oxi-team-socail-Third-url {#}|{#}' . sanitize_text_field($_POST['oxi-team-socail-Third-url']) . '{#}|{#}'
                . 'oxi-team-socail-Forth {#}|{#}' . sanitize_text_field($_POST['oxi-team-socail-Forth']) . '{#}|{#}'
                . 'oxi-team-socail-Forth-url {#}|{#}' . sanitize_text_field($_POST['oxi-team-socail-Forth-url']) . '{#}|{#}'
                . 'oxilab-team-category {#}|{#}' . sanitize_text_field($oxilabteamcategory) . '{#}|{#}';

        if (empty($_POST['item-id'])) {
            $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (styleid, files) VALUES (%d, %s)", array($styleid, $data)));
        }
        if (!empty($_POST['item-id']) && is_numeric($_POST['item-id'])) {
            $item_id = (int) $_POST['item-id'];
            $wpdb->update("$table_list", array("files" => $data), array('id' => $item_id), array('%s'), array('%d'));
        }
    }
}
if (!empty($_POST['edit']) && $_POST['edit'] == 'edit') {
    if (!wp_verify_nonce($nonce, 'oxiteamshowneeditdata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['item-id'];
        $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $item_id), ARRAY_A);
        $listexdata = explode('{#}|{#}', $data['files']);
        $oxilabteamselectdata = explode('|||', $listexdata[23]);
        $itemid = $item_id;
        echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#oxilab-add-new-data").modal("show")  }, 500); });</script>';
    }
}
if (!empty($_POST['data-submit']) && $_POST['data-submit'] == 'Save') {
    if (!wp_verify_nonce($nonce, 'teamstylecss')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $css = '  team-category|' . sanitize_text_field($_POST['team-category']) . '|'
                . ' team-category-style |' . sanitize_text_field($_POST['team-category-style']) . '|'
                . ' team-category-position|' . sanitize_text_field($_POST['team-category-position']) . '|'
                . ' category-fot-size|' . sanitize_text_field($_POST['category-fot-size']) . '|'
                . ' category-color|' . sanitize_text_field($_POST['category-color']) . '|'
                . ' category-bg-color |' . sanitize_text_field($_POST['category-bg-color']) . '|'
                . ' category-hover-color |' . sanitize_text_field($_POST['category-hover-color']) . '|'
                . ' category-hover-bg-color|' . sanitize_text_field($_POST['category-hover-bg-color']) . '|'
                . ' category-font-family |' . sanitize_text_field($_POST['category-font-family']) . '|'
                . ' category-font-weight |' . sanitize_text_field($_POST['category-font-weight']) . '|'
                . ' category-font-style |' . sanitize_text_field($_POST['category-font-style']) . '|'
                . ' category-padding-top-bottom |' . sanitize_text_field($_POST['category-padding-top-bottom']) . '|'
                . ' category-padding-left-right|' . sanitize_text_field($_POST['category-padding-left-right']) . '|'
                . ' category-border |' . sanitize_text_field($_POST['category-border']) . '|'
                . ' category-border-type|' . sanitize_text_field($_POST['category-border-type']) . '|'
                . ' category-border-radius |' . sanitize_text_field($_POST['category-border-radius']) . '|'
                . ' category-margin-top |' . sanitize_text_field($_POST['category-margin-top']) . '|'
                . ' category-margin-bottom |' . sanitize_text_field($_POST['category-margin-bottom']) . '|'
                . ' category-margin-left |' . sanitize_text_field($_POST['category-margin-left']) . '|'
                . ' category-margin-right|' . sanitize_text_field($_POST['category-margin-right']) . '|'
                . 'oxilab-carousel|' . sanitize_text_field($_POST['oxilab-carousel']) . '|'
                . ' oxilab-carousel-center-mode|' . sanitize_text_field($_POST['oxilab-carousel-center-mode']) . '|'
                . ' oxilab-carousel-autoplay|' . sanitize_text_field($_POST['oxilab-carousel-autoplay']) . '|'
                . ' oxilab-carousel-autoplay-time|' . sanitize_text_field($_POST['oxilab-carousel-autoplay-time']) . '|'
                . ' oxilab-carousel-pagination|' . sanitize_text_field($_POST['oxilab-carousel-pagination']) . '|'
                . ' oxilab-carousel-pagination-position|' . sanitize_text_field($_POST['oxilab-carousel-pagination-position']) . '|'
                . ' oxilab-carousel-pagination-color|' . sanitize_text_field($_POST['oxilab-carousel-pagination-color']) . '|'
                . ' oxilab-carousel-pagination-active-color |' . sanitize_text_field($_POST['oxilab-carousel-pagination-active-color']) . '|'
                . ' oxilab-carousel-body-width|' . sanitize_text_field($_POST['oxilab-carousel-body-width']) . '|'
                . ' oxilab-carousel-active-body-size|' . sanitize_text_field($_POST['oxilab-carousel-active-body-size']) . '|'
                . ' oxilab-carousel-active-body-padding-top |' . sanitize_text_field($_POST['oxilab-carousel-active-body-padding-top']) . '|'
                . ' oxilab-carousel-navigation |' . sanitize_text_field($_POST['oxilab-carousel-navigation']) . '|'
                . ' oxilab-carousel-navigation-style |' . sanitize_text_field($_POST['oxilab-carousel-navigation-style']) . '|'
                . ' others-navigation-data |'
                . 'oxilab-carousel-navigation-size//' . sanitize_text_field($_POST['oxilab-carousel-navigation-size']) . '//'
                . 'oxilab-carousel-navigation-color//' . sanitize_text_field($_POST['oxilab-carousel-navigation-color']) . '//'
                . 'oxilab-carousel-navigation-active-color//' . sanitize_text_field($_POST['oxilab-carousel-navigation-active-color']) . '//'
                . 'oxilab-carousel-navigation-position-top-bottom//' . sanitize_text_field($_POST['oxilab-carousel-navigation-position-top-bottom']) . '//'
                . 'oxilab-carousel-navigation-position-left-right//' . sanitize_text_field($_POST['oxilab-carousel-navigation-position-left-right']) . '//'
                . 'oxilab-carousel-navigation-showing-type//' . sanitize_text_field($_POST['oxilab-carousel-navigation-showing-type']) . '//'
                . 'oxilab-carousel-body-height//' . sanitize_text_field($_POST['oxilab-carousel-body-height']) . '//'
                . 'oxilab-carousel-active-body-padding-left//' . sanitize_text_field($_POST['oxilab-carousel-active-body-padding-left']) . '//'
                . 'oxilab-carousel-pagination-border-radius//' . sanitize_text_field($_POST['oxilab-carousel-pagination-border-radius']) . '//'
                . '|'
                . '  ||'
                . ' team-width |' . sanitize_text_field($_POST['team-width']) . '|'
                . ' team-height |' . sanitize_text_field($_POST['team-height']) . '|'
                . ' team-item |' . sanitize_text_field($_POST['team-item']) . '|'
                . ' team-icon-position |' . sanitize_text_field($_POST['team-icon-position']) . '|'
                . ' image-link-opening |' . sanitize_text_field($_POST['image-link-opening']) . '|'
                . ' image-margin-top |' . sanitize_text_field($_POST['image-margin-top']) . '|'
                . ' team-animation |' . sanitize_text_field($_POST['team-animation']) . '|'
                . ' team-animation-duration |' . sanitize_text_field($_POST['team-animation-duration']) . '|'
                . ' team-box-shadow-color |' . sanitize_text_field($_POST['team-box-shadow-color']) . '|'
                . ' team-box-shadow-length-horizontal |' . sanitize_text_field($_POST['team-box-shadow-length-horizontal']) . '|'
                . ' team-box-shadow-length-vertical |' . sanitize_text_field($_POST['team-box-shadow-length-vertical']) . '|'
                . ' team-box-shadow-radius-blur |' . sanitize_text_field($_POST['team-box-shadow-radius-blur']) . '|'
                . ' team-box-shadow-radius-spread |' . sanitize_text_field($_POST['team-box-shadow-radius-spread']) . '|'
                . ' name-font-size |' . sanitize_text_field($_POST['name-font-size']) . '|'
                . ' name-color |' . sanitize_text_field($_POST['name-color']) . '|'
                . ' heading-font-family |' . sanitize_text_field($_POST['heading-font-family']) . '|'
                . ' name-font-weight |' . sanitize_text_field($_POST['name-font-weight']) . '|'
                . ' name-font-style |' . sanitize_text_field($_POST['name-font-style']) . '|'
                . ' name-margin-top |' . sanitize_text_field($_POST['name-margin-top']) . '|'
                . ' name-padding-bottom |' . sanitize_text_field($_POST['name-padding-bottom']) . '|'
                . ' bottom-width |' . sanitize_text_field($_POST['bottom-width']) . '|'
                . ' bottom-height |' . sanitize_text_field($_POST['bottom-height']) . '|'
                . ' bottom-color |' . sanitize_text_field($_POST['bottom-color']) . '|'
                . ' name-margin-bottom |' . sanitize_text_field($_POST['name-margin-bottom']) . '|'
                . ' position-font-size |' . sanitize_text_field($_POST['position-font-size']) . '|'
                . ' position-color |' . sanitize_text_field($_POST['position-color']) . '|'
                . ' position-font-family |' . sanitize_text_field($_POST['position-font-family']) . '|'
                . ' position-font-weight |' . sanitize_text_field($_POST['position-font-weight']) . '|'
                . ' position-font-style |' . sanitize_text_field($_POST['position-font-style']) . '|'
                . ' position-margin-bottom |' . sanitize_text_field($_POST['position-margin-bottom']) . '|'
                . ' icon-font-size |' . sanitize_text_field($_POST['icon-font-size']) . '|'
                . ' icon-color |' . sanitize_text_field($_POST['icon-color']) . '|'
                . ' icon-background-color |' . sanitize_text_field($_POST['icon-background-color']) . '|'
                . ' icon-width |' . sanitize_text_field($_POST['icon-width']) . '|'
                . ' icon-padding-top-bottom |' . sanitize_text_field($_POST['icon-padding-top-bottom']) . '|'
                . ' icon-arrow |' . sanitize_text_field($_POST['icon-arrow']) . '|'
                . ' image-margin-bottom |' . sanitize_text_field($_POST['image-margin-bottom']) . '|'
                . ' team-box-bg-color |' . sanitize_text_field($_POST['team-box-bg-color']) . '|'
                . ' team-custom-css |' . sanitize_text_field($_POST['team-custom-css']) . '|';
        $css = sanitize_text_field($css);
        $wpdb->query($wpdb->prepare("UPDATE $table_name SET css = %s WHERE id = %d", $css, $styleid));
    }
}
if (!empty($_POST['delete']) && $_POST['delete'] == 'delete') {
    if (!wp_verify_nonce($nonce, 'oxiteamshownedeletedata')) {
        die('You do not have sufficient permissions to access this page.');
    } else {
        $item_id = (int) $_POST['item-id'];
        $wpdb->query($wpdb->prepare("DELETE FROM {$table_list} WHERE id = %d ", $item_id));
    }
}
$categorydata = $wpdb->get_results("SELECT * FROM $table_category WHERE type = 'team' ORDER by name  ASC", ARRAY_A);
$icondata = $wpdb->get_results("SELECT * FROM $table_icon WHERE type = 'team' ORDER by name  ASC", ARRAY_A);
$listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
$styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
$styledata = $styledata['css'];
$styledata = explode('|', $styledata);
?>
<div class="wrap">
    <?php echo oxi_team_show_admin_head(); ?>
    <div class="oxilab-admin-wrapper">
        <div class="oxilab-admin-row">
            <div class="oxilab-admin-style-panel-left">
                <div class="oxilab-admin-style-panel-left-settings">
                    <div class="oxilab-admin-style-panel-left-settings-row">
                        <form method="post"  id="oxi-team-form-submit">
                            <div class="oxilab-tabs-wrapper"> 
                                <ul class="oxilab-tabs-ul">  
                                    <li ref="#oxilab-tabs-id-6" class="">
                                        General
                                    </li>  
                                    <li ref="#oxilab-tabs-id-5" class="">
                                        Font
                                    </li>
                                    <li ref="#oxilab-tabs-id-4" class="">
                                        Icon & Category
                                    </li> 
                                    <li ref="#oxilab-tabs-id-3">
                                        Slider
                                    </li>
                                    <li ref="#oxilab-tabs-id-2">
                                        Custom CSS
                                    </li>
                                    <li ref="#oxilab-tabs-id-1">
                                        Support
                                    </li>
                                </ul>
                                <div class="oxilab-tabs-content">
                                    <div class="oxilab-tabs-content-tabs" id="oxilab-tabs-id-6">
                                        <div class="oxilab-tabs-content-div-50">
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Image Settings
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_number('team-width', $styledata[71], '1', 'Image Width', 'Edit Your Image Width, Besed on Pixel');
                                                echo oxi_team_show_admin_number('team-height', $styledata[73], '1', 'Image Height', 'Edit Your Team Height, Besed on Pixel');
                                                echo oxi_team_show_admin_color('team-box-bg-color', $styledata[145], 'rgba', 'Background Color', 'Select color for team background, Base color RGBA');
                                                ?> 
                                            </div>
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    General
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_col_data('team-item', $styledata[75], 'Team Member per Row', 'Customize How mane Team You want to Show in a single Row');
                                                echo oxi_team_show_admin_position('team-icon-position', $styledata[77], 'Team Position', 'Select Your Team Position');
                                                echo oxi_team_show_admin_true_false('image-link-opening', $styledata[79], 'Normal', '', 'New Tab', '_blank', 'Link Opening', 'Customize your Link Opening Style');
                                                echo oxi_team_show_admin_number_double('image-margin-top', $styledata[81], 'image-margin-bottom', $styledata[143], 'Image Margin', 'Create Distance from Team to Team. First for Top Bottom space, Second for Left Right');
                                                ?> 
                                            </div>                                            
                                        </div>
                                        <div class="oxilab-tabs-content-div-50">
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Animation
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_animation_select('team-animation', $styledata[83]);
                                                echo oxi_team_show_admin_number('team-animation-duration', $styledata[85], '0.1', 'Animation Duration', 'Select the duration of the animation showing. Based on Seconds');
                                                ?> 
                                            </div>
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Box Shadow
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_color('team-box-shadow-color', $styledata[87], 'rgba', 'Box Shadow Color', 'Customize the color of Team box shadow, Base color RGBA');
                                                echo oxi_team_show_admin_number_double('team-box-shadow-length-horizontal', $styledata[89], 'team-box-shadow-length-vertical', $styledata[91], 'Box Shadow Length', 'Customize the box shadow length around the Team\'s profile. First for Left Right side, Second for Top and Bottom');
                                                echo oxi_team_show_admin_number_double('team-box-shadow-radius-blur', $styledata[93], 'team-box-shadow-radius-spread', $styledata[95], 'Box Shadow Radius', 'Customize the Radius of box shadow around the profile. First for Radius, Second for Shadow Opacity');
                                                ?>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="oxilab-tabs-content-tabs" id="oxilab-tabs-id-5">
                                        <div class="oxilab-tabs-content-div-50">
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Name Settings
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_number('name-font-size', $styledata[97], '1', 'Font Size', 'Customize the font size of Team member\'s name.');
                                                echo oxi_team_show_admin_color('name-color', $styledata[99], '', 'Color', 'Customize the color of Name text.');
                                                echo oxi_team_show_admin_font_family('heading-font-family', $styledata[101], 'Font Family', 'Select the name font based on google font-family');
                                                echo oxi_team_show_admin_font_weight('name-font-weight', $styledata[103], 'Font Weight', 'Customize the font weight of the name text with dafault size or style');
                                                echo oxi_team_show_admin_font_style('name-font-style', $styledata[105], 'Font Style', 'Customize the name text font style. Select Normal when no need any style');
                                                echo oxi_team_show_admin_number('name-margin-top', $styledata[107], '', 'Margin Top', 'Create some space between Member\'s name and Member\'s role');
                                                echo oxi_team_show_admin_number('name-padding-bottom', $styledata[109], '', 'Margin Bottom', 'Create some space between Member\'s name and Member\'s role');
                                                ?>
                                            </div>
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Name Bottom
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_number('bottom-width', $styledata[111], '', 'Width', 'Customize the width of the bottom line');
                                                echo oxi_team_show_admin_number('bottom-height', $styledata[113], '', 'Height', 'Customize the height of the bottom line');
                                                echo oxi_team_show_admin_color('bottom-color', $styledata[115], '', 'Color', 'Customize the name bottom line color from the color picker. Base color RGBA');
                                                echo oxi_team_show_admin_number('name-margin-bottom', $styledata[117], '', 'Margin Bottom', 'Create some space between the name bottom and member role section');
                                                ?>
                                            </div>
                                        </div>
                                        <div class="oxilab-tabs-content-div-50">
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Member Role
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_number('position-font-size', $styledata[119], '1', 'Font Size', 'Customize the size of the member role Font Size');
                                                echo oxi_team_show_admin_color('position-color', $styledata[121], '', 'Color', 'Customize the font color of member role text.');
                                                echo oxi_team_show_admin_font_family('position-font-family', $styledata[123], 'Font Family', 'Select the Member role font based on google font-family');
                                                echo oxi_team_show_admin_font_weight('position-font-weight', $styledata[125], 'Font Weight', 'Customize the font weight of the Member role text with dafault size or style');
                                                echo oxi_team_show_admin_font_style('position-font-style', $styledata[127], 'Font Style', 'Customize the Member role text font style. Select Normal when no need any style');
                                                echo oxi_team_show_admin_number('position-margin-bottom', $styledata[129], '', 'Margin Bottom', 'Make the Space at the bottom portion of the Member role');
                                                ?> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="oxilab-tabs-content-tabs" id="oxilab-tabs-id-4">
                                        <div class="oxilab-tabs-content-div-50">
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Icon Settings
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_number('icon-font-size', $styledata[131], '1', 'Font Size', 'Customize the size of the social icon logo');
                                                echo oxi_team_show_admin_color('icon-color', $styledata[133], '', 'Color', 'Choose the color of the icon font from the color picker');
                                                echo oxi_team_show_admin_color('icon-background-color', $styledata[135], 'rgba', 'Background Color', 'Customize the background color of icon area. Base color RGBA');
                                                ?>
                                            </div>
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Icon Body
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_number('icon-width', $styledata[137], '1', 'Width', 'Customize the width of the social icon body where the icons are displayed');
                                                echo oxi_team_show_admin_number('icon-padding-top-bottom', $styledata[139], '', 'Padding Top Bottom', 'Generate the space at the top-bottom of icon body');
                                                echo oxi_team_show_admin_number('icon-arrow', $styledata[141], '', 'Arrow Size', 'Customize the arrow size of icon body');
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                        echo oxiteamshowcaseteamadmincategory($styleid, $styledata);
                                        ?>
                                    </div>
                                    <div class="oxilab-tabs-content-tabs" id="oxilab-tabs-id-3">                                  
                                        <?php
                                        echo oxiteamshowcaseteamadmincarousel($styledata);
                                        ?>
                                    </div>
                                    <div class="oxilab-tabs-content-tabs" id="oxilab-tabs-id-2">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="team-custom-css">Add Your Custom CSS Code Here</label>
                                                <textarea class="form-control" rows="4" id="team-custom-css" name="team-custom-css"><?php echo $styledata[147]; ?></textarea>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="oxilab-tabs-content-tabs" id="oxilab-tabs-id-1">
                                        <?php echo oxi_team_show_admin_support(); ?>
                                    </div>
                                </div>
                            </div>    
                            <div class="oxilab-setting-save">
                                <input type="hidden" id="oxi-team-styleid" name="oxi-team-styleid" value="<?php echo $styleid; ?>">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="data-submit" value="Save">
                                <?php wp_nonce_field("teamstylecss") ?>
                            </div>
                        </form>                        
                    </div>
                </div>
                <div class="oxilab-admin-style-panel-left-preview">
                    <div class="oxilab-admin-style-panel-left-preview-heading">
                        <div class="oxilab-admin-style-panel-left-preview-heading-left">
                            Preview
                        </div>
                        <div class="oxilab-admin-style-panel-left-preview-heading-right">
                            <input type="text" class="form-control oxilab-vendor-color"  data-format="rgb" data-opacity="true"  id="oxilab-preview-data-background" value="rgba(255, 255, 255, 1)">
                        </div>
                    </div>
                    <div class="oxilab-preview-data" id="oxilab-preview-data">
                        <?php oxi_team_show_shortcode_function($styleid, 'admin') ?>
                    </div>
                </div>
            </div>
            <?php oxi_team_show_admin_shortcode($styleid, $listdata); ?>
            <div id="oxilab-add-new-data" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <form method="POST">
                        <?php wp_nonce_field("oxiteamshownewdata"); ?>
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add or Modify Form of Team Showcase</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="oxi-team-name">Name</label>
                                    <input type="text" class="form-control" id="oxi-team-name" name="oxi-team-name" value="<?php echo oxilab_team_admin_html_special_charecter($listexdata[1]); ?>">
                                    <small class="form-text text-muted">Add Team name.</small>
                                </div>
                                <div class="form-group">
                                    <label for="oxi-team-designation">Designation</label>
                                    <input type="text "class="form-control" id="oxi-team-designation" name="oxi-team-designation" value="<?php echo oxilab_team_admin_html_special_charecter($listexdata[3]); ?>">
                                    <small class="form-text text-muted">Give your Team Designation.</small>
                                </div>
                                <div class="form-group">
                                    <label for="oxi-team-profile-image">Profile Image</label>
                                    <div class="col-xs-12-div">
                                        <div class="col-xs-8-div">
                                            <input type="text "class="form-control" id="oxi-team-profile-image" name="oxi-team-profile-image" value="<?php echo $listexdata[5]; ?>">
                                        </div>
                                        <div class="col-xs-4-div">
                                            <button type="button" id="oxi-team-profile-image-button" class="btn btn-default">Upload Image</button>
                                        </div>
                                    </div>
                                    <small class="form-text text-muted">Add or Modify Your front Image.</small>
                                </div>

                                <div class="form-group oxilab-form-multiselect">
                                    <label for="oxilab-team-category">Team Category</label>
                                    <select id="oxilab-team-category" name="oxilab-team-category[]" multiple="multiple">  

                                        <?php
                                        foreach ($categorydata as $category) {
                                            if ($category['class'] != 'oxi-team-cat-all') {
                                                $selected = '';
                                                foreach ($oxilabteamselectdata as $value) {
                                                    if ($category['class'] == $value) {
                                                        $selected = 'selected="selected"';
                                                    }
                                                }
                                                echo '<option value="' . $category['class'] . '" ' . $selected . '>' . $category['name'] . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                    <small class="form-text text-muted">If You Want Team Category Select Category.</small>
                                </div>
                                <div class="form-group">
                                    <label for="oxi-team-designation">Social Information</label>
                                    <small class="form-text text-muted">Make Blank if you Don't want all</small>
                                    <?php oxilab_team_show_socail_data_input($icondata, $listexdata[7], $listexdata[9], 'First'); ?>
                                    <?php oxilab_team_show_socail_data_input($icondata, $listexdata[11], $listexdata[13], 'Second'); ?>
                                    <?php oxilab_team_show_socail_data_input($icondata, $listexdata[15], $listexdata[17], 'Third'); ?>
                                    <?php oxilab_team_show_socail_data_input($icondata, $listexdata[19], $listexdata[21], 'Forth'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="item-id" name="item-id" value="<?php echo $itemid; ?>">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" name="submit" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
