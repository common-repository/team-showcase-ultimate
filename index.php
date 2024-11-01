<?php
/*
  Plugin Name: Team Showcase and Slider - Team Members Builder
  Author: Biplob Adhikari
  Plugin URI: https://wordpress.org/plugins/team-showcase-ultimate/
  Description: Team Showcase and Slider - Team Members Builder is the best way to Display your team members staff employees or any type of list.Display you Team page with clean, responsive and professional way.
  Author URI: https://oxilab.org
  Version: 1.3
  License: GPLv2 or later
 */
if (!defined('ABSPATH'))
    exit;

$oxi_div_database = '1.3';
define('oxi_team_showcase_and_slider', plugin_dir_path(__FILE__));
define('OXI_TEAM_SHOW_SLIDER_HOME', 'https://www.oxilab.org'); // you should use your own CONSTANT name, and be sure to replace it throughout this file
// the name of your product. This should match the download name in EDD exactly
define('OXI_TEAM_SHOW_SLIDER', 'Team Showcase and Slider'); // you should use your own CONSTANT name, and be sure to replace it throughout this file
// the name of the settings page for the license input to be displayed
define('OXI_TEAM_SHOW_SLIDER_LICENSE_PAGE', 'oxi-team-show-slider-license');

add_shortcode('oxi_team_show', 'oxi_team_show_shortcode');

include oxi_team_showcase_and_slider . 'public.php';

function oxi_team_show_shortcode($atts) {
    extract(shortcode_atts(array('id' => ' ',), $atts));
    $styleid = $atts['id'];
    ob_start();
    oxi_team_show_shortcode_function($styleid, 'user');
    return ob_get_clean();
}

if (!function_exists('is_plugin_active')) {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}
if (is_plugin_active('js_composer/js_composer.php')) {
    add_action('vc_before_init', 'oxi_team_show_VC_extension');
    add_shortcode('oxi_team_show_VC', 'oxi_team_show_VC_shortcode');

    function oxi_team_show_VC_shortcode($atts) {
        extract(shortcode_atts(array(
            'id' => ''
                        ), $atts));
        $styleid = $atts['id'];
        ob_start();
        oxi_team_show_shortcode_function($styleid, 'user');
        return ob_get_clean();
    }

    function oxi_team_show_VC_extension() {
        global $wpdb;
        $data = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'oxi_div_style WHERE type = "team" ORDER BY id DESC', ARRAY_A);
        $vcdata = array();
        foreach ($data as $value) {
            $vcdata[] = $value['id'];
        }
        vc_map(array(
            "name" => __("Team Showcase and Slider"),
            "base" => "oxi_team_show_VC",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "dropdown",
                    "heading" => "team Showcase Id Select",
                    "param_name" => "id",
                    "value" => $vcdata,
                    'save_always' => true,
                    "description" => "Select your Team Showcase ID",
                    "group" => 'Settings',
                ),
            )
        ));
    }

}

function oxilab_team_font_familly_special_charecter($data) {
    wp_enqueue_style('' . $data . '', 'https://fonts.googleapis.com/css?family=' . $data . '');
    $data = explode(':', $data);
    $data = $data[0];
    $data = str_replace('+', ' ', $data);
    $data = '"' . $data . '"';
    return $data;
}

function oxilab_team_html_special_charecter($data) {
    $data = str_replace("\'", "'", $data);
    $data = str_replace('\"', '"', $data);
    return $data;
}

function oxilab_team_admin_html_special_charecter($data) {
    $data = str_replace("\'", "&#39", $data);
    $data = str_replace('\"', '&#34', $data);
    return $data;
}

function oxiteamshowcaseteamsocail($data) {
    if (strpos($data, 'fa') !== false) {
        if (strpos($data, 'fab') !== false || strpos($data, 'fas') !== false || strpos($data, 'far') !== false || strpos($data, 'fal') !== false) {
            $data = '<i class="' . $data . '"></i>';
        } else {
            $data = '<i class="fas  ' . $data . '"></i>';
        }
    }
    return $data;
}

