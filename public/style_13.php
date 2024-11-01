<?php
if (!defined('ABSPATH'))
    exit;

function oxi_team_show_style_13_social($url, $social, $linkopen) {
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

function oxi_team_show_shortcode_function_style_13($styleid, $userdata, $styledata, $listdata, $categorydata, $socialdata) {
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
                                      <img src="' . $data[5] . '" alt="' . oxilab_team_html_special_charecter($data[1]) . '">
                                    </div>
                                    <div class="team-content">                                                   
                                        <div class="member-info ">
                                            <h3 class="member-name">' . oxilab_team_html_special_charecter($data[1]) . '</h3>
                                            <span class="member-role">' . oxilab_team_html_special_charecter($data[3]) . '</span>
                                        </div>
                                        <div class="member-icons ' . $styledata[157] . '">
                                            ' . oxi_team_show_style_13_social($data[9], $data[7], $styledata[79]) . '
                                            ' . oxi_team_show_style_13_social($data[13], $data[11], $styledata[79]) . '
                                            ' . oxi_team_show_style_13_social($data[17], $data[15], $styledata[79]) . '
                                            ' . oxi_team_show_style_13_social($data[21], $data[19], $styledata[79]) . '
                                        </div>
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
                echo '</div>';
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
                padding:<?php echo $styledata[81]; ?>px <?php echo $styledata[83]; ?>px;
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
                padding: <?php echo $styledata[161]; ?>px <?php echo $styledata[163]; ?>px;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-show:before{
                content: "";
                background-color: <?php echo $styledata[159]; ?>;
                width: calc(<?php echo $styledata[163]; ?>px - 3px);
                height: 34%;
                top: 50%;
                transform: translateY(-50%);
                position: absolute;                
                -webkit-transition: all 0.5s ease 0.2s;
                -moz-transition: all 0.5s ease 0.2s;
                -ms-transition: all 0.5s ease 0.2s;
                -o-transition: all 0.5s ease 0.2s;
                transition: all 0.5s ease 0.2s;
                left: 0;
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .oxi-team-show:before{                                   
                height: 50%;
                top: 50%;
                transform: translateY(-50%);
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-show:after{
                content: "";
                background-color: <?php echo $styledata[159]; ?>;
                width: calc(<?php echo $styledata[163]; ?>px - 3px);
                height: 34%;
                position: absolute;                
                -webkit-transition: all 0.5s ease 0.2s;
                -moz-transition: all 0.5s ease 0.2s;
                -ms-transition: all 0.5s ease 0.2s;
                -o-transition: all 0.5s ease 0.2s;
                transition: all 0.5s ease 0.2s;
                top: 50%;
                transform: translateY(-50%);
                right: 0;
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .oxi-team-show:after{                                   
                height: 50%;
                top: 50%;
                transform: translateY(-50%);
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-photo{
                width: 100%;
                max-width:100%;
                float: left;
                overflow: hidden;
                position: relative;
                z-index: 1;                                    
                border: <?php echo $styledata[165]; ?>px solid <?php echo $styledata[159]; ?>; 
                border-radius:  <?php echo $styledata[153]; ?>px  <?php echo $styledata[153]; ?>px <?php echo $styledata[155]; ?>px <?php echo $styledata[155]; ?>px;
                -webkit-box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>; 
                -o-box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>; 
                -ms-box-shadow:<?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>; 
                -moz-box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>; 
                box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>; 

            }

            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size{
                width: 100%;
                float: left;
                z-index: -1;
                position: relative;
                -webkit-transition: all 0.5s ease 0s;
                -moz-transition: all 0.5s ease 0s;
                -ms-transition: all 0.5s ease 0s;
                -o-transition: all 0.5s ease 0s;
                transition: all 0.5s ease 0s;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size:after{
                padding-bottom: <?php echo $styledata[73] / $styledata[71] * 100; ?>%;
                content: "";
                display: block;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size:before{
                content: "";
                background-color: <?php echo $styledata[99]; ?>;
                width: 100%;
                height: 0;
                position: absolute;
               top: 50%;
                transform: translateY(-50%);
                left: 0;
                z-index: 1;
                opacity: 0;
                -webkit-transform-origin: 0 0 0;
                -ms-transform-origin: 0 0 0;
                -o-transform-origin: 0 0 0;
                -moz-transform-origin: 0 0 0;
                transform-origin: 0 0 0;
                -webkit-transition: all 0.5s ease 0s;
                -moz-transition: all 0.5s ease 0s;
                -ms-transition: all 0.5s ease 0s;
                -o-transition: all 0.5s ease 0s;
                transition: all 0.5s ease 0s;
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .oxi-team-pic-size:before{
                height: 50%;
                top: 50%;
                transform: translateY(-50%);
                opacity: 1;
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .member-photo{
                border-color: <?php echo $styledata[99]; ?>;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size img{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: block;
            }                                
            .oxi-team-show-<?php echo $styleid; ?> .team-content{
                width: 100%;
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                left: 0;
                padding: 0 20px;
                opacity: 0;
                -webkit-transition: all 0.5s ease 0.2s;
                -moz-transition: all 0.5s ease 0.2s;
                -ms-transition: all 0.5s ease 0.2s;
                -o-transition: all 0.5s ease 0.2s;
                transition: all 0.5s ease 0.2s;
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .team-content{
                opacity: 1;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-info{
                width: 100%;
                float: left;
                text-align: left;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right *{text-align: right;}
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-center *{text-align: center;}
            .oxi-team-show-<?php echo $styleid; ?> .member-icon [class^='fa']{
                margin-left: 0;
                margin-right: <?php echo $styledata[141]; ?>px;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-icon:last-child [class^='fa']{
                margin-right: 0;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-icon [class^='fa']{
                margin-left: <?php echo $styledata[141]; ?>px;
                margin-right: 0;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-icon:first-child [class^='fa']{
                margin-left: 0;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-icon [class^='fa']{
                margin-left: <?php echo $styledata[141] / 2; ?>px;
                margin-right: <?php echo $styledata[141] / 2; ?>px;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-name{
                width: 100%;
                float: left;
                font-size: <?php echo $styledata[105]; ?>px;               
                margin-top: <?php echo $styledata[115]; ?>px;
                margin-bottom: <?php echo $styledata[117]; ?>px;
                color: <?php echo $styledata[107]; ?>;               
                font-style: <?php echo $styledata[113]; ?>;
                font-weight: <?php echo $styledata[111]; ?>;
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[109]); ?>
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-role{
                width: 100%;
                float: left;
                font-size: <?php echo $styledata[119]; ?>px;               
                margin-top: <?php echo $styledata[129]; ?>px;
                margin-bottom: <?php echo $styledata[131]; ?>px;
                color: <?php echo $styledata[121]; ?>;               
                font-style: <?php echo $styledata[127]; ?>;
                font-weight: <?php echo $styledata[125]; ?>;
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[123]); ?>
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-icons{
                width: 100%;
                float: left;
            }
            .oxi-team-show-<?php echo $styleid; ?>  .member-icons {
                width: 100%;
                float: left;
                width: 100%;
                padding: <?php echo $styledata[149]; ?>px <?php echo $styledata[151]; ?>px;
            }
            .oxi-team-show-<?php echo $styleid; ?>  .member-icon [class^='fa'] {
                font-size: <?php echo $styledata[133]; ?>px;
                height: <?php echo $styledata[139]; ?>px;
                width: <?php echo $styledata[139]; ?>px;
                line-height: <?php echo $styledata[139]; ?>px;
                text-align: center;
            }
            <?php echo oxi_team_socail_icon_color($styleid, $socialdata, $styledata[157], $styledata[135], $styledata[147], $styledata[143], $styledata[145]); ?>
            <?php echo $styledata[167]; ?>
        </style>
    </div>
    <?php
}
