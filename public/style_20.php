<?php
if (!defined('ABSPATH'))
    exit;

function oxi_team_show_style_20_social($url, $social, $linkopen) {
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

function oxi_team_show_shortcode_function_style_20($styleid, $userdata, $styledata, $listdata, $categorydata, $socialdata) {
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
                                <div class="member-photo ">
                                    <div class="oxi-team-pic-size">
                                        <img src="' . $data[5] . '" alt="' . oxilab_team_html_special_charecter($data[1]) . '">
                                        <div class="member-info-body">
                                            <div class="member-info-body-data">
                                                <div class="member-p">' . oxilab_team_html_special_charecter($data[25]) . '</div>      
                                                <div class="member-icons ' . $styledata[157] . '">
                                                    ' . oxi_team_show_style_20_social($data[9], $data[7], $styledata[79]) . '
                                                    ' . oxi_team_show_style_20_social($data[13], $data[11], $styledata[79]) . '
                                                    ' . oxi_team_show_style_20_social($data[17], $data[15], $styledata[79]) . '
                                                    ' . oxi_team_show_style_20_social($data[21], $data[19], $styledata[79]) . '
                                                </div>
                                             </div>
                                        </div>
                                    </div>                                                
                                    <div class="member-info ">                                                    
                                        <h3 class="member-name">' . oxilab_team_html_special_charecter($data[1]) . '</h3>
                                        <div class="member-role">' . oxilab_team_html_special_charecter($data[3]) . '</div>                                                  
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
                position: relative;
                overflow:hidden;
                border-radius:  <?php echo $styledata[153]; ?>px  <?php echo $styledata[153]; ?>px <?php echo $styledata[155]; ?>px <?php echo $styledata[155]; ?>px;
                -webkit-box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>;
                -o-box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>;
                -ms-box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>;
                -moz-box-shadow:<?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>;
                box-shadow: <?php echo $styledata[91]; ?>px <?php echo $styledata[93]; ?>px <?php echo $styledata[95]; ?>px <?php echo $styledata[97]; ?>px <?php echo $styledata[89]; ?>;                                         
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
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size .member-info-body{
                position: absolute;
                left: 0;  
                top:0;
                bottom:0;
                right:0;
                opacity: 0;
                display: block;
                background: <?php echo $styledata[99]; ?>; 
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size .member-info-body-data{
                position: absolute;
                left: 0;
                bottom:<?php echo $styledata[151]; ?>px;               
                right:0;
                display: block;
                -webkit-transform: translateY(100%);
                -ms-transform: translateY(100%);
                -o-transform: translateY(100%);
                -moz-transform: translateY(100%);
                transform: translateY(100%);
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .oxi-team-pic-size .member-info-body-data{                
                -webkit-transform: translateY(0%);                
                -ms-transform: translateY(0%); 
                -o-transform: translateY(0%);                
                -moz-transform: translateY(0%); 
                transform: translateY(0%);
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .oxi-team-pic-size .member-info-body{
                opacity: 1;
                -webkit-transform: translateY(0%);
                -ms-transform: translateY(0%);
                -o-transform: translateY(0%);
                -moz-transform: translateY(0%);
                transform: translateY(0%);
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-pic-size .member-p{
                font-size: <?php echo $styledata[169]; ?>px;
                color: <?php echo $styledata[171]; ?>;                                      
                margin-bottom: 0px;
                padding-bottom:<?php echo $styledata[179]; ?>px;
                padding-right: <?php echo $styledata[167]; ?>px;                
                padding-left: <?php echo $styledata[167]; ?>px; 
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[173]); ?>;    
                font-style: <?php echo $styledata[177]; ?>;
                font-weight: <?php echo $styledata[175]; ?>;
            }   
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-center .oxi-team-pic-size .member-p{
                text-align: center;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .oxi-team-pic-size .member-p{
                text-align: right;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-icons{                                   
                width: 100%;
                float: left;
                padding-top: <?php echo $styledata[149]; ?>px;
                padding-right: <?php echo $styledata[167]; ?>px;                
                padding-left: <?php echo $styledata[167]; ?>px; 
            }

            .oxi-team-show-<?php echo $styleid; ?> .member-icons [class^='fa']{
                font-size: <?php echo $styledata[133]; ?>px;
                height: <?php echo $styledata[139]; ?>px;
                width: <?php echo $styledata[139]; ?>px;
                line-height: <?php echo $styledata[139]; ?>px;
                margin-left: 0px;
                margin-right: <?php echo $styledata[141]; ?>px;           
                text-align: center;
            }
            <?php echo oxi_team_socail_icon_color($styleid, $socialdata, $styledata[157], $styledata[135], $styledata[147], $styledata[143], $styledata[145]); ?>

            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-center .member-icons [class^='fa']{
                margin-left: <?php echo $styledata[141] / 2; ?>px;
                margin-right: <?php echo $styledata[141] / 2; ?>px;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-icons [class^='fa']{
                margin-left: <?php echo $styledata[141]; ?>px;
                margin-right: 0px;
            }                                
            .oxi-team-show-<?php echo $styleid; ?> .member-info{
                width: 100%;
                float: left;
                z-index: 99;
                position: relative; 
                background-color: <?php echo $styledata[165]; ?>;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-info:after{
                content: "";
                position: absolute;
                left: 0px;
                right: 0px;
                width: 100%;
                top: 0px;
                height: 2%;   
                z-index: -1;
                background: <?php echo $styledata[181]; ?>;
                -webkit-transition: all 0.3s ease 0s;
                -moz-transition: all 0.3s ease 0s;
                -ms-transition: all 0.3s ease 0s;
                -o-transition: all 0.3s ease 0s;
                transition: all 0.3s ease 0s;
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .member-info:after{
                height: 100%;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-center .member-icons{
                text-align: center;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-icons{
                text-align: right;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-center .member-info{
                text-align: center;
            }
            .oxi-team-show-<?php echo $styleid; ?> .oxi-team-right .member-info{
                text-align: right;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-name{                                    
                font-size: <?php echo $styledata[105]; ?>px;
                margin-bottom: 0px;
                margin-top: 0px;
                color: <?php echo $styledata[107]; ?>;                                
                padding-top: <?php echo $styledata[115]; ?>px;
                padding-right: <?php echo $styledata[167]; ?>px;
                padding-left: <?php echo $styledata[167]; ?>px; 
                font-style: <?php echo $styledata[113]; ?>;
                font-weight: <?php echo $styledata[111]; ?>;
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[109]); ?>;  
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .member-name{
                color: <?php echo $styledata[159]; ?>;
            }
            .oxi-team-show-<?php echo $styleid; ?> .member-role{   
                font-size: <?php echo $styledata[119]; ?>px; 
                color: <?php echo $styledata[121]; ?>;               
                font-style: <?php echo $styledata[127]; ?>;
                font-weight: <?php echo $styledata[125]; ?>;
                font-family: <?php echo oxilab_team_font_familly_special_charecter($styledata[123]); ?>;                
                padding-top: <?php echo $styledata[129]; ?>px;
                padding-right: <?php echo $styledata[167]; ?>px;
                padding-bottom: <?php echo $styledata[131]; ?>px;
                padding-left: <?php echo $styledata[167]; ?>px;                 
                -webkit-transition: all 0.5s linear;
                -moz-transition: all 0.5s linear;
                -ms-transition: all 0.5s linear;
                -o-transition: all 0.5s linear;
                transition: all 0.5s linear ;
            }
            .oxi-team-show-<?php echo $styleid; ?>:hover .member-role{
                color: <?php echo $styledata[161]; ?>; 
            }          
            <?php echo $styledata[183]; ?>;
        </style>
    </div>
    <?php
}
