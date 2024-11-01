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
                . ' image-margin-bottom |' . sanitize_text_field($_POST['image-margin-bottom']) . '|'
                . ' team-animation |' . sanitize_text_field($_POST['team-animation']) . '|'
                . ' team-animation-duration |' . sanitize_text_field($_POST['team-animation-duration']) . '|'
                . ' team-box-shadow-color |' . sanitize_text_field($_POST['team-box-shadow-color']) . '|'
                . ' team-box-shadow-length-horizontal |' . sanitize_text_field($_POST['team-box-shadow-length-horizontal']) . '|'
                . ' team-box-shadow-length-vertical |' . sanitize_text_field($_POST['team-box-shadow-length-vertical']) . '|'
                . ' team-box-shadow-radius-blur |' . sanitize_text_field($_POST['team-box-shadow-radius-blur']) . '|'
                . ' team-box-shadow-radius-spread |' . sanitize_text_field($_POST['team-box-shadow-radius-spread']) . '|'
                . ' team-box-bg-color |' . sanitize_text_field($_POST['team-box-bg-color']) . '|'
                . ' name-general-padding-top-bottom |' . sanitize_text_field($_POST['name-general-padding-top-bottom']) . '|'
                . ' name-general-padding-left-right |' . sanitize_text_field($_POST['name-general-padding-left-right']) . '|'
                . ' name-font-size |' . sanitize_text_field($_POST['name-font-size']) . '|'
                . ' name-color |' . sanitize_text_field($_POST['name-color']) . '|'
                . ' heading-font-family |' . sanitize_text_field($_POST['heading-font-family']) . '|'
                . ' name-font-weight |' . sanitize_text_field($_POST['name-font-weight']) . '|'
                . ' name-font-style |' . sanitize_text_field($_POST['name-font-style']) . '|'
                . ' name-margin-top |' . sanitize_text_field($_POST['name-margin-top']) . '|'
                . ' name-margin-bottom |' . sanitize_text_field($_POST['name-margin-bottom']) . '|'
                . ' position-font-size |' . sanitize_text_field($_POST['position-font-size']) . '|'
                . ' position-color |' . sanitize_text_field($_POST['position-color']) . '|'
                . ' position-font-family |' . sanitize_text_field($_POST['position-font-family']) . '|'
                . ' position-font-weight |' . sanitize_text_field($_POST['position-font-weight']) . '|'
                . ' position-font-style |' . sanitize_text_field($_POST['position-font-style']) . '|'
                . ' position-margin-top |' . sanitize_text_field($_POST['position-margin-top']) . '|'
                . ' position-margin-bottom |' . sanitize_text_field($_POST['position-margin-bottom']) . '|'
                . ' icon-font-size |' . sanitize_text_field($_POST['icon-font-size']) . '|'
                . ' icon-color |' . sanitize_text_field($_POST['icon-color']) . '|'
                . '  ||'
                . ' icon-width |' . sanitize_text_field($_POST['icon-width']) . '|'
                . ' icon-distance |' . sanitize_text_field($_POST['icon-distance']) . '|'
                . ' icon-radius |' . sanitize_text_field($_POST['icon-radius']) . '|'
                . ' icon-hover-radius |' . sanitize_text_field($_POST['icon-hover-radius']) . '|'
                . ' icon-background-color |' . sanitize_text_field($_POST['icon-background-color']) . '|'
                . ' icon-padding-top-bottom |' . sanitize_text_field($_POST['icon-padding-top-bottom']) . '|'
                . '  ||'
                . ' team-top-border-radius |' . sanitize_text_field($_POST['team-top-border-radius']) . '|'
                . ' team-bottom-border-radius |' . sanitize_text_field($_POST['team-bottom-border-radius']) . '|'
                . ' icon-style |' . sanitize_text_field($_POST['icon-style']) . '|'
                . ' team-padding-top-bottom |' . sanitize_text_field($_POST['team-padding-top-bottom']) . '|'
                . ' team-padding-left-right |' . sanitize_text_field($_POST['team-padding-left-right']) . '|'
                . '||'
                . '||'
                . ' team-border-color |' . sanitize_text_field($_POST['team-border-color']) . '|'
                . ' team-custom-css |' . sanitize_text_field($_POST['team-custom-css']) . '|';
        $wpdb->update("$table_name", array("css" => $css), array('id' => $styleid), array('%s'), array('%d'));
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
                                                echo oxi_team_show_admin_number('team-width', $styledata[71], '1', 'Image Width', 'Customize your team image width, Based on pixel');
                                                echo oxi_team_show_admin_number('team-height', $styledata[73], '1', 'Image Height', 'Customize your team image height, Based on pixel');
                                                echo oxi_team_show_admin_number_double('team-padding-top-bottom', $styledata[159], 'team-padding-left-right', $styledata[161], 'Padding', 'Set the padding for top bottom of the team showcase');
                                                ?>                                               
                                            </div>
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    General
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_col_data('team-item', $styledata[75], 'Team Member per Row', 'Customize How many Team You want to Show in a single Row');
                                                echo oxi_team_show_admin_position('team-icon-position', $styledata[77], 'Team Position', 'Customize the position of team typography section and social icon');
                                                echo oxi_team_show_admin_true_false('image-link-opening', $styledata[79], 'Normal', '', 'New Tab', '_blank', 'Link Opening', 'Customize the team member\'s link opening type');
                                                echo oxi_team_show_admin_number_double('image-margin-top', $styledata[81], 'image-margin-bottom', $styledata[83], 'Image Margin', 'Create Distance from Team to Team. First for Top Bottom space, Second for Left Right');
                                                echo oxi_team_show_admin_number_double('team-top-border-radius', $styledata[153], 'team-bottom-border-radius', $styledata[155], 'Border Radius', 'Customize border radius of the team image. First is for top, Second is for bottom');
                                                echo oxi_team_show_admin_color('team-border-color', $styledata[167], 'rgba', 'Border Color', 'Customize the border color of the profile image')
                                                ?> 
                                            </div>                                            
                                        </div>
                                        <div class="oxilab-tabs-content-div-50">
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Animation
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_animation_select('team-animation', $styledata[85]);
                                                echo oxi_team_show_admin_number('team-animation-duration', $styledata[87], '1', 'Animation Duration', 'Select the duration of the Animation showing. Based on Seconds');
                                                ?> 
                                            </div>
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Box Shadow
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_color('team-box-shadow-color', $styledata[89], 'rgba', 'Box Shadow Color', 'Customize the color of Team box shadow, Base color RGBA');
                                                echo oxi_team_show_admin_number_double('team-box-shadow-length-horizontal', $styledata[91], 'team-box-shadow-length-vertical', $styledata[93], 'Box Shadow Length', 'Customize the box shadow length around the Team\'s profile. First for Left Right side, Second for Top and Bottom');
                                                echo oxi_team_show_admin_number_double('team-box-shadow-radius-blur', $styledata[95], 'team-box-shadow-radius-spread', $styledata[97], 'Box Shadow Radius', 'Customize the Radius of box shadow around the profile. First for Radius, Second for Shadow Opacity');
                                                ?> 
                                            </div>

                                        </div>
                                    </div>
                                    <div class="oxilab-tabs-content-tabs" id="oxilab-tabs-id-5">
                                        <div class="oxilab-tabs-content-div-50">
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    General Settings
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_color('team-box-bg-color', $styledata[99], 'rgba', 'Background Color', 'Select color for team background, Base color RGBA');
                                                echo oxi_team_show_admin_number_double('name-general-padding-top-bottom', $styledata[101], 'name-general-padding-left-right', $styledata[103], 'Padding', 'Set the padding for top bottom and left right side of the category body');
                                                ?>  
                                            </div>
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Name Settings
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_number('name-font-size', $styledata[105], '1', 'Font Size', 'Customize the font size of Team member\'s name.');
                                                echo oxi_team_show_admin_color('name-color', $styledata[107], '', 'Color', 'Customize the color of Name text, Base color RGBA');
                                                echo oxi_team_show_admin_font_family('heading-font-family', $styledata[109], 'Font Family', 'Select the name font based on google font-family');
                                                echo oxi_team_show_admin_font_weight('name-font-weight', $styledata[111], 'Font Weight', 'Customize the font weight of the name text with default size or style');
                                                echo oxi_team_show_admin_font_style('name-font-style', $styledata[113], 'Font Style', 'Customize the name text font style. Select Normal when no need any style');
                                                echo oxi_team_show_admin_number_double('name-margin-top', $styledata[115], 'name-margin-bottom', $styledata[117], 'Margin Top Bottom', 'Create some space between Member\'s name and Member\'s role');
                                                ?>   
                                            </div>
                                        </div>
                                        <div class="oxilab-tabs-content-div-50">
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Member Role
                                                </div>
                                                <?php
                                                echo oxi_team_show_admin_number('position-font-size', $styledata[119], '1', 'Font Size', 'Customize the size of the member role text\'s font');
                                                echo oxi_team_show_admin_color('position-color', $styledata[121], '', 'Color', 'Customize the font color of member role text.');
                                                echo oxi_team_show_admin_font_family('position-font-family', $styledata[123], 'Font Family', 'Select the Member role font based on google font-family');
                                                echo oxi_team_show_admin_font_weight('position-font-weight', $styledata[125], 'Font Weight', 'Customize the Font weight of the Member role text with default size or style');
                                                echo oxi_team_show_admin_font_style('position-font-style', $styledata[127], 'Font Style', 'Customize the Member role text font style. Select Normal when no need any style');
                                                echo oxi_team_show_admin_number_double('position-margin-top', $styledata[129], 'position-margin-bottom', $styledata[131], 'Margin Top Bottom', 'Make the space at the top-bottom portion of the member role');
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
                                                <div class="form-group row form-group-sm">
                                                    <label for="icon-style" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Heading Font Style">Icon Style</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control" id="icon-style" name="icon-style">
                                                            <option value="oxi-member-icons-style-1" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-1') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 1</option>
                                                            <option value="oxi-member-icons-style-2" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-2') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 2</option>
                                                            <option value="oxi-member-icons-style-3" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-3') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 3</option>
                                                            <option value="oxi-member-icons-style-4" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-4') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 4</option>
                                                            <option value="oxi-member-icons-style-5" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-5') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 5</option>
                                                            <option value="oxi-member-icons-style-6" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-6') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 6</option>
                                                            <option value="oxi-member-icons-style-7" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-7') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 7</option>
                                                            <option value="oxi-member-icons-style-8" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-8') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 8</option>
                                                            <option value="oxi-member-icons-style-9" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-9') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 9</option>
                                                            <option value="oxi-member-icons-style-10" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-10') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 10</option>
                                                            <option value="oxi-member-icons-style-11" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-11') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 11</option>
                                                            <option value="oxi-member-icons-style-12" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-12') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 12</option>
                                                            <option value="oxi-member-icons-style-13" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-13') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 13</option>
                                                            <option value="oxi-member-icons-style-14" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-14') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 14</option>
                                                            <option value="oxi-member-icons-style-15" <?php
                                                            if ($styledata[157] == 'oxi-member-icons-style-15') {
                                                                echo 'selected';
                                                            }
                                                            ?> >Style 15</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <?php
                                                echo oxi_team_social_icon_selector($icondata, $styleid, $styledata[157], $styledata[135], $styledata[147], $styledata[143], $styledata[145]);
                                                echo oxi_team_show_admin_number('icon-font-size', $styledata[133], '1', 'Font Size', 'Customize the size of the social icon logo');
                                                echo oxi_team_show_admin_color('icon-color', $styledata[135], '', 'Color', 'Choose the color of the icon font from the color picker');
                                                echo oxi_team_show_admin_color('icon-background-color', $styledata[147], 'rgba', 'Background Color', 'Customize the background color of icon area. Base color RGBA');
                                                echo oxi_team_show_admin_number('icon-width', $styledata[139], '1', 'Width', 'Customize the width of the social icon');
                                                echo oxi_team_show_admin_number('icon-distance', $styledata[141], '1', 'Icon Distance', 'Make distance between icon to icon');
                                                echo oxi_team_show_admin_number('icon-radius', $styledata[143], '1', 'Icon Radius', 'Customize the Icon radius');
                                                echo oxi_team_show_admin_number('icon-hover-radius', $styledata[145], '1', 'Hover Radius', 'Customize the Icon radius');
                                                ?>
                                            </div>
                                            <div class="oxilab-tabs-content-div">
                                                <div class="head-oxi">
                                                    Icon Body
                                                </div>  
                                                <?php
                                                echo oxi_team_show_admin_number('icon-padding-top-bottom', $styledata[149], '', 'Padding', 'Make the space at the top-bottom portion of the Icon');
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
                                                <textarea class="form-control" rows="4" id="team-custom-css" name="team-custom-css"><?php echo $styledata[169]; ?></textarea>
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
<style>
<?php
foreach ($icondata as $value) {
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons .' . $value['class'] . ':hover{
            color: ' . $value['bgcolor'] . ';
           }';
}

foreach ($icondata as $value) {
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-background .' . $value['class'] . ':hover{
            color: ' . $value['color'] . ';
            background-color: ' . $value['bgcolor'] . ';
            }';
}
?>
</style>