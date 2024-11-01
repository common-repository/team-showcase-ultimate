<?php
if (!defined('ABSPATH'))
    exit;

function oxi_team_show_style_1_social($url, $social, $linkopen) {
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

function oxi_team_show_shortcode_function_style_1($styleid, $userdata, $styledata, $listdata, $categorydata, $socialdata) {
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
                echo ' <div class="' . $styledata[75] . ' oxi-team-show-' . $styleid . ' ' . $userdatadiv . ' ' . $teamcatbody . '">
                            <div class="oxi-team-show-body orphita-animation"  orphita-animation="' . $styledata[83] . '">
                                <div class="oxi-team-show  ' . $styledata[77] . '">
                                    <div class="member-photo">
                                        <div class="oxi-team-pic-size">
                                            <img src="' . $data[5] . '" alt="' . oxilab_team_html_special_charecter($data[1]) . '">
                                        </div>
                                        <div class="member-icons">
                                            ' . oxi_team_show_style_1_social($data[9], $data[7], $styledata[79]) . '
                                            ' . oxi_team_show_style_1_social($data[13], $data[11], $styledata[79]) . '
                                            ' . oxi_team_show_style_1_social($data[17], $data[15], $styledata[79]) . '
                                            ' . oxi_team_show_style_1_social($data[21], $data[19], $styledata[79]) . '
                                        </div>
                                    </div>
                                    <div class="member-info ">
                                        <h3 class="member-name">' . oxilab_team_html_special_charecter($data[1]) . '</h3>
                                        <span class="member-role">' . oxilab_team_html_special_charecter($data[3]) . '</span>
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
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-show-body{
                animation-duration:<?php echo $styledata[85]; ?>s;
                -webkit-animation-duration:<?php echo $styledata[85]; ?>s;
                -o-animation-duration:<?php echo $styledata[85]; ?>s;
                -ms-animation-duration:<?php echo $styledata[85]; ?>s;
                -moz-animation-duration:<?php echo $styledata[85]; ?>s;
            }
            .oxi-team-show-<?php echo $styleid; ?>{
                padding: <?php echo $styledata[81]; ?>px <?php echo $styledata[143]; ?>px;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-show-body{
                max-width: <?php echo $styledata[71]; ?>px;
                width: 100%;
                margin: 0 auto;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size{
                width: 100%;
                float: left;
                position: relative;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size:after{
                padding-bottom: <?php echo $styledata[73] / $styledata[71] * 100; ?>%;
                content: "";
                display: block;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size img{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: block;
            }

            <?php
            foreach ($socialdata as $value) {
                $data = explode(" ", $value['class']);
                echo '.oxi-team-show-' . $styleid . ' .' . $data[1] . ':hover{
                         color: ' . $value['color'] . ';
                         background-color: ' . $value['bgcolor'] . ';
                         border-color: ' . $value['bgcolor'] . ';

                    }';
            }
            ?>

            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-show{
                background-color: <?php echo $styledata[145]; ?>;
                box-shadow: <?php echo $styledata[89]; ?>px <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[87]; ?>;
                -o-box-shadow: <?php echo $styledata[89]; ?>px <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[87]; ?>;
                -moz-box-shadow:<?php echo $styledata[89]; ?>px <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[87]; ?>;
                -ms-box-shadow: <?php echo $styledata[89]; ?>px <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[87]; ?>;
                -webkit-box-shadow: <?php echo $styledata[89]; ?>px <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[87]; ?>;
                -webkit-transform: translateY(0);
                transform: translateY(0);     
                -ms-transform: translateY(0);  
                -o-transform: translateY(0); 
                -moz-transform: translateY(0); 
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-photo {
                position: relative;
                width: 100%;
                float:left;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-icons{
                position: absolute;
                top: 0;
                z-index: +1;
                background: <?php echo $styledata[135]; ?>;
                text-align: center;
                width: <?php echo $styledata[137]; ?>px;
                padding: 10px 0;
                left: -<?php echo $styledata[141]; ?>px;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-icons:before {
                content: '';
                z-index: -1;
                position: absolute;
                left: -<?php echo $styledata[141]; ?>px;
                bottom: -<?php echo $styledata[141]; ?>px;
                border: <?php echo $styledata[141]; ?>px solid transparent;
                border-right-color: <?php echo $styledata[135]; ?>;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-icon [class^='fa'] {
                font-size: <?php echo $styledata[131]; ?>px;
                color: <?php echo $styledata[133]; ?>;
                margin: 0;
                width: <?php echo $styledata[137]; ?>px;
                padding:  <?php echo $styledata[139]; ?>px 0;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-info {
                padding: 0 20px;
                width: 100%;                
                float:left;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-name {
                font-size: <?php echo $styledata[97]; ?>px;
                margin: 0;
                position: relative;
                margin-top: <?php echo $styledata[107]; ?>px;
                padding-bottom: <?php echo $styledata[109]; ?>px;
                color: <?php echo $styledata[99]; ?>;
                margin-bottom: <?php echo $styledata[117]; ?>px;
                font-style: <?php echo $styledata[105]; ?>;
                font-weight: <?php echo $styledata[103]; ?>;
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[101]); ?>;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-name:before {
                content: '';
                position: absolute;
                left: 0;
                height: <?php echo $styledata[113]; ?>px;
                width: <?php echo $styledata[111]; ?>px;
                background: <?php echo $styledata[115]; ?>;
                bottom: 0;
            }
            .oxi-team-show-<?php echo $styleid; ?> span.member-role {
                font-size: <?php echo $styledata[119]; ?>px;
                color: <?php echo $styledata[121]; ?>;
                display: block;
                margin-bottom: <?php echo $styledata[129]; ?>px;
                font-style: <?php echo $styledata[127]; ?>;
                font-weight: <?php echo $styledata[125]; ?>;
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[123]); ?>
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover {
                -webkit-transform: translateY(-10px);
                -ms-transform: translateY(-10px);
                -moz-transform: translateY(-10px);
                -o-transform: translateY(-10px);
                transform: translateY(-10px);
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-info {
                text-align: right;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-name:before {
                right: 0;
                left: auto;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-icons {
                right: -<?php echo $styledata[141]; ?>px;
                left: auto;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-icons:before {
                right: -<?php echo $styledata[141]; ?>px;
                left: auto;
                border-left-color: <?php echo $styledata[135]; ?>;
                border-right-color: transparent;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-center .member-info {
                text-align: center;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-center .member-name:before {
                right: 50%;
                -webkit-transform: translateX(50%);
                -ms-transform: translateX(50%);
                -o-transform: translateX(50%);
                -moz-transform: translateX(50%);
                transform: translateX(50%);
                left: auto;
            }

        </style>


    </div>

    <?php
}
