<?php
if (!defined('ABSPATH'))
    exit;

function oxi_team_show_shortcode_function($styleid, $userdata) {
    $styleid = (int) $styleid;
    global $wpdb;
    $table_name = $wpdb->prefix . 'oxi_div_style';
    $table_list = $wpdb->prefix . 'oxi_div_list';
    $table_icon = $wpdb->prefix . 'oxi_div_social_icon';
    $table_category = $wpdb->prefix . 'oxi_div_category';
    wp_enqueue_style('oxi-team-show', plugins_url('public/style.css', __FILE__));
    wp_enqueue_style('font-awesome', plugins_url('js-css/font-awesome.min.css', __FILE__));
    wp_enqueue_style('animate', plugins_url('public/animate.css', __FILE__));
    wp_enqueue_script('jquery-viewportchecker-min', plugins_url('public/jquery.viewportchecker.min.js', __FILE__));
    $listdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_list WHERE styleid = %d ORDER by id ASC ", $styleid), ARRAY_A);
    $styledata = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d ", $styleid), ARRAY_A);
    $categorydata = $wpdb->get_results("SELECT * FROM $table_category ORDER by id ASC", ARRAY_A);
    $socialdata = $wpdb->get_results("SELECT * FROM $table_icon ", ARRAY_A);
    $stylename = $styledata['style_name'];
    $styledata = $styledata['css'];
    $styledata = explode('|', $styledata);
    include oxi_team_showcase_and_slider . 'public/' . $stylename . '.php';
    $stylefunctionmane = 'oxi_team_show_shortcode_function_' . $stylename . '';
    $stylefunctionmane($styleid, $userdata, $styledata, $listdata, $categorydata, $socialdata);
}

