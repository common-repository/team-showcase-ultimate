<?php
if (!defined('ABSPATH'))
    exit;

function oxi_team_show_style_18_social($url, $social, $linkopen) {
    if ($linkopen == '_blank') {
        $linkopendata = 'target="_blank"';
    } else {
        $linkopendata = '';
    }
    if (!empty($url) && $url != '') {
        $data = '<a ' . $linkopendata . ' href="' . $url . '"class="member-icon">' . oxiteamshowcaseteamsocail($social) . '</a>';
    } else {
        $data = '';
    }
    return $data;
}

function oxi_team_show_shortcode_function_style_18($styleid, $userdata, $styledata, $listdata, $categorydata, $socialdata) {
    if ($styledata[41] == 'carousel') {
        $teamcarousel = 'oxi-team-carousel-' . $styleid;
    } else {
        $teamcarousel = '';
    }
    if ($userdata == 'admin') {
        $userdatadiv = 'oxilab-ab-id';
    } else {
        $userdatadiv = '';
    }
    ?>
    <div class="oxi-team-show-wrapper">
        <?php
        if ($styledata[1] == 'Yes') {
            echo oxiteamshowcaseteamcategory($styleid, $styledata, $listdata, $categorydata);
        }
        if ($styledata[41] == 'carousel') {
            echo oxiteamshowcaseteamcarousel($styleid, $styledata, $styledata[75]);
        }
        ?>
        <div class="oxi-team-show-row <?php echo $teamcarousel; ?>">
            <?php
            foreach ($listdata as $value) {
                $data = explode('{#}|{#}', $value['files']);
                $teamcatbody = 'oxi-team-cat-all ' . str_replace('|||', ' ', $data[23]);
                echo '<div class="' . $styledata[75] . ' oxi-team-show-' . $styleid . ' ' . $userdatadiv . ' ' . $teamcatbody . '">
                            <div data-av-animation="' . $styledata[85] . '" class="oxi-team-show-body orphita-animation" orphita-animation="' . $styledata[85] . '">
                                <div class="oxi-team-show ' . $styledata[77] . '">
                                    <div class="member-photo">
                                        <div class="oxi-team-pic-size">
                                            <div class="oxi-team-pic-size-span">
                                                <img src="' . $data[5] . '" alt="' . oxilab_team_html_special_charecter($data[1]) . '">
                                            </div>
                                            <div class="member-info ">
                                                <div class="member-info-span">
                                                    <h3 class="member-name">' . oxilab_team_html_special_charecter($data[1]) . '</h3>
                                                </div>
                                                <div class="member-info-span">
                                                    <div class="member-role">' . oxilab_team_html_special_charecter($data[3]) . '</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="member-icons ' . $styledata[157] . '">
                                            ' . oxi_team_show_style_18_social($data[9], $data[7], $styledata[79]) . '
                                            ' . oxi_team_show_style_18_social($data[13], $data[11], $styledata[79]) . '
                                            ' . oxi_team_show_style_18_social($data[17], $data[15], $styledata[79]) . '
                                            ' . oxi_team_show_style_18_social($data[21], $data[19], $styledata[79]) . '
                                        </div>
                                    </div>
                                </div>
                            </div>';
                if ($userdata == 'admin') {
                    ?>
                    <div class="oxilab-admin-absulote">
                        <div class="oxilab-style-absulate-edit">
                            <form method="post"> 
                                <input type="hidden" name="item-id" value="<?php echo $value['id']; ?>">
                                <button class="btn btn-primary" type="submit" value="edit" name="edit" title="Edit">Edit</button>
            <?php echo wp_nonce_field("oxiteamshowneeditdata"); ?>
                            </form>
                        </div>
                        <div class="oxilab-style-absulate-delete">
                            <form method="post">
                                <input type="hidden" name="item-id" value="<?php echo $value['id']; ?>">
                                <button class="btn btn-danger" type="submit" value="delete" name="delete" title="Delete">Delete</button>
            <?php echo wp_nonce_field("oxiteamshownedeletedata"); ?>
                            </form>
                        </div>
                    </div>
                    <?php
                }
                echo'</div>';
            }
            ?>
        </div>
        <style>
            .oxi-team-show-animation-<?php echo $styleid; ?>{
                -webkit-animation-duration:<?php echo $styledata[87]; ?>s;
                -o-animation-duration:<?php echo $styledata[87]; ?>s;
                -ms-animation-duration:<?php echo $styledata[87]; ?>s;
                -moz-animation-duration:<?php echo $styledata[87]; ?>s;
                animation-duration:<?php echo $styledata[87]; ?>s;
            }
            .oxi-team-show-<?php echo $styleid; ?>{
                padding: <?php echo $styledata[81]; ?>px <?php echo $styledata[83]; ?>px;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-show-body{
                max-width: <?php echo $styledata[71]; ?>px;
                width: 100%;
                margin: 0 auto;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-show{
                position: relative;
                width: 100%;
                float: left;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-photo{
                width: 100%;
                float: left;         
                padding:<?php echo $styledata[167]; ?>px;
                border-radius: 50%;                                  
                position: relative;
                -webkit-box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>;
                -o-box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>;
                -ms-box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>;
                -moz-box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>;
                box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>;

            }
            .oxi-team-show-<?php echo $styleid; ?> .member-photo:before{
                content: '';
                display: block;
                position: absolute;
                width: 100%;
                top: 0;
                left: 0;
                height: 100%;
                -webkit-transition: all 1.2s ease-in-out;
                -o-transition: all 1.2s ease-in-out;
                -ms-transition: all 1.2s ease-in-out;
                -moz-transition: all 1.2s ease-in-out;
                transition: all 1.2s ease-in-out;
                border: 4px solid;
                border-radius: 50%;
                border-left-color: <?php echo $styledata[163]; ?>;
                border-top-color: <?php echo $styledata[163]; ?>;
                border-right-color: <?php echo $styledata[165]; ?>;
                border-bottom-color: <?php echo $styledata[165]; ?>;
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .member-photo:before{
                -webkit-transform: rotate(180deg);
                -o-transform: rotate(180deg);
                -moz-transform: rotate(180deg);
                -ms-transform: rotate(180deg);
                transform: rotate(180deg);
            }

            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size,
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size .oxi-team-pic-size-span{
                width: 100%;
                float: left;
                position: relative;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size .oxi-team-pic-size-span,
            .oxi-team-show-<?php echo $styleid; ?> .member-icons{
                border-radius: 50%;
                overflow: hidden;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size .oxi-team-pic-size-span:after{
                padding-bottom: 100%;
                content: "";                                    
                display: block;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size img{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                display: block;
            }   
            .oxi-team-show-<?php echo $styleid; ?> .member-info{
                width: 100%;
                float: left;
                position: absolute;
                bottom: <?php echo $styledata[101]; ?>px;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-info{
                left: 0;
                width: 100%;
                overflow: hidden;
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .member-name,
            .oxi-team-show-<?php echo $styleid; ?>:hover .member-role{
                opacity: 0;
                -webkit-transform: translateX(-100%);
                -ms-transform: translateX(-100%);
                -o-transform: translateX(-100%);
                -moz-transform: translateX(-100%);
                transform: translateX(-100%);
            }                              
            .oxi-team-show-<?php echo $styleid; ?>:hover .oxi-team-right .member-name,
            .oxi-team-show-<?php echo $styleid; ?>:hover .oxi-team-right .member-role{
                opacity: 0;
                -webkit-transform: translateX(100%);
                -ms-transform: translateX(100%);
                -o-transform: translateX(100%);
                -moz-transform: translateX(100%);
                transform: translateX(100%);
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .oxi-team-center .member-name,
            .oxi-team-show-<?php echo $styleid; ?>:hover .oxi-team-center .member-role{
                opacity: 0;
                -webkit-transform: translateX(0%);
                -ms-transform: translateX(0%);
                -o-transform: translateX(0%);
                -moz-transform: translateX(0%);
                transform: translateX(0%);
                -webkit-transform: translateY(100%);
                -ms-transform: translateY(100%);
                -o-transform: translateY(100%);
                -moz-transform: translateY(100%);
                transform: translateY(100%);
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-info .member-info-span{
                width: 100%;
                float: left;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-center .member-info .member-info-span{
                text-align: center;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-info .member-info-span{
                text-align: right;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-name{                                    
                font-size: <?php echo $styledata[105]; ?>px;
                display: inline-block;                
                background-color: <?php echo $styledata[159]; ?>;                                   
                margin-bottom: 0px;
                padding: <?php echo $styledata[115]; ?>px <?php echo $styledata[117]; ?>px;
                color: <?php echo $styledata[107]; ?>;               
                font-style: <?php echo $styledata[113]; ?>;
                font-weight: <?php echo $styledata[111]; ?>;
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[109]); ?>;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-role{                                    
                display: inline-block;
                background-color: <?php echo $styledata[161]; ?>;    
                font-size: <?php echo $styledata[119]; ?>px; 
                padding: <?php echo $styledata[129]; ?>px <?php echo $styledata[131]; ?>px;
                color: <?php echo $styledata[121]; ?>;               
                font-style: <?php echo $styledata[127]; ?>;
                font-weight: <?php echo $styledata[125]; ?>;
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[123]); ?>;
                -webkit-transition: all 0.5s linear;
                -moz-transition: all 0.5s linear;
                -ms-transition: all 0.5s linear;
                -o-transition: all 0.5s linear;
                transition: all 0.5s linear ;
            }                                
            .oxi-team-show-<?php echo $styleid; ?> .member-icons{                                   
                position: absolute;
                top: <?php echo $styledata[167]; ?>px; 
                left: <?php echo $styledata[167]; ?>px;
                bottom: <?php echo $styledata[167]; ?>px;
                right: <?php echo $styledata[167]; ?>px;
                display: flex;
                padding:10px;
                justify-content: center;  
                align-items: center;
                background: <?php echo $styledata[99]; ?>; 
                opacity: 0;
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .member-icons{
                opacity: 1;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-icons [class^='fa']{
                font-size: <?php echo $styledata[133]; ?>px;
                height: <?php echo $styledata[139]; ?>px;
                width: <?php echo $styledata[139]; ?>px;
                line-height: <?php echo $styledata[139]; ?>px;                
                margin-left: <?php echo $styledata[141] / 2; ?>px;
                margin-right: <?php echo $styledata[141] / 2; ?>px;              
                text-align: center;
            }
    <?php echo oxi_team_socail_icon_color($styleid, $socialdata, $styledata[157], $styledata[135], $styledata[147], $styledata[143], $styledata[145]); ?>
            <?php echo $styledata[169]; ?>
        </style>
    </div>
    <?php
}