function oxilab_team_admin_style_layouts($styledata, $listdata) {
    $categorydata = ARRAY(Array('All', 'team', 'oxi-team-cat-all'), Array('Senior Manager', 'team', 'oxi-team-cat-senior-manager'), Array('Seles', 'team', 'oxi-team-cat-seles'), Array('Customer Support', 'team', 'oxi-team-cat-customer-support'));
    $socialdata = ARRAY(
        0 => Array('name' => 'Facebook', 'type' => 'team', 'class' => 'fab fa-facebook-f', 'color' => '#ffffff', 'bgcolor' => 'rgba(59, 89, 153, 1)'),
        1 => Array('name' => 'Linkedin', 'type' => 'team', 'class' => 'fab fa-linkedin-in', 'color' => '#ffffff', 'bgcolor' => 'rgba(0, 119, 181, 1)'),
        2 => Array('name' => 'Twitter', 'type' => 'team', 'class' => 'fab fa-twitter', 'color' => '#ffffff', 'bgcolor' => 'rgba(85, 172, 238, 1)'),
        3 => Array('name' => 'Wordpress', 'type' => 'team', 'class' => 'fab fa-wordpress', 'color' => '#ffffff', 'bgcolor' => 'rgba(33, 117, 155, 1)'),
        4 => Array('name' => 'Yahoo', 'type' => 'team', 'class' => 'fab fa-yahoo', 'color' => '#ffffff', 'bgcolor' => 'rgba(65, 0, 147, 1)'),
        5 => Array('name' => 'Google Plus', 'type' => 'team', 'class' => 'fab fa-google-plus-g', 'color' => '#ffffff', 'bgcolor' => 'rgba(221, 75, 57, 1)'),
        6 => Array('name' => 'Pinterest', 'type' => 'team', 'class' => 'fab fa-pinterest-p', 'color' => '#ffffff', 'bgcolor' => 'rgba(189, 8, 28, 1)'),
        7 => Array('name' => 'Whatsapp', 'type' => 'team', 'class' => 'fab fa-whatsapp', 'color' => '#ffffff', 'bgcolor' => 'rgba(37, 211, 102, 1)'),
        8 => Array('name' => 'Skype', 'type' => 'team', 'class' => 'fab fa-skype', 'color' => '#ffffff', 'bgcolor' => 'rgba(0, 175, 240, 1)'),
    );

    wp_enqueue_style('oxi-team-show', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('font-awesome', plugins_url('js-css/font-awesome.min.css', __FILE__));
    wp_enqueue_style('animate', plugins_url('public/animate.css', __FILE__));
    wp_enqueue_script('jquery-viewportchecker-min', plugins_url('public/jquery.viewportchecker.min.js', __FILE__));
    include_once oxi_team_showcase_and_slider . 'public/' . $styledata['style_name'] . '.php';
    $stylefunctionmane = 'oxi_team_show_shortcode_function_' . $styledata['style_name'] . '';
    $stylefunctionmane($styledata['id'], 'user', explode('|', $styledata['css']), $listdata, $categorydata, $socialdata);
}

function oxi_team_show_slider_user_capabilities() {
    $user_role = get_option('oxi_team_show_slider_user_role_key');
    $role_object = get_role($user_role);
    $first_key = '';
    if (isset($role_object->capabilities) && is_array($role_object->capabilities)) {
        reset($role_object->capabilities);
        $first_key = key($role_object->capabilities);
    } else {
        $first_key = 'manage_options';
    }
    if (!current_user_can($first_key)) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
}

add_action('admin_menu', 'oxi_team_show_slider_menu');

function oxi_team_show_slider_menu() {
    $user_role = get_option('oxi_team_show_slider_user_role_key');
    $role_object = get_role($user_role);
    $first_key = '';
    if (isset($role_object->capabilities) && is_array($role_object->capabilities)) {
        reset($role_object->capabilities);
        $first_key = key($role_object->capabilities);
    } else {
        $first_key = 'manage_options';
    }
    add_menu_page('Team Showcase', 'Team Showcase', $first_key, 'oxi-team-show-slider', 'oxi_team_show_slider_menu_home');
    add_submenu_page('oxi-team-show-slider', 'Team Showcase', 'Team Showcase', $first_key, 'oxi-team-show-slider', 'oxi_team_show_slider_menu_home');
    add_submenu_page('oxi-team-show-slider', 'Create Teams', 'Create Teams', $first_key, 'oxi-team-show-slider-new', 'oxi_team_show_slider_menu_new');
    add_submenu_page('oxi-team-show-slider', 'Sozial Icon', 'Social Icon', $first_key, 'oxi-team-show-slider-social', 'oxi_team_show_slider_menu_social');
    add_submenu_page('oxi-team-show-slider', 'Team Category', 'Team Category', $first_key, 'oxi-team-show-slider-category', 'oxi_team_show_slider_menu_category');
    add_submenu_page('oxi-team-show-slider', 'Settings', 'Settings', 'manage_options', OXI_TEAM_SHOW_SLIDER_LICENSE_PAGE, 'oxi_team_show_slider_license_page');
    add_submenu_page('oxi-team-show-slider', 'Import Template', 'Import Template', $first_key, 'oxi-team-show-slider-import', 'oxi_team_show_slider_menu_inport');
}

function oxi_team_show_slider_menu_home() {
    oxi_team_show_slider_user_capabilities();
    include oxi_team_showcase_and_slider . 'home.php';
    wp_enqueue_script('oxilab-bootstrap-js', plugins_url('js-css/bootstrap.min.js', __FILE__));
    wp_enqueue_style('oxilab-bootstrap', plugins_url('js-css/bootstrap.min.css', __FILE__));
    wp_enqueue_style('oxilab-style', plugins_url('js-css/admin.css', __FILE__));
    wp_enqueue_style('font-awesome', plugins_url('js-css/font-awesome.min.css', __FILE__));
    wp_enqueue_script('oxilab-admin-home', plugins_url('admin-jquery/home.js', __FILE__));
}

function oxi_team_show_slider_menu_social() {
    oxi_team_show_slider_user_capabilities();
    include oxi_team_showcase_and_slider . 'social.php';
    wp_enqueue_script('oxilab-bootstrap-js', plugins_url('js-css/bootstrap.min.js', __FILE__));
    wp_enqueue_style('oxilab-bootstrap', plugins_url('js-css/bootstrap.min.css', __FILE__));
    wp_enqueue_style('oxilab-style', plugins_url('js-css/admin.css', __FILE__));
    wp_enqueue_style('font-awesome', plugins_url('js-css/font-awesome.min.css', __FILE__));
    wp_enqueue_script('oxilab-color', plugins_url('js-css/minicolors.js', __FILE__));
    wp_enqueue_style('oxilab-color', plugins_url('js-css/minicolors.css', __FILE__));
    wp_enqueue_script('oxilab-admin-social', plugins_url('admin-jquery/social.js', __FILE__));
}

function oxi_team_show_slider_menu_category() {
    oxi_team_show_slider_user_capabilities();
    include oxi_team_showcase_and_slider . 'category.php';
    wp_enqueue_script('oxilab-bootstrap-js', plugins_url('js-css/bootstrap.min.js', __FILE__));
    wp_enqueue_style('oxilab-bootstrap', plugins_url('js-css/bootstrap.min.css', __FILE__));
    wp_enqueue_style('oxilab-style', plugins_url('js-css/admin.css', __FILE__));
    wp_enqueue_style('font-awesome', plugins_url('js-css/font-awesome.min.css', __FILE__));
    wp_enqueue_script('oxilab-color', plugins_url('js-css/minicolors.js', __FILE__));
    wp_enqueue_style('oxilab-color', plugins_url('js-css/minicolors.css', __FILE__));
    wp_enqueue_script('oxilab-admin-category', plugins_url('admin-jquery/category.js', __FILE__));
}

function oxi_team_show_slider_menu_inport() {
    oxi_team_show_slider_user_capabilities();
    wp_enqueue_style('oxilab-admin', plugins_url('js-css/admin.css', __FILE__));
    wp_enqueue_style('oxilab-bootstrap', plugins_url('js-css/bootstrap.min.css', __FILE__));
    wp_enqueue_style('oxilab-font-awesome', plugins_url('js-css/font-awesome.min.css', __FILE__));
    wp_enqueue_style('oxi-team-show', plugins_url('public/style.css', __FILE__));
    wp_enqueue_script('jQuery');
    wp_enqueue_script('oxilab-bootstrap', plugins_url('js-css/bootstrap.min.js', __FILE__));
    wp_enqueue_script('oxilab-admin-import', plugins_url('admin-jquery/import.js', __FILE__));
    include oxi_team_showcase_and_slider . 'layouts/import-style.php';
}

function oxi_team_show_slider_menu_new() {
    oxi_team_show_slider_user_capabilities();
    wp_enqueue_style('oxilab-admin', plugins_url('js-css/admin.css', __FILE__));
    wp_enqueue_style('oxilab-bootstrap', plugins_url('js-css/bootstrap.min.css', __FILE__));
    wp_enqueue_style('oxilab-font-awesome', plugins_url('js-css/font-awesome.min.css', __FILE__));
    wp_enqueue_style('oxi-team-show', plugins_url('public/style.css', __FILE__));
    wp_enqueue_script('jQuery');
    wp_enqueue_script('oxilab-bootstrap', plugins_url('js-css/bootstrap.min.js', __FILE__));
    wp_enqueue_script('jquery.bootstrap-growl', plugins_url('js-css/jquery.bootstrap-growl.js', __FILE__));
    if (!empty($_GET['styleid']) && is_numeric($_GET['styleid'])) {
        $id = $_GET['styleid'];
        global $wpdb;
        $table_name = $wpdb->prefix . 'oxi_div_style';
        $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d AND type = %s", $id, 'team'), ARRAY_A);
        wp_enqueue_script('oxilab-font-select', plugins_url('js-css/font-select.js', __FILE__));
        wp_enqueue_script('oxilab-color', plugins_url('js-css/minicolors.js', __FILE__));
        wp_enqueue_script('oxilab-multiple-select', plugins_url('js-css/multiselect.js', __FILE__));
        wp_enqueue_script('oxilab-category-admin', plugins_url('admin-jquery/category.js', __FILE__));
        wp_enqueue_script('oxilab-social-admin', plugins_url('admin-jquery/social.js', __FILE__));
        wp_enqueue_script('oxilab-carousel-admin', plugins_url('admin-jquery/carousel.js', __FILE__));
        wp_enqueue_script('oxilab-team-' . $styledata['style_name'] . '', plugins_url('admin-jquery/' . $styledata['style_name'] . '.js', __FILE__));
        include oxi_team_showcase_and_slider . 'admin/helper.php';
        include oxi_team_showcase_and_slider . 'admin/' . $styledata['style_name'] . '.php';
        oxi_team_show_image_media_scripts();
        wp_enqueue_style('oxilab-color', plugins_url('js-css/minicolors.css', __FILE__));
        oxi_team_show_admin_ajax();
        add_action('wp_print_scripts', 'oxi_team_show_admin_ajax');
    } else {
        include oxi_team_showcase_and_slider . 'layouts/index.php';
    }
}

function oxi_team_show_admin_ajax() {
    wp_enqueue_script('oxi-team-show-admin-ajax', plugins_url('admin-jquery/drag-drop.js', __FILE__));
    wp_localize_script('oxi-team-show-admin-ajax', 'oxi_team_show_admin_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
}

function oxi_team_show_admin_image($id) {
    return WP_PLUGIN_URL . '/team-showcase-ultimate/layouts/image/' . $id;
}

function oxi_team_show_image_media_scripts() {
    wp_enqueue_media();
    wp_register_script('oxi_team_show_image_media_scripts', plugins_url('js-css/media-uploader.js', __FILE__));
    wp_enqueue_script('oxi_team_show_image_media_scripts');
}

function oxi_team_show_admin_ajax_data() {
    check_ajax_referer('oxi_team_show_ajax_data', 'security');
    $table_list = $wpdb->prefix . 'oxi_div_list';
    $list = explode(',', $list_order);
    global $wpdb;
    $table_list = $wpdb->prefix . 'content_tabs_ultimate_list';
    foreach ($list as $value) {
        $data = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_list WHERE id = %d ", $value), ARRAY_A);
        $wpdb->query($wpdb->prepare("INSERT INTO {$table_list} (styleid, type, files, css) VALUES (%d, %s, %s, %s)", array($data['styleid'], $data['type'], $data['files'], $data['css'])));
        $redirect_id = $wpdb->insert_id;
        if ($redirect_id == 0) {
            wp_die();
        }
        if ($redirect_id != 0) {
            $wpdb->query($wpdb->prepare("DELETE FROM $table_list WHERE id = %d", $value));
        }
    }
    wp_die();
}

add_action('wp_ajax_oxi_team_show_admin_ajax_data', 'oxi_team_show_admin_ajax_data');


add_action('admin_head', 'add_oxi_team_show_slider_icons_styles');

function add_oxi_team_show_slider_icons_styles() {
    ?>
    <style>
        #adminmenu #toplevel_page_oxi-team-show-slider div.wp-menu-image:before {
            content: "\f110";
        }
    </style>

    <?php
}

register_activation_hook(__FILE__, 'oxi_team_show_slider_install');

function oxi_team_show_slider_install() {
    global $wpdb;
    global $oxi_div_database;

    $table_name = $wpdb->prefix . 'oxi_div_style';
    $table_list = $wpdb->prefix . 'oxi_div_list';
    $table_icon = $wpdb->prefix . 'oxi_div_social_icon';
    $table_category = $wpdb->prefix . 'oxi_div_category';
    $table_import = $wpdb->prefix . 'oxi_div_import';

    $charset_collate = $wpdb->get_charset_collate();

    $sql1 = "CREATE TABLE $table_name (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                name varchar(50) NOT NULL,
                type varchar(50) NOT NULL,
                style_name varchar(40) NOT NULL,
                css text,
		PRIMARY KEY  (id)
	) $charset_collate;";

    $sql2 = "CREATE TABLE $table_list (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                styleid mediumint(6) NOT NULL,
                type varchar(50),
                files text,
                css text,
		PRIMARY KEY  (id)
	) $charset_collate;";
    $sql3 = "CREATE TABLE $table_icon (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                name varchar(40) NOT NULL,
                type varchar(50) NOT NULL,
                class varchar(100) NOT NULL,
                color varchar(20) NOT NULL,
                bgcolor varchar(40) NOT NULL,
		PRIMARY KEY  (id),
                UNIQUE unique_index (type, class)
                
	) $charset_collate;";
    $sql4 = "CREATE TABLE $table_category (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                type varchar(50) NOT NULL,
                name varchar(40) NOT NULL,
                class varchar(50) NOT NULL,
		PRIMARY KEY  (id),
                UNIQUE unique_index (type, class)
	) $charset_collate;";

    $sql5 = "CREATE TABLE $table_import (
		id mediumint(5) NOT NULL AUTO_INCREMENT,
                type varchar(50) NOT NULL,
                name mediumint(5) NOT NULL,      
		PRIMARY KEY  (id),
                UNIQUE unique_index (type, name)
	) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql1);
    dbDelta($sql2);
    dbDelta($sql3);
    dbDelta($sql4);
    dbDelta($sql5);

    add_option('oxi_div_database', $oxi_div_database);
    $wpdb->query("INSERT INTO {$table_icon} (name, type, class, color, bgcolor) VALUES 
        ('Linkedin', 'team', 'fab fa-linkedin-in', '#ffffff', 'rgba(0, 119, 181, 1)'),
        ('Twitter', 'team', 'fab fa-twitter', '#ffffff', 'rgba(85, 172, 238, 1)'),
        ('Facebook', 'team', 'fab fa-facebook-f', '#ffffff', 'rgba(59, 89, 153, 1)'),
        ('Skype', 'team', 'fab fa-skype', '#ffffff', 'rgba(0, 175, 240, 1)'),
        ('Dropbox', 'team', 'fab fa-dropbox', '#ffffff', 'rgba(0, 126, 229, 1)'),
        ('Wordpress', 'team', 'fab fa-wordpress', '#ffffff', 'rgba(33, 117, 155, 1)'),
        ('vimeo', 'team', 'fab fa-vimeo-v', '#ffffff', 'rgba(26, 183, 234, 1)'),
        ('Slideshare', 'team', 'fab fa-slideshare', '#ffffff', 'rgba(0, 119, 181, 1)'),
        ('Vk', 'team', 'fab fa-vk', '#ffffff', 'rgba(76, 117, 163, 1)'),
        ('Tumblr', 'team', 'fab fa-tumblr', '#ffffff', 'rgba(52, 70, 93, 1)'),
        ('Yahoo', 'team', 'fab fa-yahoo', '#ffffff', 'rgba(65, 0, 147, 1)'),
        ('Google Plus', 'team', 'fab fa-google-plus-g', '#ffffff', 'rgba(221, 75, 57, 1)'),
        ('Pinterest', 'team', 'fab fa-pinterest-p', '#ffffff', 'rgba(189, 8, 28, 1)'),
        ('Youtube', 'team', 'fab fa-youtube', '#ffffff', 'rgba(205, 32, 31, 1)'),
        ('Stumbleupon', 'team', 'fab fa-stumbleupon', '#ffffff', 'rgba(235, 73, 36, 1)'),
        ('Reddit', 'team', 'fab fa-reddit-alien', '#ffffff', 'rgba(255, 87, 0, 1)'),
        ('Quora', 'team', 'fab fa-quora', '#ffffff', 'rgba(185, 43, 39, 1)'),
        ('Yelp', 'team', 'fab fa-yelp', '#ffffff', 'rgba(175, 6, 6, 1)'),
        ('Weibo', 'team', 'fab fa-weibo', '#fafafa', 'rgba(223, 32, 41, 1)'),
        ('Producthunt', 'team', 'fab fa-product-hunt', '#ffffff', 'rgba(218, 85, 47, 1)'),
        ('Hackernews', 'team', 'fab fa-hacker-news', '#ffffff', 'rgba(255, 102, 0, 1)'),
        ('Soundcloud', 'team', 'fab fa-soundcloud', '#ffffff', 'rgba(255, 51, 0, 1)'),
        ('Blogger', 'team', 'fas fa-rss', '#ffffff', 'rgba(245, 125, 0, 1)'),
        ('Whatsapp', 'team', 'fab fa-whatsapp', '#ffffff', 'rgba(37, 211, 102, 1)'),
        ('Wechat', 'team', 'fab fa-weixin', '#ffffff', 'rgba(9, 184, 62, 1)'),
        ('Line', 'team', 'fas fa-chart-line', '#ffffff', 'rgba(0, 195, 0, 1)'),
        ('Medium', 'team', 'fab fa-medium', '#ffffff', 'rgba(2, 184, 117, 1)'),
        ('Vine', 'team', 'fab fa-vine', '#ffffff', 'rgba(0, 180, 137, 1)'),
        ('Slack', 'team', 'fab fa-slack', '#ffffff', 'rgba(58, 175, 133, 1)'),
        ('Instagram', 'team', 'fab fa-instagram', '#e4405f', 'rgba(255, 255, 255, 1)'),
        ('Dribbble', 'team', 'fab fa-dribbble', '#ffffff', 'rgba(234, 76, 137, 1)'),
        ('Flickr', 'team', 'fab fa-flickr', '#ffffff', 'rgba(255, 0, 132, 1)'),
        ('Foursquare', 'team', 'fab fa-foursquare', '#ffffff', 'rgba(249, 72, 119, 1)'),
        ('Behance', 'team', 'fab fa-behance', '#ffffff', 'rgba(19, 20, 24, 1)'),
        ('Snapchat', 'team', 'fab fa-snapchat', '#ffffff', 'rgba(255, 252, 0, 1)'),
        ('Paypal', 'team', 'fab fa-paypal', '#ffffff', 'rgba(0, 48, 135, 1)'),
        ('Bandcamp', 'team', 'fab fa-bandcamp', '#ffffff', 'rgba(0, 150, 136, 1)')");
    $wpdb->query("INSERT INTO {$table_category} (name, type, class) VALUES 
        ('All', 'team', 'oxi-team-cat-all'),
        ('Senior Manager', 'team', 'oxi-team-cat-senior-manager'),
        ('Seles', 'team', 'oxi-team-cat-seles'),
        ('Customer Support', 'team', 'oxi-team-cat-customer-support'),
        ('Digital Customers', 'team', 'oxi-team-cat-digital-customers')");
    $wpdb->query("INSERT INTO {$table_import} ( name, type) VALUES
        (1, 'team'),
        (2, 'team'),
        (3, 'team'),
        (4, 'team'),
        (5, 'team'),
        (6, 'team'),
        (7, 'team'),
        (8, 'team'),
        (9, 'team'),
        (10, 'team')");
    $now = strtotime("now");
    add_option('oxi_team_show_slider_activation_date', $now);
    set_transient('_Oxi_team_show_slider_welcome_activation_redirect', true, 30);
}

add_action('admin_init', 'Oxi_team_show_slider_welcome_activation_redirect');

function Oxi_team_show_slider_welcome_activation_redirect() {
    if (!get_transient('_Oxi_team_show_slider_welcome_activation_redirect')) {
        return;
    }
    delete_transient('_Oxi_team_show_slider_welcome_activation_redirect');
    if (is_network_admin() || isset($_GET['activate-multi'])) {
        return;
    }
    wp_safe_redirect(add_query_arg(array('page' => 'oxi-team-show-slider-welcome'), admin_url('index.php')));
}

add_action('admin_menu', 'Oxi_team_show_slider_welcome_pages');

function Oxi_team_show_slider_welcome_pages() {
    add_dashboard_page(
            'Welcome To Team Showcase and Slider', 'Welcome To Team Showcase and Slider', 'read', 'oxi-team-show-slider-welcome', 'oxi_team_show_slider_welcome'
    );
}

function oxi_team_show_slider_welcome() {
    wp_enqueue_style('oxi-team-show-slider-welcome', plugins_url('js-css/admin-welcome.css', __FILE__));
    ?>
    <div class="wrap about-wrap">

        <h1>Welcome to Team Showcase and Slider - Team Members Builder</h1>
        <div class="about-text">
            Thank you for choosing Team Showcase and Slider - Team Members Builder - the most friendly WordPress Team Showcase Plugins. Here's how to get started.
        </div>
        <h2 class="nav-tab-wrapper">
            <a class="nav-tab nav-tab-active">
                Getting Started		
            </a>
        </h2>
        <p class="about-description">
            Use the tips below to get started using Team Showcase and Slider - Team Members Builder. You will be up and running in no time.	
        </p>    
        <div class="feature-section">
            <h3>Have any Bugs or Suggestion</h3>
            <p>Your suggestions will make this plugin even better, Even if you get any bugs on Team Showcase and Slider - Team Members Builder so let us to know, We will try to solved within few hours</p>
            <p><a href="https://www.oxilab.org/contact-us" target="_blank" rel="noopener" class="ihewc-image-features-button button button-primary">Contact Us</a>
                <a href="https://wordpress.org/support/plugin/team-showcase-ultimate/" target="_blank" rel="noopener" class="ihewc-image-features-button button button-primary">Support Forum</a></p>

        </div>

    </div>
    <?php
}

add_action('admin_head', 'oxi_team_show_slider_welcome_remove_menus');

function oxi_team_show_slider_welcome_remove_menus() {
    remove_submenu_page('index.php', 'oxi-team-show-slider-welcome');
}

function oxilab_team_show_socail_data_input($icondata, $icon, $url, $position) {
    $data = '  <div class="col-xs-12-div col-xs-12-div-team-data"><div class="col-xs-2-div"> ' . $position . ' Info</div>
                
                    <div class="col-xs-4-div">
                        <select class="form-control" id="oxi-team-socail-' . $position . '" name="oxi-team-socail-' . $position . '">'
            . '<option value="">Select</option>';


    foreach ($icondata as $value) {
        $data .= '<option value="' . $value['class'] . '"';
        if ($icon == $value['class']) {
            $data .= 'selected';
        }
        $data .= '>' . $value['name'] . '</option>';
    }
    $data .= '           </select>
                    </div>
                    <div class="col-xs-6-div">
                        <input type="text "class="form-control" name="oxi-team-socail-' . $position . '-url" id="oxi-team-socail-' . $position . '-url"  value="' . $url . '" placeholder="http://www.google.com">
                    </div> </div>';
    echo $data;
}

// load our custom updater
include( dirname(__FILE__) . '/Plugin_Updater.php' );

function oxi_team_show_slider_plugin_updater() {
    $license_key = trim(get_option('oxi_team_show_slider_license_key'));
    // retrieve our license key from the DB
    // setup the updater
    $oxi_team_show_slider_updater = new OXI_TEAM_SHOW_SLIDER_Plugin_Updater(OXI_TEAM_SHOW_SLIDER_HOME, __FILE__, array(
        'version' => '1.3', // current version number
        'license' => $license_key, // license key (used get_option above to retrieve from DB)
        'item_name' => OXI_TEAM_SHOW_SLIDER, // name of this plugin
        'author' => 'Biplob Adhikari', // author of this plugin
        'beta' => false
            )
    );
}

$status = get_option('oxi_team_show_slider_license_status');
if ($status == 'valid') {
    add_action('admin_init', 'oxi_team_show_slider_plugin_updater', 0);
}

/* * **********************************
 * the code below is just a standard
 * options page. Substitute with
 * your own.
 * *********************************** */

function oxi_team_show_slider_license_page() {
    $license = get_option('oxi_team_show_slider_license_key');
    $status = get_option('oxi_team_show_slider_license_status');
    global $wp_roles;
    $roles = $wp_roles->get_names();
    $saved_role = get_option('oxi_team_show_slider_user_role_key');
    ?>

    <div class="wrap">
        <?php if ($status !== false && $status == 'valid') { ?>
            <div class="updated">
                <p>Thank you to Active our Plugins. Kindly wait 2-3 minute to get update notification if you using free or older version. Once you get notification please update.</p>
            </div>
        <?php }
        ?>
        <h2><?php _e('User Role'); ?></h2>
        <p>Select User Role Who Can Save Edit and Delete This Plugins.</p>
        <form method="post" action="options.php">
            <table class="form-table">
                <?php settings_fields('oxi_team_show_slider_user_role'); ?>
                <tbody>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('Who Can Edit?'); ?>
                        </th>
                        <td>
                            <select class="widefat" name="oxi_team_show_slider_user_role_key">
                                <?php foreach ($roles as $key => $role) { ?>
                                    <option value="<?php echo $key; ?>" <?php selected($saved_role, $key); ?>><?php echo $role; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td>                           
                            <label class="description" for="oxi_team_show_slider_user_role"><?php _e('Select the Role who can manage This Plugins.'); ?>
                                <a target="_blank" href="https://codex.wordpress.org/Roles_and_Capabilities#Capability_vs._Role_Table">Help</a></label>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php submit_button(); ?>
        </form>
        <br>
        <br>
        <br>
        <h2><?php _e('Product License Activation'); ?></h2>
        <p>Activate your copy to get direct plugin updates and official support.</p>
        <form method="post" action="options.php">

            <?php settings_fields('oxi_team_show_slider_license'); ?>

            <table class="form-table">
                <tbody>
                    <tr valign="top">
                        <th scope="row" valign="top">
                            <?php _e('License Key'); ?>
                        </th>
                        <td>
                            <input id="oxi_team_show_slider_license_key" name="oxi_team_show_slider_license_key" type="text" class="regular-text" value="<?php esc_attr_e($license); ?>" />
                            <label class="description" for="oxi_team_show_slider_license_key"><?php _e('Enter your license key'); ?></label>
                        </td>
                    </tr>
                    <?php if (!empty($license)) { ?>
                        <tr valign="top">
                            <th scope="row" valign="top">
                                <?php _e('Activate License'); ?>
                            </th>
                            <td>
                                <?php if ($status !== false && $status == 'valid') { ?>
                                    <span style="color:green;"><?php _e('active'); ?></span>
                                    <?php wp_nonce_field('oxi_team_show_slider_nonce', 'oxi_team_show_slider_nonce'); ?>
                                    <input type="submit" class="button-secondary" name="oxi_team_show_slider_license_deactivate" value="<?php _e('Deactivate License'); ?>"/>
                                    <?php
                                } else {
                                    wp_nonce_field('oxi_team_show_slider_nonce', 'oxi_team_show_slider_nonce');
                                    ?>
                                    <input type="submit" class="button-secondary" name="oxi_team_show_slider_license_activate" value="<?php _e('Activate License'); ?>"/>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php submit_button(); ?>

        </form>
        <?php
    }

    function oxi_team_show_slider_user_role_option() {
        // creates our settings in the options table
        register_setting('oxi_team_show_slider_user_role', 'oxi_team_show_slider_user_role_key');
    }

    add_action('admin_init', 'oxi_team_show_slider_user_role_option');

    function oxi_team_show_slider_register_option() {
        // creates our settings in the options table
        register_setting('oxi_team_show_slider_license', 'oxi_team_show_slider_license_key', 'oxi_team_show_slider_sanitize_license');
    }

    add_action('admin_init', 'oxi_team_show_slider_register_option');

    function oxi_team_show_slider_sanitize_license($new) {
        $old = get_option('oxi_team_show_slider_license_key');
        if ($old && $old != $new) {
            delete_option('oxi_team_show_slider_license_status'); // new license has been entered, so must reactivate
        }
        return $new;
    }

    /*     * **********************************
     * this illustrates how to activate
     * a license key
     * *********************************** */

    function oxi_team_show_slider_activate_license() {

        // listen for our activate button to be clicked
        if (isset($_POST['oxi_team_show_slider_license_activate'])) {

            // run a quick security check
            if (!check_admin_referer('oxi_team_show_slider_nonce', 'oxi_team_show_slider_nonce'))
                return; // get out if we didn't click the Activate button
// retrieve the license from the database
            $license = trim(get_option('oxi_team_show_slider_license_key'));
            // data to send in our API request
            $api_params = array(
                'edd_action' => 'activate_license',
                'license' => $license,
                'item_name' => urlencode(OXI_TEAM_SHOW_SLIDER), // the name of our product in EDD
                'url' => home_url()
            );

            // Call the custom API.
            $response = wp_remote_post(OXI_TEAM_SHOW_SLIDER_HOME, array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));

            // make sure the response came back okay
            if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {

                if (is_wp_error($response)) {
                    $message = $response->get_error_message();
                } else {
                    $message = __('An error occurred, please try again.');
                }
            } else {

                $license_data = json_decode(wp_remote_retrieve_body($response));

                if (false === $license_data->success) {

                    switch ($license_data->error) {

                        case 'expired' :

                            $message = sprintf(
                                    __('Your license key expired on %s.'), date_i18n(get_option('date_format'), strtotime($license_data->expires, current_time('timestamp')))
                            );
                            break;

                        case 'revoked' :

                            $message = __('Your license key has been disabled.');
                            break;

                        case 'missing' :

                            $message = __('Invalid license.');
                            break;

                        case 'invalid' :
                        case 'site_inactive' :

                            $message = __('Your license is not active for this URL.');
                            break;

                        case 'item_name_mismatch' :

                            $message = sprintf(__('This appears to be an invalid license key for %s.'), OXI_TEAM_SHOW_SLIDER);
                            break;

                        case 'no_activations_left':

                            $message = __('Your license key has reached its activation limit.');
                            break;

                        default :

                            $message = __('An error occurred, please try again.');
                            break;
                    }
                }
            }

            // Check if anything passed on a message constituting a failure
            if (!empty($message)) {
                $base_url = admin_url('admin.php?page=' . OXI_TEAM_SHOW_SLIDER_LICENSE_PAGE);
                $redirect = add_query_arg(array('sl_activation' => 'false', 'message' => urlencode($message)), $base_url);

                wp_redirect($redirect);
                exit();
            }

            // $license_data->license will be either "valid" or "invalid"

            update_option('oxi_team_show_slider_license_status', $license_data->license);
            wp_redirect(admin_url('admin.php?page=' . OXI_TEAM_SHOW_SLIDER_LICENSE_PAGE));
            exit();
        }
    }

    add_action('admin_init', 'oxi_team_show_slider_activate_license');
    /*     * *********************************************
     * Illustrates how to deactivate a license key.
     * This will decrease the site count
     * ********************************************* */

    function oxi_team_show_slider_deactivate_license() {

        // listen for our activate button to be clicked
        if (isset($_POST['oxi_team_show_slider_license_deactivate'])) {

            // run a quick security check
            if (!check_admin_referer('oxi_team_show_slider_nonce', 'oxi_team_show_slider_nonce'))
                return; // get out if we didn't click the Activate button 
// retrieve the license from the database
            $license = trim(get_option('oxi_team_show_slider_license_key'));
            // data to send in our API request
            $api_params = array(
                'edd_action' => 'deactivate_license',
                'license' => $license,
                'item_name' => urlencode(OXI_TEAM_SHOW_SLIDER), // the name of our product in EDD
                'url' => home_url()
            );
            // Call the custom API.
            $response = wp_remote_post(OXI_TEAM_SHOW_SLIDER_HOME, array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));
            // make sure the response came back okay
            if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {
                if (is_wp_error($response)) {
                    $message = $response->get_error_message();
                } else {
                    $message = __('An error occurred, please try again.');
                }
                $base_url = admin_url('admin.php?page=' . OXI_TEAM_SHOW_SLIDER_LICENSE_PAGE);
                $redirect = add_query_arg(array('sl_activation' => 'false', 'message' => urlencode($message)), $base_url);

                wp_redirect($redirect);
                exit();
            }
            // decode the license data
            $license_data = json_decode(wp_remote_retrieve_body($response));
            // $license_data->license will be either "deactivated" or "failed"
            if ($license_data->license == 'deactivated') {
                delete_option('oxi_team_show_slider_license_status');
            }
            wp_redirect(admin_url('admin.php?page=' . OXI_TEAM_SHOW_SLIDER_LICENSE_PAGE));
            exit();
        }
    }

    add_action('admin_init', 'oxi_team_show_slider_deactivate_license');
    /*     * **********************************
     * this illustrates how to check if
     * a license key is still valid
     * the updater does this for you,
     * so this is only needed if you
     * want to do something custom
     * *********************************** */

    function oxi_team_show_slider_check_license() {
        global $wp_version;
        $license = trim(get_option('oxi_team_show_slider_license_key'));
        $api_params = array(
            'edd_action' => 'check_license',
            'license' => $license,
            'item_name' => urlencode(OXI_TEAM_SHOW_SLIDER),
            'url' => home_url()
        );

        // Call the custom API.
        $response = wp_remote_post(OXI_TEAM_SHOW_SLIDER_HOME, array('timeout' => 15, 'sslverify' => false, 'body' => $api_params));

        if (is_wp_error($response))
            return false;

        $license_data = json_decode(wp_remote_retrieve_body($response));

        if ($license_data->license == 'valid') {
            echo 'valid';
            exit;
            // this license is still valid
        } else {
            echo 'invalid';
            exit;
            // this license is no longer valid
        }
    }

    /**
     * This is a means of catching errors from the activation method above and displaying it to the customer
     */
    function oxi_team_show_slider_admin_notices() {
        if (isset($_GET['sl_activation']) && !empty($_GET['message'])) {

            switch ($_GET['sl_activation']) {

                case 'false':
                    $message = urldecode($_GET['message']);
                    ?>
                    <div class="error">
                        <p><?php echo $message; ?></p>
                    </div>
                    <?php
                    break;

                case 'true':
                default:
                    break;
            }
        }
    }

    add_action('admin_notices', 'oxi_team_show_slider_admin_notices');

    function oxi_team_show_admin_head() {

        $status = get_option('oxi_team_show_slider_license_status');
        if ($status == 'valid') {
            $update = get_admin_url() . 'update-core.php';
            echo '<script type="text/javascript"> jQuery(document).ready(function () {setTimeout(function() { jQuery("#oxilab-update-notifications").modal("show")  }, 2000); });</script>';
            ?>
            <div id="oxilab-update-notifications" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Notification</h4>
                        </div>
                        <div class="modal-body">
                            <div class="bs-callout bs-callout-danger"> 
                                <h4>Important Update for <code>Premium Version</code></h4>
                                <p>Dear Valuable customer, Thanks for using our plugin. There's an <code>important</code> update available. Please go to <code>Plugin</code> menu or <code>Wordpress</code> update menu and update <code>Plugin</code> within a few second.</p>
                                <p>Thank You<br>Oxilab Team</p>
                            </div>
                        </div>
                        <div class="modal-footer">                            
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <a href="<?php echo $update; ?>" target="_blank">
                                <button type="button" class="btn btn-primary" >Update</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <?php
        }
        ?>
        <div class="oxilab-admin-notifications">
            <h3>
                <span class="dashicons dashicons-flag"></span> 
                Notifications
            </h3>
            <p></p>
            <div class="oxilab-admin-notifications-holder">
                <div class="oxilab-admin-notifications-alert">
                    <p>Thank you for using Team Showcase and Slider - Team Members Builder. I Just wanted to see if you have any questions or concerns about my plugins. If you do, Please do not hesitate to <a href="https://wordpress.org/support/plugin/team-showcase-ultimate#new-post">file a bug report</a></p>
                    <p>By the way, did you know we also have a <a href="https://www.oxilab.org/downloads/team-showcase-and-slider/">Premium Version</a>? It offers lots of options with automatic update. It also comes with 16/5 personal support.</p>
                    <p>Thanks Again!</p>
                    <p></p>                      
                </div>                        
            </div>
            <p></p>
        </div> 
        <p></p>    
        <?php
    }

    function oxi_team_show_set_no_bug() {
        $nobug = "";
        if (isset($_GET['oxi_team_show_nobug'])) {
            $nobug = esc_attr($_GET['oxi_team_show_nobug']);
        }
        if ('already' == $nobug) {
            add_option('oxi_team_show_no_bug', 'already');
        } elseif ('later' == $nobug) {
            $now = strtotime("now");
            update_option('oxi_team_show_activation_date', $now);
        }
    }

    add_action('admin_init', 'oxi_team_show_set_no_bug');


    add_action('admin_init', 'oxi_team_show_check_installation_date');

    function oxi_team_show_check_installation_date() {
        $nobug = "";
        $nobug = get_option('oxi_team_show_nobug');
        if ($nobug != 'already') {
            $install_date = get_option('oxi_team_show_activation_date');
            if (empty($install_date)) {
                $now = strtotime("now");
                add_option('oxi_team_show_activation_date', $now);
            }
            $past_date = strtotime('-7 days');
            if ($past_date >= $install_date) {
                add_action('admin_notices', 'oxi_team_show_display_admin_notice');
            }
        }
    }
    function oxi_team_show_display_admin_notice() {

        // Review URL - Change to the URL of your plugin on WordPress.org
        $reviewurl = 'https://wordpress.org/plugins/team-showcase-ultimate/';

        $nobugurl = get_admin_url() . '?oxi_team_show_nobug=later';
        $nobugurl2 = get_admin_url() . '?oxi_team_show_nobug=already';

        echo '<div class="updated">';
        echo '<p></p>';

        printf(__('<p>Hey, You’ve using <strong>Team Showcase and Slider - Team Members Builder </strong> more than 1 week – that’s awesome! Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.!
                     </p>
                    <p><a href=%s target="_blank"><strong>Ok, you deserve it</strong></a></p>
                    <p><a href=%s><strong>Nope, maybe later</strong></a> </p>
                    <p><a href=%s><strong>I already did</strong></a> </p>'), $reviewurl, $nobugurl, $nobugurl2);
        echo '<p></p>';
        echo "</div>";
    }

    