function oxiteamshowcaseteamcategory($styleid, $styledata, $listdata, $categorydata) {

    $oxiteamcatagory = '';
    foreach ($listdata as $value) {
        $data = explode('{#}|{#}', $value['files']);
        $oxiteamcatagory .= $data[23];
    }
    echo '<div class="' . $styledata[3] . ' oxi-team-cat-style-body-' . $styleid . '">';
    $oxiteamcatagory = array_unique(explode('|||', $oxiteamcatagory));
    foreach ($categorydata as $value) {
        if ($value['class'] == 'oxi-team-cat-all') {
            echo '<div class="oxi-team-cat-id-' . $styleid . '" data-cat="oxi-team-cat-all">' . $value['name'] . '</div>';
        } else {
            foreach ($oxiteamcatagory as $value2) {
                if ($value['class'] == $value2) {
                    echo '<div class="oxi-team-cat-id-' . $styleid . '" data-cat="' . $value['class'] . '">' . $value['name'] . '</div>';
                }
            }
        }
    }
    echo '</div>';
    ?>

    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                jQuery(".oxi-team-cat-id-<?php echo $styleid; ?>:first").addClass("active");
                jQuery(".oxi-team-cat-id-<?php echo $styleid; ?>").click(function () {
                    if (!jQuery(this).hasClass('active')) {
                        jQuery(".oxi-team-cat-id-<?php echo $styleid; ?>").removeClass("active");
                        jQuery(this).toggleClass("active");
                        var activecat = jQuery(this).attr("data-cat");
                        jQuery(".oxi-team-show-<?php echo $styleid; ?>").addClass("oxi-cat-hide").slideUp("slow");
                        jQuery("." + activecat).removeClass("oxi-cat-hide").slideDown("slow");
                    }
                });
            });
        }
        )(jQuery);
    </script>
    <?php ?>
    <style>
    <?php
    if ($styledata[3] == 'oxi-team-cat-style-1') {
        ?>
            .oxi-team-cat-style-1.oxi-team-cat-style-body-<?php echo $styleid; ?>{
                text-align: <?php echo $styledata[5]; ?>;
                margin: <?php echo $styledata[37]; ?>px <?php echo $styledata[39]; ?>px;
            }
            .oxi-team-cat-style-1 .oxi-team-cat-id-<?php echo $styleid; ?>{
                font-weight: <?php echo $styledata[19]; ?>;
                font-style: <?php echo $styledata[21]; ?>;
                font-size: <?php echo $styledata[7]; ?>px;
                color: <?php echo $styledata[9]; ?>;
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[17]); ?>;
                cursor: pointer;
                padding: <?php echo $styledata[23]; ?>px <?php echo $styledata[25]; ?>px;
                display: inline-block;
                margin: <?php echo $styledata[33]; ?>px <?php echo $styledata[35]; ?>px;
                border-radius: <?php echo $styledata[31]; ?>px;
            }
            .oxi-team-cat-style-1 .oxi-team-cat-id-<?php echo $styleid; ?>:hover, 
            .oxi-team-cat-style-1 .oxi-team-cat-id-<?php echo $styleid; ?>.active{
                color: <?php echo $styledata[13]; ?>;
                background: <?php echo $styledata[15]; ?>;
            }
        <?php
    } elseif ($styledata[3] == 'oxi-team-cat-style-2') {
        ?>
            .oxi-team-cat-style-2.oxi-team-cat-style-body-<?php echo $styleid; ?>{
                text-align: <?php echo $styledata[5]; ?>;
                margin: <?php echo $styledata[37]; ?>px <?php echo $styledata[39]; ?>px;
            }
            .oxi-team-cat-style-2 .oxi-team-cat-id-<?php echo $styleid; ?>{
                cursor: pointer;
                font-weight: <?php echo $styledata[19]; ?>;
                font-style: <?php echo $styledata[21]; ?>;
                font-size: <?php echo $styledata[7]; ?>px;
                color: <?php echo $styledata[9]; ?>;                
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[17]); ?>;
                padding: <?php echo $styledata[23]; ?>px <?php echo $styledata[25]; ?>px;
                display: inline-block;
                margin: <?php echo $styledata[33]; ?>px <?php echo $styledata[35]; ?>px;
                border-width:<?php echo $styledata[27]; ?>px;  
                border-style:<?php echo $styledata[29]; ?>;
                border-color:<?php echo $styledata[9]; ?>;
                border-radius: <?php echo $styledata[31]; ?>px;
            }
            .oxi-team-cat-style-2 .oxi-team-cat-id-<?php echo $styleid; ?>:hover, 
            .oxi-team-cat-style-2  .oxi-team-cat-id-<?php echo $styleid; ?>.active{
                color: <?php echo $styledata[13]; ?>;
                border-color:<?php echo $styledata[13]; ?>;
            }
        <?php
    } elseif ($styledata[3] == 'oxi-team-cat-style-3') {
        ?>
            .oxi-team-cat-style-3.oxi-team-cat-style-body-<?php echo $styleid; ?>{
                text-align: <?php echo $styledata[5]; ?>;
                margin: <?php echo $styledata[37]; ?>px <?php echo $styledata[39]; ?>px;
            }
            .oxi-team-cat-style-3 .oxi-team-cat-id-<?php echo $styleid; ?>{
                cursor: pointer;
                font-weight: <?php echo $styledata[19]; ?>;
                font-style: <?php echo $styledata[21]; ?>;
                font-size: <?php echo $styledata[7]; ?>px;
                color: <?php echo $styledata[9]; ?>;                
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[17]); ?>;
                padding: <?php echo $styledata[23]; ?>px <?php echo $styledata[25]; ?>px;
                display: inline-block;
                background-color: <?php echo $styledata[11]; ?>;
                margin: <?php echo $styledata[33]; ?>px <?php echo $styledata[35]; ?>px;
                border-radius: <?php echo $styledata[31]; ?>px;
            }
            .oxi-team-cat-style-3 .oxi-team-cat-id-<?php echo $styleid; ?>:hover, 
            .oxi-team-cat-style-3  .oxi-team-cat-id-<?php echo $styleid; ?>.active{
                color: <?php echo $styledata[13]; ?>;
                background-color:<?php echo $styledata[15]; ?>;
            }
        <?php
    } elseif ($styledata[3] == 'oxi-team-cat-style-4') {
        ?>
            .oxi-team-cat-style-4.oxi-team-cat-style-body-<?php echo $styleid; ?>{
                text-align: <?php echo $styledata[5]; ?>;
                margin: <?php echo $styledata[37]; ?>px <?php echo $styledata[39]; ?>px;
            }
            .oxi-team-cat-style-4 .oxi-team-cat-id-<?php echo $styleid; ?>{
                cursor: pointer;
                font-weight: <?php echo $styledata[19]; ?>;
                font-style: <?php echo $styledata[21]; ?>;
                font-size: <?php echo $styledata[7]; ?>px;
                color: <?php echo $styledata[9]; ?>;                
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[17]); ?>;
                padding: <?php echo $styledata[23]; ?>px <?php echo $styledata[25]; ?>px;
                display: inline-block;  
                border-width:<?php echo $styledata[27]; ?>px;  
                border-style:<?php echo $styledata[29]; ?>;
                border-right-color:<?php echo $styledata[9]; ?>;
                border-bottom-color:<?php echo $styledata[9]; ?>;
                border-left-color:transparent;
                border-top-color:transparent;
                margin: <?php echo $styledata[33]; ?>px <?php echo $styledata[35]; ?>px;
                border-radius: <?php echo $styledata[31]; ?>px;
            }
            .oxi-team-cat-style-4 .oxi-team-cat-id-<?php echo $styleid; ?>:hover, 
            .oxi-team-cat-style-4  .oxi-team-cat-id-<?php echo $styleid; ?>.active{
                color: <?php echo $styledata[13]; ?>;
                border-left-color:<?php echo $styledata[13]; ?>;
                border-top-color:<?php echo $styledata[13]; ?>;
                border-right-color:transparent;
                border-bottom-color:transparent;                
            }
        <?php
    } elseif ($styledata[3] == 'oxi-team-cat-style-5') {
        ?>
            .oxi-team-cat-style-5.oxi-team-cat-style-body-<?php echo $styleid; ?>{
                text-align: <?php echo $styledata[5]; ?>;
                margin: <?php echo $styledata[37]; ?>px <?php echo $styledata[39]; ?>px;
            }
            .oxi-team-cat-style-5 .oxi-team-cat-id-<?php echo $styleid; ?>{
                cursor: pointer;
                font-weight: <?php echo $styledata[19]; ?>;
                font-style: <?php echo $styledata[21]; ?>;
                font-size: <?php echo $styledata[7]; ?>px;
                color: <?php echo $styledata[9]; ?>;                
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[17]); ?>;
                padding: <?php echo $styledata[23]; ?>px <?php echo $styledata[25]; ?>px;
                display: inline-block;  
                border-width:<?php echo $styledata[27]; ?>px;  
                border-style:<?php echo $styledata[29]; ?>;
                border-right-color:transparent;
                border-bottom-color:<?php echo $styledata[13]; ?>;
                border-left-color:transparent;
                border-top-color:transparent;
                margin: <?php echo $styledata[33]; ?>px <?php echo $styledata[35]; ?>px;
                border-radius: <?php echo $styledata[31]; ?>px;
            }
            .oxi-team-cat-style-5 .oxi-team-cat-id-<?php echo $styleid; ?>:hover, 
            .oxi-team-cat-style-5  .oxi-team-cat-id-<?php echo $styleid; ?>.active{
                color: <?php echo $styledata[13]; ?>;
                border-left-color:transparent;
                border-top-color:<?php echo $styledata[13]; ?>;
                border-right-color:transparent;
                border-bottom-color:transparent;                
            }
        <?php
    } elseif ($styledata[3] == 'oxi-team-cat-style-6') {
        ?>
            .oxi-team-cat-style-6.oxi-team-cat-style-body-<?php echo $styleid; ?>{
                text-align: <?php echo $styledata[5]; ?>;
                margin: <?php echo $styledata[37]; ?>px <?php echo $styledata[39]; ?>px;
            }
            .oxi-team-cat-style-6 .oxi-team-cat-id-<?php echo $styleid; ?>{
                cursor: pointer;
                font-weight: <?php echo $styledata[19]; ?>;
                font-style: <?php echo $styledata[21]; ?>;
                font-size: <?php echo $styledata[7]; ?>px;
                color: <?php echo $styledata[9]; ?>;                
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[17]); ?>;
                padding: <?php echo $styledata[23]; ?>px <?php echo $styledata[25]; ?>px;
                display: inline-block;  
                border-width:<?php echo $styledata[27]; ?>px;  
                border-style:<?php echo $styledata[29]; ?>;
                border-right-color:transparent;
                border-bottom-color:transparent;
                border-left-color:transparent;
                border-top-color:<?php echo $styledata[13]; ?>;
                margin: <?php echo $styledata[33]; ?>px <?php echo $styledata[35]; ?>px;
                border-radius: <?php echo $styledata[31]; ?>px;
            }
            .oxi-team-cat-style-6 .oxi-team-cat-id-<?php echo $styleid; ?>:hover, 
            .oxi-team-cat-style-6  .oxi-team-cat-id-<?php echo $styleid; ?>.active{
                color: <?php echo $styledata[13]; ?>;
                border-left-color:transparent;
                border-top-color:transparent;
                border-right-color:transparent;
                border-bottom-color:<?php echo $styledata[13]; ?>;                
            }
        <?php
    }
    ?>
    </style>
    <?php
}

function oxiteamshowcaseteamcarousel($styleid, $styledata, $itemrow) {
    wp_enqueue_script('oxilab-carousel', plugins_url('public/oxilab-carousel.js', __FILE__));
    $nevextradata = explode('//', $styledata[67]);
    if ($styledata[65] == 'fa-arrow-left') {
        $oxilabcarouselteamnevleft = 'fas fa-arrow-left';
        $oxilabcarouselteamnevright = 'fas fa-arrow-right';
    } elseif ($styledata[65] == 'fa-angle-double-left') {
        $oxilabcarouselteamnevleft = 'fas fa-angle-double-left';
        $oxilabcarouselteamnevright = 'fas fa-angle-double-right';
    } elseif ($styledata[65] == 'fa-angle-left') {
        $oxilabcarouselteamnevleft = 'fas fa-angle-left';
        $oxilabcarouselteamnevright = 'fas fa-angle-right';
    } elseif ($styledata[65] == 'fa-arrow-circle-left') {
        $oxilabcarouselteamnevleft = 'fas fa-arrow-circle-left';
        $oxilabcarouselteamnevright = 'fas fa-arrow-circle-right';
    } elseif ($styledata[65] == 'fa-caret-left') {
        $oxilabcarouselteamnevleft = 'fas fa-caret-left';
        $oxilabcarouselteamnevright = 'fas fa-caret-right';
    } elseif ($styledata[65] == 'fa-caret-square-o-left') {
        $oxilabcarouselteamnevleft = 'fas fa-caret-square-left';
        $oxilabcarouselteamnevright = 'fas fa-caret-square-right';
    } elseif ($styledata[65] == 'fa-chevron-circle-left') {
        $oxilabcarouselteamnevleft = 'fas fa-chevron-circle-left';
        $oxilabcarouselteamnevright = 'fas fa-chevron-circle-right';
    } elseif ($styledata[65] == 'fa-chevron-left') {
        $oxilabcarouselteamnevleft = 'fas fa-chevron-left';
        $oxilabcarouselteamnevright = 'fas fa-chevron-right';
    }
    if ($itemrow == 'oxi-team-show-col-1') {
        $responsive = ' responsive: { 0: {items: 1 }, 600: { items: 1}, 1000: { items: 1 }}';
    } elseif ($itemrow == 'oxi-team-show-col-2') {
        $responsive = ' responsive: { 0: {items: 1 }, 600: { items: 1}, 1000: { items: 2 }}';
    } elseif ($itemrow == 'oxi-team-show-col-3') {
        $responsive = ' responsive: { 0: {items: 1 }, 600: { items: 2}, 1000: { items: 3 }}';
    } elseif ($itemrow == 'oxi-team-show-col-4') {
        $responsive = ' responsive: { 0: {items: 1 }, 600: { items: 2}, 1000: { items: 4 }}';
    } elseif ($itemrow == 'oxi-team-show-col-5') {
        $responsive = ' responsive: { 0: {items: 1 }, 600: { items: 2}, 1000: { items: 5 }}';
    } elseif ($itemrow == 'oxi-team-show-col-6') {
        $responsive = ' responsive: { 0: {items: 1 }, 600: { items: 3}, 1000: { items: 6 }}';
    }
    if ($styledata[45] == 'true') {
        $autoplay = ' autoplay: true,  autoplayTimeout: ' . $styledata[47] * 1000 . ', autoplayHoverPause: true';
    } else {
        $autoplay = ' autoplay: false';
    }

    wp_add_inline_script('oxilab-carousel', 'jQuery(".oxi-team-carousel-' . $styleid . '").OxiowlCarousel({
                                                            loop: true,
                                                            margin: 0,
                                                            center: ' . $styledata[43] . ',
                                                            ' . $autoplay . ',
                                                            ' . $responsive . ',
                                                            nav:' . $styledata[63] . ',
                                                            dots:' . $styledata[49] . ',
                                                            navText: ["<i class=\'' . $oxilabcarouselteamnevleft . '\'></i>", "<i class=\'' . $oxilabcarouselteamnevright . '\'></i>"],
                                                        });');
    ?>
    <style>
        .oxi-team-carousel-<?php echo $styleid; ?> {
            display: none;
            width: 100%;
            -webkit-tap-highlight-color: transparent;
            /* position relative and z-index fix webkit rendering fonts issue */
            position: relative;
            z-index: 1; 
        }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-stage {
            position: relative;
            -ms-touch-action: pan-Y;
            -moz-backface-visibility: hidden;
            /* fix firefox animation glitch */ }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-stage:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0; }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-stage-outer {
            position: relative;
            overflow: hidden;
            /* fix for flashing background */
            -webkit-transform: translate3d(0px, 0px, 0px); }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-wrapper,
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-item {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0); }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-item {
            position: relative;
            min-height: 1px;
            float: left;
            -webkit-backface-visibility: hidden;
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none; }

        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav.disabled,
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-dots.disabled {
            display: none; }
        <?php
        if ($styledata[49] == 'true') {
            echo '.oxi-team-carousel-' . $styleid . ' .owl-dots.disabled {
            display: block; }';
        }
        if ($styledata[63] == 'true') {
            echo '.oxi-team-carousel-' . $styleid . ' .owl-nav.disabled {
            display: block; }';
        }
        ?>
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav .owl-prev,
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav .owl-next,
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-dot {
            cursor: pointer;
            cursor: hand;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none; }
        .oxi-team-carousel-<?php echo $styleid; ?>.owl-loaded {
            display: block; }
        .oxi-team-carousel-<?php echo $styleid; ?>.owl-loading {
            opacity: 0;
            display: block; }
        .oxi-team-carousel-<?php echo $styleid; ?>.owl-hidden {
            opacity: 0; }
        .oxi-team-carousel-<?php echo $styleid; ?>.owl-refresh .owl-item {
            visibility: hidden; }
        .oxi-team-carousel-<?php echo $styleid; ?>.owl-drag .owl-item {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none; }


        /* No Js */
        .no-js .oxi-team-carousel-<?php echo $styleid; ?> {
            display: block; }


        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav {
            transform: translateY(-<?php echo $nevextradata[7]; ?>%);
            top: <?php echo $nevextradata[7]; ?>%;
            opacity:0;
            width:100%;
            text-align: center;
            position: absolute;
            -webkit-tap-highlight-color: transparent;
        }
        .oxi-team-carousel-<?php echo $styleid; ?><?php echo $nevextradata[11]; ?> .owl-nav{
            opacity:1;
        }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav [class*='owl-'] {
            color:  <?php echo $nevextradata[3]; ?>;
            float:left;
            font-size:  <?php echo $nevextradata[1]; ?>px;
            margin: 0px;
            padding: 0px 0px;
            line-height:100%;            
            margin-top: -<?php echo $nevextradata[1] / 2; ?>px;
            position: absolute;
            display: inline-block;
            cursor: pointer;
            transition: all 20ms ease;
            border-radius: 3px;         
            left: <?php echo $nevextradata[9]; ?>%;
        }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav [class*='owl-'] [class*='fa']{
            font-size:  <?php echo $nevextradata[1]; ?>px;
            color:  <?php echo $nevextradata[3]; ?>;
        }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav .owl-next{
            right: <?php echo $nevextradata[9]; ?>%;
            left: auto;
        }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav [class*='owl-']:hover {           
            color:  <?php echo $nevextradata[5]; ?>;
            text-decoration: none; }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav [class*='owl-'] [class*='fa']:hover {           
            color:  <?php echo $nevextradata[5]; ?>;
        }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav .disabled {
            opacity: 0.5;
            cursor: default;
        }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-nav.disabled + .owl-dots {
            margin-top: 0;
        }

        .oxi-team-carousel-<?php echo $styleid; ?> .owl-dots {
            <?php
            $posdata = explode(' ', $styledata[51]);
            echo 'text-align: ' . $posdata[1] . ';';
            echo $posdata[0] . ':0;';
            ?>
            position: absolute;
            width:100%;
            -webkit-tap-highlight-color: transparent; 
        }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-dots .owl-dot {
            display: inline-block;
            zoom: 1;
            *display: inline;
        }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-dots .owl-dot span {
            width: <?php echo $styledata[57]; ?>px;
            height: <?php echo $nevextradata[13]; ?>px;          
            background: <?php echo $styledata[53]; ?>;
            margin: 0px <?php echo $nevextradata[15]; ?>px;
            display: block;
            -webkit-backface-visibility: visible;
            transition: all 300ms ease;
            border-radius: <?php echo $nevextradata[17]; ?>px; }
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-dots .owl-dot.active span,
        .oxi-team-carousel-<?php echo $styleid; ?> .owl-dots .owl-dot:hover span {
            background: <?php echo $styledata[55]; ?>;
            -ms-transform: scale(<?php echo $styledata[59]; ?>);
            -webkit-transform: scale(<?php echo $styledata[59]; ?>);
            transform: scale(<?php echo $styledata[59]; ?>);
        }
        <?php if ($styledata[49] == 'true') { ?>
            .oxi-team-carousel-<?php echo $styleid; ?> .owl-stage-outer{
                padding-<?php echo $posdata[0]; ?>: <?php echo $styledata[61]; ?>px;  
            }
        <?php } ?>


        <?php if ($styledata[43] == 'true') { ?>
            .oxi-team-carousel-<?php echo $styleid; ?> .owl-item{
                -ms-transform: scale(0.9);
                -webkit-transform: scale(0.9);
                transform: scale(0.9);
                -webkit-transition: all 0.5s ease-in-out;
                -moz-transition: all 0.5s ease-in-out;
                transition: all 0.5s ease-in-out;
                opacity: 0.7;
            }
            .oxi-team-carousel-<?php echo $styleid; ?> .owl-item{
                opacity: 0.7;
                transition: all 300ms ease;                
            }
            .oxi-team-carousel-<?php echo $styleid; ?> .owl-item.active.center{
                opacity: 1;
                -ms-transform: scale(1);
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-transition: all 0.5s ease-in-out;
                -moz-transition: all 0.5s ease-in-out;
                transition: all 0.5s ease-in-out;
            }
        <?php } ?>

    </style>
    <?php
}

function oxi_team_socail_icon_color($styleid, $icondata, $iconstyle, $iconcolor, $iconbackground, $iconradius, $iconhoverradius) {
    if ($iconstyle == 'oxi-member-icons-style-1') {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-1 [class^="fa"]{
color: ' . $iconcolor . ';
}';
        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-1 .' . $data[1] . ':hover{
color: ' . $value['bgcolor'] . ';
}';
        }
    } elseif ($iconstyle == 'oxi-member-icons-style-2') {

        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-2 .' . $data[1] . '{
color: ' . $value['bgcolor'] . ';
}';
        }
    } elseif ($iconstyle == 'oxi-member-icons-style-3') {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-3 [class^="fa"]{
color: ' . $iconcolor . ';
background-color: ' . $iconbackground . ';
border-radius: ' . $iconradius . 'px;
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-3 [class^="fa"]:hover{   
border-radius: ' . $iconhoverradius . 'px;
}';
        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-3 .' . $data[1] . ':hover{
color: ' . $value['color'] . ';
background-color: ' . $value['bgcolor'] . ';
}';
        }
    } elseif ($iconstyle == 'oxi-member-icons-style-4') {

        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-4 .' . $data[1] . '{
color: ' . $value['color'] . ';
background-color: ' . $value['bgcolor'] . ';
}';
        }
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-4 [class^="fa"]{   
border-radius: ' . $iconradius . 'px;
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-4 [class^="fa"]:hover{   
border-radius: ' . $iconhoverradius . 'px;
}';
    } elseif ($iconstyle == 'oxi-member-icons-style-5') {


        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-5 [class^="fa"]{   
color: ' . $iconcolor . ';
border: 1px solid ' . $iconcolor . ';    
border-radius: ' . $iconradius . 'px;   
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-5 [class^="fa"]:hover{   
border-radius: ' . $iconhoverradius . 'px;
}';
        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-5 .' . $data[1] . ':hover{
    color: ' . $value['bgcolor'] . ';
    border: 1px solid ' . $value['bgcolor'] . '; 
}';
        }
    } elseif ($iconstyle == 'oxi-member-icons-style-6') {

        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-6 .' . $data[1] . '{
    color: ' . $value['bgcolor'] . ';
    border: 1px solid ' . $value['bgcolor'] . '; 
}';
        }
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-6 [class^="fa"]{   
border-radius: ' . $iconradius . 'px;
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-6 [class^="fa"]:hover{   
border-radius: ' . $iconhoverradius . 'px;
}';
    } elseif ($iconstyle == 'oxi-member-icons-style-7') {

        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-7 [class^="fa"]{  
    color: ' . $iconcolor . ';
    border: 2px solid transparent;
    border-right-color: ' . $iconcolor . ';
    border-bottom-color: ' . $iconcolor . ';
    border-radius: ' . $iconradius . 'px;
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-7 [class^="fa"]:hover{      
    border-radius: ' . $iconhoverradius . 'px;
}';
        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-7 .' . $data[1] . ':hover{
    color: ' . $value['bgcolor'] . ';
    border-right-color:  transparent;
    border-bottom-color:  transparent;
    border-top-color: ' . $value['bgcolor'] . ';
    border-left-color: ' . $value['bgcolor'] . ';
}';
        }
    } elseif ($iconstyle == 'oxi-member-icons-style-8') {

        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-8 .' . $data[1] . '{
    color: ' . $value['bgcolor'] . ';
      border: 2px solid transparent;
    border-right-color: ' . $value['bgcolor'] . ';
    border-bottom-color: ' . $value['bgcolor'] . ';
}';

            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-8 .' . $data[1] . ':hover{
    color: ' . $value['bgcolor'] . ';
    border: 2px solid transparent;
    border-right-color:  transparent;
    border-bottom-color:  transparent;
    border-left-color: ' . $value['bgcolor'] . ';
    border-top-color: ' . $value['bgcolor'] . ';
}';
        }
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-8 [class^="fa"]{
    border-radius: ' . $iconradius . 'px;
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-8 [class^="fa"]:hover{      
    border-radius: ' . $iconhoverradius . 'px;
}';
    } elseif ($iconstyle == 'oxi-member-icons-style-9') {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-9 [class^="fa"]{  
    color: ' . $iconcolor . ';
    border-right: 2px solid  ' . $iconcolor . ';
    border-radius: ' . $iconradius . 'px;
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-9 [class^="fa"]:hover{      
    border-radius: ' . $iconhoverradius . 'px;
}';
        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-9 .' . $data[1] . ':hover{
    color: ' . $value['bgcolor'] . ';
    border-right: 2px solid  ' . $value['bgcolor'] . ';
}';
        }
    } elseif ($iconstyle == 'oxi-member-icons-style-10') {

        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-10 .' . $data[1] . '{
    color: ' . $value['bgcolor'] . ';
    border-right: 2px solid ' . $value['bgcolor'] . ';
}';
        }
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-10 [class^="fa"]{
    border-radius: ' . $iconradius . 'px;
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-10 [class^="fa"]:hover{      
    border-radius: ' . $iconhoverradius . 'px;
}';
    } elseif ($iconstyle == 'oxi-member-icons-style-11') {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-11 [class^="fa"]{  
    color: ' . $iconcolor . ';
    border: 1px solid  ' . $iconcolor . ';
    border-radius: ' . $iconradius . 'px;
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-11 [class^="fa"]:hover{      
    border-radius: ' . $iconhoverradius . 'px;
}';
        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-11 .' . $data[1] . ':hover{
    color: ' . $value['color'] . ';
    background-color: ' . $value['bgcolor'] . ';
    border: 1px solid  ' . $value['bgcolor'] . ';
}';
        }
    } elseif ($iconstyle == 'oxi-member-icons-style-12') {
        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-12 .' . $data[1] . '{
        color: ' . $value['bgcolor'] . ';
        border: 1px solid ' . $value['bgcolor'] . ';
}';
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-12 .' . $data[1] . ':hover{
        color: ' . $value['color'] . ';
        background-color: ' . $value['bgcolor'] . ';  
        border: 1px solid ' . $value['bgcolor'] . ';
}';
        }
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-12 [class^="fa"]{
        border-radius: ' . $iconradius . 'px;
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-12 [class^="fa"]:hover{      
        border-radius: ' . $iconhoverradius . 'px;
}';
    } elseif ($iconstyle == 'oxi-member-icons-style-13') {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-13 [class^="fa"]{  
        color: ' . $iconcolor . ';
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-13 [class^="fa"]:hover{      
        border-radius: ' . $iconhoverradius . 'px;
}';
        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-13 .' . $data[1] . ':hover{
        color: ' . $value['color'] . ';
        background-color: ' . $value['bgcolor'] . ';
}';
        }
    } elseif ($iconstyle == 'oxi-member-icons-style-14') {
        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-14 .' . $data[1] . '{
        color: ' . $value['bgcolor'] . ';
}';
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-14 .' . $data[1] . ':hover{
        color: ' . $value['color'] . ';
        background-color: ' . $value['bgcolor'] . ';  
}';
        }
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-14 [class^="fa"]:hover{      
        border-radius: ' . $iconhoverradius . 'px;
}';
    } elseif ($iconstyle == 'oxi-member-icons-style-15') {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-15 [class^="fa"]{  
        color: ' . $iconcolor . ';
        background-color: ' . $iconbackground . ';
        border: 1px solid ' . $iconcolor . ';
        border-radius: ' . $iconradius . 'px;
            
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-15 [class^="fa"]:hover{      
        border-radius: ' . $iconhoverradius . 'px;
}';
        foreach ($icondata as $value) {
            $data = explode(" ", $value['class']);
            echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-15 .' . $data[1] . ':hover{
        color: ' . $value['color'] . ';
        background-color: ' . $value['bgcolor'] . ';
        border: 1px solid ' . $value['bgcolor'] . ';
}';
        }
    }
}
