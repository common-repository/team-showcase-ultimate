<?php
if (!defined('ABSPATH'))
    exit;
oxi_team_show_slider_user_capabilities();
function oxi_team_show_admin_support() {
    ?>
    <div class="ihewc-admin-style-settings-div-css">
        <div class="col-xs-12">                                           
            <a href="https://www.oxilab.org/docs/team-showcase-and-slider/getting-started/installing-for-the-first-time/" target="_blank">
                <div class="col-xs-support-ihewc">
                    <div class="ihewc-admin-support-icon">
                        <i class="fa fa-file" aria-hidden="true"></i>
                    </div>  
                    <div class="ihewc-admin-support-heading">
                        Read Our Docs
                    </div> 
                    <div class="ihewc-admin-support-info">
                        Learn how to set up and using Team Showcase and Slider
                    </div> 
                </div>
            </a>
            <a href="https://wordpress.org/support/plugin/team-showcase-ultimate" target="_blank">
                <div class="col-xs-support-ihewc">
                    <div class="ihewc-admin-support-icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>  
                    <div class="ihewc-admin-support-heading">
                        Support
                    </div> 
                    <div class="ihewc-admin-support-info">
                        Powered by WordPress.org, Issues resolved by Plugins Author.
                    </div> 
                </div>
            </a>
            <a href="https://youtu.be/3gElEebJxCY" target="_blank">
                <div class="col-xs-support-ihewc">
                    <div class="ihewc-admin-support-icon">
                        <i class="fa fa-ticket" aria-hidden="true"></i>
                    </div>  
                    <div class="ihewc-admin-support-heading">
                        Video Tutorial 
                    </div> 
                    <div class="ihewc-admin-support-info">
                        Watch our Using Video Tutorial in Youtube.
                    </div> 
                </div>
            </a>
        </div>
    </div> 
    <?php
}

function oxi_team_show_admin_input_text($id, $value, $name, $title) {
    ?>
    <div class="form-group">
        <label for="<?php echo $id; ?>"><?php echo $name; ?></label>
        <input type="text "class="form-control" id="<?php echo $id; ?>" name="<?php echo $id; ?>" value="<?php echo oxilab_team_admin_html_special_charecter($value); ?>">
        <small class="form-text text-muted"><?php echo $title; ?></small>
    </div>

    <?php
}

function oxi_team_show_admin_input_text_area($id, $value, $name, $title) {
    ?>
    <div class="form-group">
        <label for="<?php echo $id; ?>"><?php echo $name; ?></label>
        <textarea class="form-control" rows="4" id="<?php echo $id; ?>" name="<?php echo $id; ?>"><?php echo oxi_team_show_admin_special_charecter($value); ?></textarea>
        <small class="form-text text-muted"><?php echo $title; ?></small>
    </div>
    <?php
}

function oxi_team_show_admin_number($id, $value, $step, $name, $title) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>" ><?php echo $name; ?> </label>
        <div class="col-sm-6">
            <input class="form-control" type="number" step="<?php echo $step; ?>" value="<?php echo $value; ?>" id="<?php echo $id; ?>" name="<?php echo $id; ?>">
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_number_double($frist_id, $first_value, $second_id, $second_value, $name, $title) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $frist_id; ?>" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>" ><?php echo $name; ?> </label>
        <div class="col-sm-3">
            <input class="form-control" type="number"  min="0" value="<?php echo $first_value; ?>" id="<?php echo $frist_id; ?>" name="<?php echo $frist_id; ?>">
        </div>
        <div class="col-sm-3">
            <input class="form-control" type="number"  min="0" value="<?php echo $second_value; ?>" id="<?php echo $second_id; ?>" name="<?php echo $second_id; ?>">
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_color($id, $value, $type, $name, $title) {
    if ($type == 'rgba' || $type == 'RGBA') {
        $colortype = 'data-format="rgb" data-opacity="true"';
    } else {
        $colortype = '';
    }
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>" ><?php echo $name; ?> <?php echo (get_option('oxi_team_show_slider_license_status') == 'valid' ? ' ' : '<span class="oxilab-pro-only">Pro Only</span>'); ?></label>
       <div class="col-sm-6">
            <input type="text" <?php echo $colortype; ?> class="form-control oxilab-vendor-color" id="<?php echo $id; ?>" name="<?php echo $id; ?>" value="<?php echo $value; ?>" <?php echo (get_option('oxi_team_show_slider_license_status') == 'valid' ? ' ' : 'team-pro-only="yes"'); ?>>
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_font_family($id, $value, $name, $title) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>" ><?php echo $name; ?>  <?php echo (get_option('oxi_team_show_slider_license_status') == 'valid' ? ' ' : '<span class="oxilab-pro-only">Pro Only</span>'); ?> </label>
        <div class="col-sm-6">
            <input class="form-control oxilab-admin-font" type="text" value="<?php echo $value; ?>" id="<?php echo $id; ?>" name="<?php echo $id; ?>" <?php echo (get_option('oxi_team_show_slider_license_status') == 'valid' ? ' ' : 'team-pro-only="yes"'); ?>>
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_true_false($id, $value, $fristname, $fristvalue, $Secondname, $Secondvalue, $name, $title) {
    ?>
    <div class="form-group row">
        <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>"><?php echo $name; ?></label>
        <div class="col-sm-6">
            <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-primary <?php
                if ($fristvalue == $value) {
                    echo 'active';
                }
                ?>"> <input type="radio" <?php
                           if ($fristvalue == $value) {
                               echo 'checked';
                           }
                           ?> name="<?php echo $id; ?>" id="<?php echo $id; ?>-yes" autocomplete="off" value="<?php echo $fristvalue; ?>"><?php echo $fristname; ?></label>
                <label class="btn btn-primary <?php
                if ($Secondvalue == $value) {
                    echo 'active';
                }
                ?>"> <input type="radio" <?php
                           if ($Secondvalue == $value) {
                               echo 'checked';
                           }
                           ?> name="<?php echo $id; ?>" autocomplete="off" id="<?php echo $id; ?>-no" value="<?php echo $Secondvalue; ?>"><?php echo $Secondname; ?> </label>
            </div>
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_font_weight($id, $value, $name, $title) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>" ><?php echo $name; ?> </label>
        <div class="col-sm-6">
            <select class="form-control" id="<?php echo $id; ?>" name="<?php echo $id; ?>">
                <option value="100" <?php
                if ($value == '100') {
                    echo 'selected';
                };
                ?>>100</option>
                <option value="200" <?php
                if ($value == '200') {
                    echo 'selected';
                };
                ?>>200</option>
                <option value="300" <?php
                if ($value == '300') {
                    echo 'selected';
                };
                ?>>300</option>
                <option value="400" <?php
                if ($value == '400') {
                    echo 'selected';
                };
                ?>>400</option>
                <option value="500" <?php
                if ($value == '500') {
                    echo 'selected';
                };
                ?>>500</option>
                <option value="600" <?php
                if ($value == '600') {
                    echo 'selected';
                };
                ?>>600</option>
                <option value="700" <?php
                if ($value == '700') {
                    echo 'selected';
                };
                ?>>700</option>
                <option value="800" <?php
                if ($value == '800') {
                    echo 'selected';
                };
                ?>>800</option>
                <option value="900" <?php
                if ($value == '900') {
                    echo 'selected';
                };
                ?>>900</option>
                <option value="normal" <?php
                if ($value == 'normal') {
                    echo 'selected';
                };
                ?>>Normal</option>
                <option value="bold" <?php
                if ($value == 'bold') {
                    echo 'selected';
                };
                ?>>Bold</option>
                <option value="lighter" <?php
                if ($value == 'lighter') {
                    echo 'selected';
                };
                ?>>Lighter</option>
                <option value="initial" <?php
                if ($value == 'initial') {
                    echo 'selected';
                };
                ?>>Initial</option>
            </select>
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_font_style($id, $value, $name, $title) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>" ><?php echo $name; ?> </label>
        <div class="col-sm-6">
            <select class="form-control" id="<?php echo $id; ?>" name="<?php echo $id; ?>">
                <option <?php
                if ($value == 'normal') {
                    echo 'selected';
                }
                ?> value="normal">Normal</option>
                <option <?php
                if ($value == 'italic') {
                    echo 'selected';
                }
                ?> value="italic">Italic</option>
                <option <?php
                if ($value == 'oblique') {
                    echo 'selected';
                }
                ?> value="oblique">Oblique</option>
                <option <?php
                if ($value == 'initial') {
                    echo 'selected';
                }
                ?> value="initial">Initial</option>
                <option <?php
                if ($value == 'inherit') {
                    echo 'selected';
                }
                ?> value="inherit">Inherit</option>
            </select>
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_text_align($id, $value, $name, $title) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>" ><?php echo $name; ?> </label>
        <div class="col-sm-6">
            <select class="form-control" id="<?php echo $id; ?>" name="<?php echo $id; ?>">
                <option value="left" <?php
                if ($value == 'left') {
                    echo 'selected';
                }
                ?>>Left</option>
                <option value="Center" <?php
                if ($value == 'Center') {
                    echo 'selected';
                }
                ?>>Center</option>
                <option value="Right" <?php
                if ($value == 'Right') {
                    echo 'selected';
                }
                ?>>Right</option>
            </select>
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_col_data($id, $value, $name, $title) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>" ><?php echo $name; ?> </label>
        <div class="col-sm-6">
            <select class="form-control" id="<?php echo $id; ?>" name="<?php echo $id; ?>">
                <option value="oxi-team-show-col-1" <?php
                if ($value == 'oxi-team-show-col-1') {
                    echo 'selected';
                }
                ?>>Single Item</option>
                <option value="oxi-team-show-col-2" <?php
                if ($value == 'oxi-team-show-col-2') {
                    echo 'selected';
                }
                ?>>2 Items</option>
                <option value="oxi-team-show-col-3" <?php
                if ($value == 'oxi-team-show-col-3') {
                    echo 'selected';
                }
                ?>>3 Items</option>
                <option value="oxi-team-show-col-4" <?php
                if ($value == 'oxi-team-show-col-4') {
                    echo 'selected';
                }
                ?>>4 Items</option>
                <option value="oxi-team-show-col-5" <?php
                if ($value == 'oxi-team-show-col-5') {
                    echo 'selected';
                }
                ?>>5 Items</option>
                <option value="oxi-team-show-col-6" <?php
                if ($value == 'oxi-team-show-col-6') {
                    echo 'selected';
                }
                ?>>6 Items</option>
            </select>
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_animation_select($id, $value) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Select your Viewing Animation" >Animation</label>
        <div class="col-sm-6">
            <select class="form-control" id="<?php echo $id; ?>" name="<?php echo $id; ?>">
                <optgroup label="No Animation">
                    <option value="" <?php
                    if ($value == '') {
                        echo 'selected';
                    }
                    ?>>No Animation</option>
                </optgroup>
                <optgroup label="Attention Seekers">
                    <option value="bounce" <?php
                    if ($value == 'bounce') {
                        echo 'selected';
                    }
                    ?>>bounce</option>
                    <option value="flash" <?php
                    if ($value == 'flash') {
                        echo 'selected';
                    }
                    ?>>flash</option>
                    <option value="pulse" <?php
                    if ($value == 'pulse') {
                        echo 'selected';
                    }
                    ?>>pulse</option>
                    <option value="rubberBand" <?php
                    if ($value == 'rubberBand') {
                        echo 'selected';
                    }
                    ?>>rubberBand</option>
                    <option value="shake" <?php
                    if ($value == 'shake') {
                        echo 'selected';
                    }
                    ?>>shake</option>
                    <option value="swing" <?php
                    if ($value == 'swing') {
                        echo 'selected';
                    }
                    ?>>swing</option>
                    <option value="tada" <?php
                    if ($value == 'tada') {
                        echo 'selected';
                    }
                    ?>>tada</option>
                    <option value="wobble" <?php
                    if ($value == 'wobble') {
                        echo 'selected';
                    }
                    ?>>wobble</option>
                    <option value="jello" <?php
                    if ($value == 'jello') {
                        echo 'selected';
                    }
                    ?>>jello</option>
                </optgroup>

                <optgroup label="Bouncing Entrances">
                    <option value="bounceIn" <?php
                    if ($value == 'bounceIn') {
                        echo 'selected';
                    }
                    ?>>bounceIn</option>
                    <option value="bounceInDown" <?php
                    if ($value == 'bounceInDown') {
                        echo 'selected';
                    }
                    ?>>bounceInDown</option>
                    <option value="bounceInLeft" <?php
                    if ($value == 'bounceInLeft') {
                        echo 'selected';
                    }
                    ?>>bounceInLeft</option>
                    <option value="bounceInRight" <?php
                    if ($value == 'bounceInRight') {
                        echo 'selected';
                    }
                    ?>>bounceInRight</option>
                    <option value="bounceInUp" <?php
                    if ($value == 'bounceInUp') {
                        echo 'selected';
                    }
                    ?>>bounceInUp</option>
                </optgroup>
                <optgroup label="Fading Entrances">
                    <option value="fadeIn" <?php
                    if ($value == 'fadeIn') {
                        echo 'selected';
                    }
                    ?>>fadeIn</option>
                    <option value="fadeInDown" <?php
                    if ($value == 'fadeInDown') {
                        echo 'selected';
                    }
                    ?>>fadeInDown</option>
                    <option value="fadeInDownBig" <?php
                    if ($value == 'fadeInDownBig') {
                        echo 'selected';
                    }
                    ?>>fadeInDownBig</option>
                    <option value="fadeInLeft" <?php
                    if ($value == 'fadeInLeft') {
                        echo 'selected';
                    }
                    ?>>fadeInLeft</option>
                    <option value="fadeInLeftBig" <?php
                    if ($value == 'fadeInLeftBig') {
                        echo 'selected';
                    }
                    ?>>fadeInLeftBig</option>
                    <option value="fadeInRight" <?php
                    if ($value == 'fadeInRight') {
                        echo 'selected';
                    }
                    ?>>fadeInRight</option>
                    <option value="fadeInRightBig" <?php
                    if ($value == 'fadeInRightBig') {
                        echo 'selected';
                    }
                    ?>>fadeInRightBig</option>
                    <option value="fadeInUp" <?php
                    if ($value == 'fadeInUp') {
                        echo 'selected';
                    }
                    ?>>fadeInUp</option>
                    <option value="fadeInUpBig" <?php
                    if ($value == 'fadeInUpBig') {
                        echo 'selected';
                    }
                    ?>>fadeInUpBig</option>
                </optgroup>

                <optgroup label="Fading Exits">
                    <option value="fadeOut" <?php
                    if ($value == 'fadeOut') {
                        echo 'selected';
                    }
                    ?>>fadeOut</option>
                    <option value="fadeOutDown" <?php
                    if ($value == 'fadeOutDown') {
                        echo 'selected';
                    }
                    ?>>fadeOutDown</option>
                    <option value="fadeOutDownBig" <?php
                    if ($value == 'fadeOutDownBig') {
                        echo 'selected';
                    }
                    ?>>fadeOutDownBig</option>
                    <option value="fadeOutLeft" <?php
                    if ($value == 'fadeOutLeft') {
                        echo 'selected';
                    }
                    ?>>fadeOutLeft</option>
                    <option value="fadeOutLeftBig" <?php
                    if ($value == 'fadeOutLeftBig') {
                        echo 'selected';
                    }
                    ?>>fadeOutLeftBig</option>
                    <option value="fadeOutRight" <?php
                    if ($value == 'fadeOutRight') {
                        echo 'selected';
                    }
                    ?>>fadeOutRight</option>
                    <option value="fadeOutRightBig" <?php
                    if ($value == 'fadeOutRightBig') {
                        echo 'selected';
                    }
                    ?>>fadeOutRightBig</option>
                    <option value="fadeOutUp" <?php
                    if ($value == 'fadeOutUp') {
                        echo 'selected';
                    }
                    ?>>fadeOutUp</option>
                    <option value="fadeOutUpBig" <?php
                    if ($value == 'fadeOutUpBig') {
                        echo 'selected';
                    }
                    ?>>fadeOutUpBig</option>
                </optgroup>

                <optgroup label="Flippers">
                    <option value="flip" <?php
                    if ($value == 'flip') {
                        echo 'selected';
                    }
                    ?>>flip</option>
                    <option value="flipInX" <?php
                    if ($value == 'flipInX') {
                        echo 'selected';
                    }
                    ?>>flipInX</option>
                    <option value="flipInY" <?php
                    if ($value == 'flipInY') {
                        echo 'selected';
                    }
                    ?>>flipInY</option>
                    <option value="flipOutX" <?php
                    if ($value == 'flipOutX') {
                        echo 'selected';
                    }
                    ?>>flipOutX</option>
                    <option value="flipOutY" <?php
                    if ($value == 'flipOutY') {
                        echo 'selected';
                    }
                    ?>>flipOutY</option>
                </optgroup>

                <optgroup label="Lightspeed">
                    <option value="lightSpeedIn" <?php
                    if ($value == 'lightSpeedIn') {
                        echo 'selected';
                    }
                    ?>>lightSpeedIn</option>
                    <option value="lightSpeedOut" <?php
                    if ($value == 'lightSpeedOut') {
                        echo 'selected';
                    }
                    ?>>lightSpeedOut</option>
                </optgroup>

                <optgroup label="Rotating Entrances">
                    <option value="rotateIn" <?php
                    if ($value == 'rotateIn') {
                        echo 'selected';
                    }
                    ?>>rotateIn</option>
                    <option value="rotateInDownLeft" <?php
                    if ($value == 'rotateInDownLeft') {
                        echo 'selected';
                    }
                    ?>>rotateInDownLeft</option>
                    <option value="rotateInDownRight" <?php
                    if ($value == 'rotateInDownRight') {
                        echo 'selected';
                    }
                    ?>>rotateInDownRight</option>
                    <option value="rotateInUpLeft" <?php
                    if ($value == 'rotateInUpLeft') {
                        echo 'selected';
                    }
                    ?>>rotateInUpLeft</option>
                    <option value="rotateInUpRight" <?php
                    if ($value == 'rotateInUpRight') {
                        echo 'selected';
                    }
                    ?>>rotateInUpRight</option>
                </optgroup>
                <optgroup label="Sliding Entrances">
                    <option value="slideInUp" <?php
                    if ($value == 'slideInUp') {
                        echo 'selected';
                    }
                    ?>>slideInUp</option>
                    <option value="slideInDown" <?php
                    if ($value == 'slideInDown') {
                        echo 'selected';
                    }
                    ?>>slideInDown</option>
                    <option value="slideInLeft" <?php
                    if ($value == 'slideInLeft') {
                        echo 'selected';
                    }
                    ?>>slideInLeft</option>
                    <option value="slideInRight" <?php
                    if ($value == 'slideInRight') {
                        echo 'selected';
                    }
                    ?>>slideInRight</option>
                </optgroup> 
                <optgroup label="Zoom Entrances">
                    <option value="zoomIn" <?php
                    if ($value == 'zoomIn') {
                        echo 'selected';
                    }
                    ?>>zoomIn</option>
                    <option value="zoomInDown" <?php
                    if ($value == 'zoomInDown') {
                        echo 'selected';
                    }
                    ?>>zoomInDown</option>
                    <option value="zoomInLeft" <?php
                    if ($value == 'zoomInLeft') {
                        echo 'selected';
                    }
                    ?>>zoomInLeft</option>
                    <option value="zoomInRight" <?php
                    if ($value == 'zoomInRight') {
                        echo 'selected';
                    }
                    ?>>zoomInRight</option>
                    <option value="zoomInUp" <?php
                    if ($value == 'zoomInUp') {
                        echo 'selected';
                    }
                    ?>>zoomInUp</option>
                </optgroup>
                <optgroup label="Specials">
                    <option value="hinge" <?php
                    if ($value == 'hinge') {
                        echo 'selected';
                    }
                    ?>>hinge</option>
                    <option value="jackInTheBox" <?php
                    if ($value == 'jackInTheBox') {
                        echo 'selected';
                    }
                    ?>>jackInTheBox</option>
                    <option value="rollIn" <?php
                    if ($value == 'rollIn') {
                        echo 'selected';
                    }
                    ?>>rollIn</option>
                </optgroup>
            </select>
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_navigation($id, $value, $name, $title) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>"><?php echo $name; ?></label>
        <div class="col-sm-6">
            <div class="col-xs-4" style="margin-bottom: 5px;">
                <div  <?php
                if ($value == 'fa-arrow-left fa-arrow-right') {
                    echo 'style="color: #E00086"';
                }
                ?> class="orphita-carousel-nev-style"><span class="fa fa-arrow-left"></span> <span class="fa fa-arrow-right"></span></div>
                <input <?php
                if ($value == 'fa-arrow-left fa-arrow-right') {
                    echo 'checked';
                }
                ?> type="radio" name="<?php echo $id; ?>" class="hidden <?php echo $id; ?>" value='fa-arrow-left fa-arrow-right'>
            </div>
            <div class="col-xs-4" style="margin-bottom: 5px;">
                <div  <?php
                if ($value == 'fa-angle-double-left fa-angle-double-right') {
                    echo 'style="color: #E00086"';
                }
                ?> class="orphita-carousel-nev-style"><span class="fa fa-angle-double-left"></span> <span class="fa fa-angle-double-right"></span></div>
                <input <?php
                if ($value == 'fa-angle-double-left fa-angle-double-right') {
                    echo 'checked';
                }
                ?> type="radio" name="<?php echo $id; ?>" class="hidden <?php echo $id; ?>" value='fa-angle-double-left fa-angle-double-right'>
            </div>
            <div class="col-xs-4" style="margin-bottom: 5px;">
                <div  <?php
                if ($value == 'fa-angle-left fa-angle-right') {
                    echo 'style="color: #E00086"';
                }
                ?> class="orphita-carousel-nev-style"><span class="fa fa-angle-left"></span> <span class="fa fa-angle-right"></span></div>
                <input <?php
                if ($value == 'fa-angle-left fa-angle-right') {
                    echo 'checked';
                }
                ?> type="radio" name="<?php echo $id; ?>" class="hidden <?php echo $id; ?>" value='fa-angle-left fa-angle-right'>
            </div>  
            <div class="col-xs-4" style="margin-bottom: 5px;">
                <div  <?php
                if ($value == 'fa-arrow-circle-left fa-arrow-circle-right') {
                    echo 'style="color: #E00086"';
                }
                ?> class="orphita-carousel-nev-style"><span class="fa fa-arrow-circle-left"></span> <span class="fa fa-arrow-circle-right"></span></div>
                <input <?php
                if ($value == 'fa-arrow-circle-left fa-arrow-circle-right') {
                    echo 'checked';
                }
                ?> type="radio" name="<?php echo $id; ?>" class="hidden <?php echo $id; ?>" value='fa-arrow-circle-left fa-arrow-circle-right'>
            </div> 
            <div class="col-xs-4" style="margin-bottom: 5px;">
                <div  <?php
                if ($value == 'fa-caret-left fa-caret-right') {
                    echo 'style="color: #E00086"';
                }
                ?> class="orphita-carousel-nev-style"><span class="fa fa-caret-left"></span> <span class="fa fa-caret-right"></span></div>
                <input <?php
                if ($value == 'fa-caret-left fa-caret-right') {
                    echo 'checked';
                }
                ?> type="radio" name="<?php echo $id; ?>" class="hidden <?php echo $id; ?>" value='fa-caret-left fa-caret-right'>
            </div>
            <div class="col-xs-4" style="margin-bottom: 5px;">
                <div  <?php
                if ($value == 'fa-caret-square-o-left fa-caret-square-o-right') {
                    echo 'style="color: #E00086"';
                }
                ?> class="orphita-carousel-nev-style"><span class="fa fa-caret-square-o-left"></span> <span class="fa fa-caret-square-o-right"></span></div>
                <input <?php
                if ($value == 'fa-caret-square-o-left fa-caret-square-o-right') {
                    echo 'checked';
                }
                ?> type="radio" name="<?php echo $id; ?>" class="hidden <?php echo $id; ?>" value='fa-caret-square-o-left fa-caret-square-o-right'>
            </div>
            <div class="col-xs-4" style="margin-bottom: 5px;">
                <div  <?php
                if ($value == 'fa-chevron-circle-left fa-chevron-circle-right') {
                    echo 'style="color: #E00086"';
                }
                ?> class="orphita-carousel-nev-style"><span class="fa fa-chevron-circle-left"></span> <span class="fa fa-chevron-circle-right"></span></div>
                <input <?php
                if ($value == 'fa-chevron-circle-left fa-chevron-circle-right') {
                    echo 'checked';
                }
                ?> type="radio" name="<?php echo $id; ?>" class="hidden <?php echo $id; ?>" value='fa-chevron-circle-left fa-chevron-circle-right'>
            </div>
            <div class="col-xs-4" style="margin-bottom: 5px;">
                <div  <?php
                if ($value == 'fa-chevron-left fa-chevron-right') {
                    echo 'style="color: #E00086"';
                }
                ?> class="orphita-carousel-nev-style"><span class="fa fa-chevron-left"></span> <span class="fa fa-chevron-right" ></span></div>
                <input <?php
                if ($value == 'fa-chevron-left fa-chevron-right') {
                    echo 'checked';
                }
                ?> type="radio" name="<?php echo $id; ?>" class="hidden <?php echo $id; ?>" value='fa-chevron-left fa-chevron-right'>
            </div>
        </div>        
    </div>
    <?php
}

function oxi_team_show_admin_position($id, $value, $name, $title) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>"><?php echo $name; ?></label>
        <div class="col-sm-6">
            <select class="form-control" id="<?php echo $id; ?>" name="<?php echo $id; ?>">
                <option <?php
                if ($value == '') {
                    echo 'selected';
                }
                ?> value="">Left</option>
                <option <?php
                if ($value == 'oxi-team-center') {
                    echo 'selected';
                }
                ?> value="oxi-team-center">Center</option>
                <option <?php
                if ($value == 'oxi-team-right') {
                    echo 'selected';
                }
                ?> value="oxi-team-right">Right</option>
            </select>
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_pagination($id, $value, $name, $title) {
    ?>
    <div class="form-group row form-group-sm">
        <label for="<?php echo $id; ?>" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="<?php echo $title; ?>"><?php echo $name; ?></label>
        <div class="col-sm-6">
            <select class="form-control" id="<?php echo $id; ?>" name="<?php echo $id; ?>">
                <option <?php
                if ($value == 'top left') {
                    echo 'selected';
                }
                ?> value="top left">Top Left</option>
                <option <?php
                if ($value == 'top center') {
                    echo 'selected';
                }
                ?> value="top center">Top Middle</option>
                <option <?php
                if ($value == 'top right') {
                    echo 'selected';
                }
                ?> value="top right">Top Right</option>
                <option <?php
                if ($value == 'bottom left') {
                    echo 'selected';
                }
                ?> value="bottom left">Bottom Left</option>
                <option <?php
                if ($value == 'bottom center') {
                    echo 'selected';
                }
                ?> value="bottom center">Bottom Middle</option>
                <option <?php
                if ($value == 'bottom right') {
                    echo 'selected';
                }
                ?> value="bottom right">Bottom Right</option>
            </select>
        </div>
    </div>
    <?php
}

function oxi_team_show_admin_shortcode($styleid, $listdata) {
    ?>
    <div class="oxilab-admin-style-panel-right">
        <div class="oxilab-admin-item-panel">
            <div class="oxilab-admin-add-new-headding">
                Add New
            </div>
            <div class="oxilab-admin-add-new-item" id="oxilab-admin-add-new-item">
                <span>
                    <i class="fas fa-plus-circle"></i>
                    Add new Items
                </span>
            </div>
        </div>
        <div class="oxilab-shortcode">
            <div class="oxilab-shortcode-heading">
                Shortcodes
            </div>
            <div class="oxilab-shortcode-body">
                <em>Shortcode for posts/pages/plugins</em>
                <p>Copy &amp; paste the shortcode directly into any WordPress post or page.</p>
                <input type="text" class="form-control" onclick="this.setSelectionRange(0, this.value.length)" value="[oxi_team_show id=&quot;<?php echo $styleid; ?>&quot;]">
                <span></span>
                <em>Shortcode for templates/themes</em>
                <p>Copy &amp; paste this code into a template file to include the slideshow within your theme.</p>
                <input type="text" class="form-control" onclick="this.setSelectionRange(0, this.value.length)" value="&lt;?php echo do_shortcode(&#039;[oxi_team_show  id=&quot;<?php echo $styleid; ?>&quot;]&#039;); ?&gt;">
                <span></span>
                <em>Apply on Visual Composer</em>
                <p>Go on Visual Composer and get Our element on Content bar as Image Hover Ultimate</p>
            </div>
        </div>
        <div class="oxilab-admin-item-panel">
            <div class="oxilab-admin-add-new-headding">
                Rearrange Team
            </div>
            <div class="oxilab-admin-add-new-item" id="oxilab-admin-drag-id">
                <span>
                    <i class="fas fa-cogs"></i>
                </span>
            </div>
        </div>

    </div>  
    <div id="oxilab-admin-drag-data" class="modal fade bd-example-modal-sm" role="dialog">
        <div class="modal-dialog modal-sm">
            <form id="oxilab-admin-drag-submit">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Rearrange Teams</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert text-center" id="oxilab-admin-drag-saving">
                            <i class="fas fa-spinner fa-spin"></i>
                        </div>
                        <?php
                        echo ' <ul class="list-group" id="oxilab-admin-drag-drop">';
                        foreach ($listdata as $value) {
                            $name = explode('{#}|{#}', $value['files']);
                            echo '<li class="list-group-item" id ="' . $value['id'] . '">' . $name[1] . '</li>';
                        }
                        echo '</ul>';
                        ?>
                    </div>
                    <div class="modal-footer">    
                        <input type="hidden" name="oxi_team_show_ajax_data" id="oxi_team_show_ajax_data" value="<?php echo wp_create_nonce("oxi_team_show_ajax_data"); ?>"/>
                        <button type="button" id="oxilab-admin-drag-close" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input type="submit" id="oxilab-admin-drag-submit" class="btn btn-primary" value="submit">
                    </div>
                </div>
            </form>
        </div>
    </div> 
    <?php
}

function oxiteamshowcaseteamadmincategory($styleid, $styledata) {
    ?>
    <div class="oxilab-tabs-content-div-50">
        <div class="oxilab-tabs-content-div">
            <div class="head-oxi">
                Team Category
            </div>
            <div class="form-group row">
                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize your Link Opening">Show Category</label>
                <div class="col-sm-6">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary <?php
                        if ($styledata[1] == '') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[1] == '') {
                                       echo 'checked';
                                   }
                                   ?> name="team-category" id="team-category-yes" autocomplete="off" value="">No</label>
                        <label class="btn btn-primary <?php
                        if ($styledata[1] == 'Yes') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[1] == 'Yes') {
                                       echo 'checked';
                                   }
                                   ?> name="team-category"  id="team-category-no" autocomplete="off" value="Yes"> Yes </label>
                    </div>
                </div>
            </div>

            <div class="form-group row form-group-sm">
                <label for="team-category-style" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize How mane Team You want to Show in a single Row ">Category Style</label>
                <div class="col-sm-6">
                    <select class="form-control" id="team-category-style" name="team-category-style">
                        <option value="oxi-team-cat-style-1" <?php
                        if ($styledata[3] == 'oxi-team-cat-style-1') {
                            echo 'selected';
                        }
                        ?>>Style 1</option>
                        <option value="oxi-team-cat-style-2" <?php
                        if ($styledata[3] == 'oxi-team-cat-style-2') {
                            echo 'selected';
                        }
                        ?>>Style 2</option>
                        <option value="oxi-team-cat-style-3" <?php
                        if ($styledata[3] == 'oxi-team-cat-style-3') {
                            echo 'selected';
                        }
                        ?>>Style 3</option>
                        <option value="oxi-team-cat-style-4" <?php
                        if ($styledata[3] == 'oxi-team-cat-style-4') {
                            echo 'selected';
                        }
                        ?>>Style 4</option>
                        <option value="oxi-team-cat-style-5" <?php
                        if ($styledata[3] == 'oxi-team-cat-style-5') {
                            echo 'selected';
                        }
                        ?>>Style 5</option>
                        <option value="oxi-team-cat-style-6" <?php
                        if ($styledata[3] == 'oxi-team-cat-style-6') {
                            echo 'selected';
                        }
                        ?>>Style 6</option>
                    </select>
                </div>

            </div>
            <div class="form-group row form-group-sm">
                <label for="team-category-position" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize How mane Team You want to Show in a single Row ">Category Position </label>
                <div class="col-sm-6">
                    <select class="form-control" id="team-category-position" name="team-category-position">
                        <option value="left" <?php
                        if ($styledata[5] == 'left') {
                            echo 'selected';
                        }
                        ?>>Left</option>
                        <option value="center" <?php
                        if ($styledata[5] == 'center') {
                            echo 'selected';
                        }
                        ?>>Center</option>
                        <option value="right" <?php
                        if ($styledata[5] == 'right') {
                            echo 'selected';
                        }
                        ?>>Right</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="oxilab-tabs-content-div">
            <div class="head-oxi">
                Category Font
            </div>
            <div class="form-group row form-group-sm">
                <label for="category-fot-size" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Box Shadow with Color" >Font Size</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" min="0" step="1" max="100" id="category-fot-size" name="category-fot-size" value="<?php echo $styledata[7]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="category-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Background Color">Color  <span class="oxilab-pro-only">Pro Only</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control oxilab-vendor-color" id="category-color" name="category-color" value="<?php echo $styledata[9]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm"  id="category-bg-color-parent">
                <label for="category-bg-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Background Color">Background Color <span class="oxilab-pro-only">Pro Only</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control oxilab-vendor-color" data-format="rgb" data-opacity="true"  id="category-bg-color" name="category-bg-color" value="<?php echo $styledata[11]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="category-hover-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Background Color">Hover Color <span class="oxilab-pro-only">Pro Only</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control oxilab-vendor-color" id="category-hover-color" name="category-hover-color" value="<?php echo $styledata[13]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm"   id="category-hover-bg-color-parent">
                <label for="category-hover-bg-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Background Color">Hover Background  <span class="oxilab-pro-only">Pro Only</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control oxilab-vendor-color" data-format="rgb" data-opacity="true"  id="category-hover-bg-color" name="category-hover-bg-color" value="<?php echo $styledata[15]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="category-font-family" class="col-sm-6 col-form-label"  data-toggle="tooltip" data-placement="top" title="Choose Your heading Preferred font, Based on Google Font">Font Family <span class="oxilab-pro-only">Pro Only</span></label>
                <div class="col-sm-6">
                    <input class="oxilab-admin-font"  type="text" name="category-font-family" id="category-font-family" value="<?php echo $styledata[17]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="category-font-weight" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Heading Font Weight">Font Weight </label>
                <div class="col-sm-6">
                    <select class="form-control" id="category-font-weight" name="category-font-weight">
                        <option <?php
                        if ($styledata[19] == '100') {
                            echo 'selected';
                        }
                        ?> value="100">100</option>
                        <option <?php
                        if ($styledata[19] == '200') {
                            echo 'selected';
                        }
                        ?> value="200">200</option>
                        <option <?php
                        if ($styledata[19] == '300') {
                            echo 'selected';
                        }
                        ?> value="300">300</option>
                        <option <?php
                        if ($styledata[19] == '400') {
                            echo 'selected';
                        }
                        ?> value="400">400</option>
                        <option <?php
                        if ($styledata[19] == '500') {
                            echo 'selected';
                        }
                        ?> value="500">500</option>
                        <option <?php
                        if ($styledata[19] == '600') {
                            echo 'selected';
                        }
                        ?> value="600">600</option>
                        <option <?php
                        if ($styledata[19] == '700') {
                            echo 'selected';
                        }
                        ?> value="700">700</option>
                        <option <?php
                        if ($styledata[19] == '800') {
                            echo 'selected';
                        }
                        ?> value="800">800</option>
                        <option <?php
                        if ($styledata[19] == '900') {
                            echo 'selected';
                        }
                        ?> value="900">900</option>
                        <option <?php
                        if ($styledata[19] == 'normal') {
                            echo 'selected';
                        }
                        ?> value="normal">Normal</option>
                        <option <?php
                        if ($styledata[19] == 'bold') {
                            echo 'selected';
                        }
                        ?> value="bold">Bold</option>
                        <option <?php
                        if ($styledata[19] == 'lighter') {
                            echo 'selected';
                        }
                        ?> value="lighter">Lighter</option>
                        <option <?php
                        if ($styledata[19] == 'initial') {
                            echo 'selected';
                        }
                        ?> value="initial">Initial</option>
                    </select>
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="category-font-style" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Heading Font Style">Font Style</label>
                <div class="col-sm-6">
                    <select class="form-control" id="category-font-style" name="category-font-style">
                        <option <?php
                        if ($styledata[21] == 'normal') {
                            echo 'selected';
                        }
                        ?> value="normal">Normal</option>
                        <option <?php
                        if ($styledata[21] == 'italic') {
                            echo 'selected';
                        }
                        ?> value="italic">Italic</option>
                        <option <?php
                        if ($styledata[45] == 'oblique') {
                            echo 'selected';
                        }
                        ?> value="oblique">Oblique</option>
                        <option <?php
                        if ($styledata[21] == 'initial') {
                            echo 'selected';
                        }
                        ?> value="initial">Initial</option>
                        <option <?php
                        if ($styledata[21] == 'inherit') {
                            echo 'selected';
                        }
                        ?> value="inherit">Inherit</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="oxilab-tabs-content-div">
            <div class="head-oxi">
                Category Body
            </div>
            <div class="form-group row form-group-sm">
                <label for="category-padding" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Tem Distance From Another Team Step 5" >Padding</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="150" id="category-padding-top-bottom" name="category-padding-top-bottom" value="<?php echo $styledata[23]; ?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="150" id="category-padding-left-right" name="category-padding-left-right" value="<?php echo $styledata[25]; ?>">
                </div>
            </div>

            <div class="form-group row form-group-sm"   id="category-border-parent">
                <label for="category-border" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Tem Distance From Another Team Step 5" >Border Size & Type</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="150" id="category-border" name="category-border" value="<?php echo $styledata[27]; ?>">
                </div>
                <div class="col-sm-3">
                    <select class="form-control" id="category-border-type" name="category-border-type">
                        <option <?php
                        if ($styledata[29] == 'solid') {
                            echo 'selected';
                        }
                        ?> value="solid">Solid</option>
                        <option <?php
                        if ($styledata[29] == 'dotted') {
                            echo 'selected';
                        }
                        ?> value="dotted">Dotted</option>
                        <option <?php
                        if ($styledata[29] == 'dashed') {
                            echo 'selected';
                        }
                        ?> value="dashed">Dashed</option>
                        <option <?php
                        if ($styledata[29] == 'double') {
                            echo 'selected';
                        }
                        ?> value="double">Double</option>
                        <option <?php
                        if ($styledata[29] == 'groove') {
                            echo 'selected';
                        }
                        ?> value="groove">Groove</option>
                        <option <?php
                        if ($styledata[29] == 'inset') {
                            echo 'selected';
                        }
                        ?> value="inset">Inset</option>
                        <option <?php
                        if ($styledata[29] == 'outset') {
                            echo 'selected';
                        }
                        ?> value="outset">Outset</option>
                        <option <?php
                        if ($styledata[29] == 'dotted solid double dashed') {
                            echo 'selected';
                        }
                        ?> value="dotted solid double dashed">Dotted Solid Double Dashed</option>
                        <option <?php
                        if ($styledata[29] == 'dotted solid') {
                            echo 'selected';
                        }
                        ?> value="dotted solid">Dotted Solid</option>
                        <option <?php
                        if ($styledata[29] == 'solid dotted') {
                            echo 'selected';
                        }
                        ?> value="solid dotted">Solid Dotted</option>
                    </select>
                </div>
            </div>
            <div class="form-group row form-group-sm"   id="category-border-radius-parent">
                <label for="category-border-radius" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Tem Distance From Another Team Step 5" >Border Radius</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" min="0" step="1" max="150" id="category-border-radius" name="category-border-radius" value="<?php echo $styledata[31]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="category-margin" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Tem Distance From Another Team Step 5" >Margin</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="150" id="category-margin-top" name="category-margin-top" value="<?php echo $styledata[33]; ?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="150" id="category-margin-bottom" name="category-margin-bottom" value="<?php echo $styledata[35]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="category-margin-left" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Confirm Your Tem Distance From Another Team Step 5" >Distance From Top Bottom</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="150" id="category-margin-left" name="category-margin-left" value="<?php echo $styledata[37]; ?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="150" id="category-margin-right" name="category-margin-right" value="<?php echo $styledata[39]; ?>">
                </div>
            </div>

        </div>
    </div>
    <style>
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
    </style>
    <?php
}

function oxiteamshowcaseteamadmincarousel($styledata) {
    $nevextradata = explode('//', $styledata[67]);
    ?>
    <div class="oxilab-tabs-content-div-50">
        <div class="oxilab-tabs-content-div">
            <div class="head-oxi">
                General
            </div>
            <div class="form-group row">
                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize your Link Opening">Want Slider</label>
                <div class="col-sm-6">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary <?php
                        if ($styledata[41] == '') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[41] == '') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel" id="oxilab-carousel-no" autocomplete="off" value="">Normal</label>
                        <label class="btn btn-primary <?php
                        if ($styledata[41] == 'carousel') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[41] == 'carousel') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel" id="oxilab-carousel-yes" autocomplete="off" value="carousel"> Slider </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize your Link Opening">Center Mode</label>
                <div class="col-sm-6">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary <?php
                        if ($styledata[43] == 'true') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[43] == 'true') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel-center-mode" id="oxilab-carousel-center-mode-yes" autocomplete="off" value="true">True</label>
                        <label class="btn btn-primary <?php
                        if ($styledata[43] == 'false') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[43] == 'false') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel-center-mode"id="oxilab-carousel-center-mode-no" autocomplete="off" value="false"> False </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize your Link Opening">Auto Play</label>
                <div class="col-sm-6">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary <?php
                        if ($styledata[45] == 'true') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[45] == 'true') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel-autoplay" id="oxilab-carousel-autoplay-yes" autocomplete="off" value="true">True</label>
                        <label class="btn btn-primary <?php
                        if ($styledata[45] == 'false') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[45] == 'false') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel-autoplay" id="oxilab-carousel-autoplay-no" autocomplete="off" value="false"> False </label>
                    </div>
                </div>
            </div>
            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show-parent">
                <label for="oxilab-carousel-autoplay-time" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Edit Your Flip Height, Besed on Pixel" >Autoplay Time </label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" min="0" step="0.1" max="100" id="oxilab-carousel-autoplay-time" name="oxilab-carousel-autoplay-time" value="<?php echo $styledata[47]; ?>">
                </div>
            </div>
        </div>
        <div class="oxilab-tabs-content-div">
            <div class="head-oxi">
                Navigation
            </div>
            <div class="form-group row">
                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize your Link Opening">Want Navigation</label>
                <div class="col-sm-6">
                    <div class="btn-group" data-toggle="buttons">                        
                        <label class="btn btn-primary <?php
                        if ($styledata[63] == 'true') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[63] == 'true') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel-navigation" id="oxilab-carousel-navigation-yes" autocomplete="off" value="true"> True </label>
                        <label class="btn btn-primary <?php
                        if ($styledata[63] == 'false') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[63] == 'false') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel-navigation"name="oxilab-carousel-navigation-no" autocomplete="off" value="false">False</label>
                    </div>
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="oxilab-carousel-navigation-style" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Heading Font Style">Navigation Style</label>
                <div class="col-sm-6">
                    <div class="col-xs-4" style="margin-bottom: 5px;">
                        <div  <?php
                        if ($styledata[65] == 'fa-arrow-left') {
                            echo 'style="color: #E00086"';
                        }
                        ?> class="oxilab-carousel-team-nev-preview"><span class="fas fa-arrow-left"></span> <span class="fas fa-arrow-right"></span></div>
                        <input <?php
                        if ($styledata[65] == 'fa-arrow-left') {
                            echo 'checked';
                        }
                        ?> type="radio" name="oxilab-carousel-navigation-style" class="hidden oxilab-carousel-navigation-style" value='fa-arrow-left'>
                    </div>
                    <div class="col-xs-4" style="margin-bottom: 5px;">
                        <div  <?php
                        if ($styledata[65] == 'fa-angle-double-left') {
                            echo 'style="color: #E00086"';
                        }
                        ?> class="oxilab-carousel-team-nev-preview"><span class="fas fa-angle-double-left"></span> <span class="fas fa-angle-double-right"></span></div>
                        <input <?php
                        if ($styledata[65] == 'fa-angle-double-left') {
                            echo 'checked';
                        }
                        ?> type="radio" name="oxilab-carousel-navigation-style" class="hidden oxilab-carousel-navigation-style" value="fa-angle-double-left">
                    </div>
                    <div class="col-xs-4" style="margin-bottom: 5px;">
                        <div  <?php
                        if ($styledata[65] == 'fa-angle-left') {
                            echo 'style="color: #E00086"';
                        }
                        ?> class="oxilab-carousel-team-nev-preview"><span class="fas fa-angle-left"></span> <span class="fas fa-angle-right"></span></div>
                        <input <?php
                        if ($styledata[65] == 'fa-angle-left') {
                            echo 'checked';
                        }
                        ?> type="radio" name="oxilab-carousel-navigation-style" class="hidden oxilab-carousel-navigation-style" value="fa-angle-left">
                    </div>  
                    <div class="col-xs-4" style="margin-bottom: 5px;">
                        <div  <?php
                        if ($styledata[65] == 'fa-arrow-circle-left') {
                            echo 'style="color: #E00086"';
                        }
                        ?> class="oxilab-carousel-team-nev-preview"><span class="fas fa-arrow-circle-left"></span> <span class="fas fa-arrow-circle-right"></span></div>
                        <input <?php
                        if ($styledata[65] == 'fa-arrow-circle-left') {
                            echo 'checked';
                        }
                        ?> type="radio" name="oxilab-carousel-navigation-style" class="hidden oxilab-carousel-navigation-style" value="fa-arrow-circle-left">
                    </div> 
                    <div class="col-xs-4" style="margin-bottom: 5px;">
                        <div  <?php
                        if ($styledata[65] == 'fa-caret-left') {
                            echo 'style="color: #E00086"';
                        }
                        ?> class="oxilab-carousel-team-nev-preview"><span class="fas fa-caret-left"></span> <span class="fas fa-caret-right"></span></div>
                        <input <?php
                        if ($styledata[65] == 'fa-caret-left') {
                            echo 'checked';
                        }
                        ?> type="radio" name="oxilab-carousel-navigation-style" class="hidden oxilab-carousel-navigation-style" value="fa-caret-left">
                    </div>
                    <div class="col-xs-4" style="margin-bottom: 5px;">
                        <div  <?php
                        if ($styledata[65] == 'fa-caret-square-left') {
                            echo 'style="color: #E00086"';
                        }
                        ?> class="oxilab-carousel-team-nev-preview"><span class="fas fa-caret-square-left"></span> <span class="fas fa-caret-square-right"></span></div>
                        <input <?php
                        if ($styledata[65] == 'fa-caret-square-o-left') {
                            echo 'checked';
                        }
                        ?> type="radio" name="oxilab-carousel-navigation-style" class="hidden oxilab-carousel-navigation-style" value="fa-caret-square-o-left">
                    </div>
                    <div class="col-xs-4" style="margin-bottom: 5px;">
                        <div  <?php
                        if ($styledata[65] == 'fa-chevron-circle-left') {
                            echo 'style="color: #E00086"';
                        }
                        ?> class="oxilab-carousel-team-nev-preview"><span class="fas fa-chevron-circle-left"></span> <span class="fas fa-chevron-circle-right"></span></div>
                        <input <?php
                        if ($styledata[65] == 'fa-chevron-circle-left') {
                            echo 'checked';
                        }
                        ?> type="radio" name="oxilab-carousel-navigation-style" class="hidden oxilab-carousel-navigation-style" value="fa-chevron-circle-left">
                    </div>
                    <div class="col-xs-4" style="margin-bottom: 5px;">
                        <div  <?php
                        if ($styledata[65] == 'fa-chevron-left') {
                            echo 'style="color: #E00086"';
                        }
                        ?> class="oxilab-carousel-team-nev-preview"><span class="fas fa-chevron-left"></span> <span class="fas fa-chevron-right" ></span></div>
                        <input <?php
                        if ($styledata[65] == 'fa-chevron-left') {
                            echo 'checked';
                        }
                        ?> type="radio" name="oxilab-carousel-navigation-style" class="hidden oxilab-carousel-navigation-style" value="fa-chevron-left">
                    </div>
                </div>
                <style>
                    .oxilab-carousel-team-nev-preview{
                        cursor: pointer;
                        color: #B8B8B8;
                        font-size: 16px;
                    }                   
                    .oxilab-carousel-team-nev-preview:hover{
                        color: #E00086;
                    }
                </style>
            </div>
            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                <label for="oxilab-carousel-navigation-size" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Edit Your Flip Height, Besed on Pixel" >Font Size </label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" min="0" step="1" max="100" id="oxilab-carousel-navigation-size" name="oxilab-carousel-navigation-size" value="<?php echo $nevextradata[1]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="oxilab-carousel-navigation-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Background Color">Color <span class="oxilab-pro-only">Pro Only</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control oxilab-vendor-color" data-format="rgb" data-opacity="true"  id="oxilab-carousel-navigation-color" name="oxilab-carousel-navigation-color" value="<?php echo $nevextradata[3]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="oxilab-carousel-navigation-active-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Active Color">Active Color <span class="oxilab-pro-only">Pro Only</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control oxilab-vendor-color" data-format="rgb" data-opacity="true"  id="oxilab-carousel-navigation-active-color" name="oxilab-carousel-navigation-active-color" value="<?php echo $nevextradata[5]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                <label for="oxilab-carousel-navigation-position" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Edit Your Flip Height, Besed on Pixel" >Position </label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="100" id="oxilab-carousel-navigation-position-top-bottom" name="oxilab-carousel-navigation-position-top-bottom" value="<?php echo $nevextradata[7]; ?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="100" id="oxilab-carousel-navigation-position-left-right" name="oxilab-carousel-navigation-position-left-right" value="<?php echo $nevextradata[9]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize your Link Opening">Showing Type</label>
                <div class="col-sm-6">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary <?php
                        if ($nevextradata[11] == '') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($nevextradata[11] == '') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel-navigation-showing-type" id="oxilab-carousel-navigation-showing-type-yes" autocomplete="off" value="">Always</label>
                        <label class="btn btn-primary <?php
                        if ($nevextradata[11] == ':hover') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($nevextradata[11] == ':hover') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel-navigation-showing-type" id="oxilab-carousel-navigation-showing-type-no" autocomplete="off" value=":hover"> On Hover </label>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="oxilab-tabs-content-div-50">
        <div class="oxilab-tabs-content-div">
            <div class="head-oxi">
                Pagination
            </div>
            <div class="form-group row">
                <label class="col-sm-6 control-label"  data-toggle="tooltip" data-placement="top" title="Customize your Link Opening">Want Pagination</label>
                <div class="col-sm-6">
                    <div class="btn-group" data-toggle="buttons">                        
                        <label class="btn btn-primary <?php
                        if ($styledata[49] == 'true') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[49] == 'true') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel-pagination"  id="oxilab-carousel-pagination-yes" autocomplete="off" value="true"> True </label>
                        <label class="btn btn-primary <?php
                        if ($styledata[49] == 'false') {
                            echo 'active';
                        }
                        ?>"> <input type="radio" <?php
                                   if ($styledata[49] == 'false') {
                                       echo 'checked';
                                   }
                                   ?> name="oxilab-carousel-pagination" id="oxilab-carousel-pagination-no" autocomplete="off" value="false">False</label>
                    </div>
                </div>
            </div>

            <div class="form-group row form-group-sm">
                <label for="oxilab-carousel-pagination-position" class="col-sm-6 col-form-label" data-toggle="tooltip" data-placement="top" title="Customize Your Heading Font Style">Position</label>
                <div class="col-sm-6">
                    <select class="form-control" id="oxilab-carousel-pagination-position" name="oxilab-carousel-pagination-position">
                        <option <?php
                        if ($styledata[51] == 'top left') {
                            echo 'selected';
                        }
                        ?> value="top left">Top Left</option>
                        <option <?php
                        if ($styledata[51] == 'top center') {
                            echo 'selected';
                        }
                        ?> value="top center">Top Middle</option>
                        <option <?php
                        if ($styledata[51] == 'top right') {
                            echo 'selected';
                        }
                        ?> value="top right">Top Right</option>
                        <option <?php
                        if ($styledata[51] == 'bottom left') {
                            echo 'selected';
                        }
                        ?> value="bottom left">Bottom Left</option>
                        <option <?php
                        if ($styledata[51] == 'bottom center') {
                            echo 'selected';
                        }
                        ?> value="bottom center">Bottom Middle</option>
                        <option <?php
                        if ($styledata[51] == 'bottom right') {
                            echo 'selected';
                        }
                        ?> value="bottom right">Bottom Right</option>

                    </select>
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="oxilab-carousel-pagination-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Background Color">Color <span class="oxilab-pro-only">Pro Only</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control oxilab-vendor-color" data-format="rgb" data-opacity="true"  id="oxilab-carousel-pagination-color" name="oxilab-carousel-pagination-color" value="<?php echo $styledata[53]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm">
                <label for="oxilab-carousel-pagination-active-color" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Active Color">Active Color <span class="oxilab-pro-only">Pro Only</span></label>
                <div class="col-sm-6">
                    <input type="text" class="form-control oxilab-vendor-color" data-format="rgb" data-opacity="true"  id="oxilab-carousel-pagination-active-color" name="oxilab-carousel-pagination-active-color" value="<?php echo $styledata[55]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                <label for="oxilab-carousel-body-size" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Edit Your Flip Height, Besed on Pixel" >Body Size </label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="100" id="oxilab-carousel-body-width" name="oxilab-carousel-body-width" value="<?php echo $styledata[57]; ?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="100" id="oxilab-carousel-body-height" name="oxilab-carousel-body-height" value="<?php echo $nevextradata[13]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                <label for="oxilab-carousel-active-body-size" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Edit Your Flip Height, Besed on Pixel" >Active Body Size </label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" min="0" step="0.1" max="100" id="oxilab-carousel-active-body-size" name="oxilab-carousel-active-body-size" value="<?php echo $styledata[59]; ?>">
                </div>
            </div>
            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                <label for="oxilab-carousel-active-body-padding" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Edit Your Flip Height, Besed on Pixel" >Paddings</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="100" id="oxilab-carousel-active-body-padding-top" name="oxilab-carousel-active-body-padding-top" value="<?php echo $styledata[61]; ?>">
                </div>
                <div class="col-sm-3">
                    <input type="number" class="form-control" min="0" step="1" max="100" id="oxilab-carousel-active-body-padding-left" name="oxilab-carousel-active-body-padding-left" value="<?php echo $nevextradata[15]; ?>">
                </div>
            </div>  
            <div class="form-group row form-group-sm" id="carousel-autoplay-time-show">
                <label for="oxilab-carousel-pagination-border-radius" class="col-sm-6 control-label" data-toggle="tooltip" data-placement="top" title="Edit Your Flip Height, Besed on Pixel" >Border Radius </label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" min="0" step="1" max="100" id="oxilab-carousel-pagination-border-radius" name="oxilab-carousel-pagination-border-radius" value="<?php echo $nevextradata[17]; ?>">
                </div>
            </div>
        </div>
    </div>  
    <?php
}

function oxi_team_social_icon_selector($icondata, $styleid, $iconstyle, $iconcolor, $iconbackground, $iconradius, $iconhoverradius) {
    $class = explode(' ', $value['class']);
    echo '<style>';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-1  [class^="fa"]{
color: ' . $iconcolor . ';
}';
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-1 .' . $class . ':hover{
color: ' . $value['bgcolor'] . ';
}';
    }
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-2 .' . $class . '{
color: ' . $value['bgcolor'] . ';
}';
    }
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-3  [class^="fa"]{
color: ' . $iconcolor . ';
background-color: ' . $iconbackground . ';
border-radius: ' . $iconradius . 'px;
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-3 [class^="fa"]:hover{   
border-radius: ' . $iconhoverradius . 'px;
}';
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-3 .' . $class . ':hover{
color: ' . $value['color'] . ';
background-color: ' . $value['bgcolor'] . ';
}';
    }

    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-4 .' . $class . '{
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



    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-5  [class^="fa"]{   
color: ' . $iconcolor . ';
border: 1px solid ' . $iconcolor . ';    
border-radius: ' . $iconradius . 'px;   
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-5 [class^="fa"]:hover{   
border-radius: ' . $iconhoverradius . 'px;
}';
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-5 .' . $class . ':hover{
color: ' . $value['bgcolor'] . ';
border: 1px solid ' . $value['bgcolor'] . '; 
}';
    }

    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-6 .' . $class . '{
color: ' . $value['bgcolor'] . ';
border: 1px solid ' . $value['bgcolor'] . '; 
}';
    }
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-6  [class^="fa"]{   
border-radius: ' . $iconradius . 'px;
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-6  [class^="fa"]:hover{   
border-radius: ' . $iconhoverradius . 'px;
}';

    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-7  [class^="fa"]{  
color: ' . $iconcolor . ';
border: 2px solid transparent;
border-right-color: ' . $iconcolor . ';
border-bottom-color: ' . $iconcolor . ';
border-radius: ' . $iconradius . 'px;
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-7  [class^="fa"]:hover{      
border-radius: ' . $iconhoverradius . 'px;
}';
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-7 .' . $class . ':hover{
color: ' . $value['bgcolor'] . ';
border-right-color:  transparent;
border-bottom-color:  transparent;
border-top-color: ' . $value['bgcolor'] . ';
border-left-color: ' . $value['bgcolor'] . ';
}';
    }
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-8 .' . $class . '{
color: ' . $value['bgcolor'] . ';
border: 2px solid transparent;
border-right-color: ' . $value['bgcolor'] . ';
border-bottom-color: ' . $value['bgcolor'] . ';
}';

        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-8 .' . $class . ':hover{
color: ' . $value['bgcolor'] . ';
border: 2px solid transparent;
border-right-color:  transparent;
border-bottom-color:  transparent;
border-left-color: ' . $value['bgcolor'] . ';
border-top-color: ' . $value['bgcolor'] . ';
}';
    }
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-8  [class^="fa"]{
border-radius: ' . $iconradius . 'px;
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-8  [class^="fa"]:hover{      
border-radius: ' . $iconhoverradius . 'px;
}';

    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-9  [class^="fa"]{  
color: ' . $iconcolor . ';
border-right: 2px solid  ' . $iconcolor . ';
border-radius: ' . $iconradius . 'px;
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-9  [class^="fa"]:hover{      
border-radius: ' . $iconhoverradius . 'px;
}';
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-9 .' . $class . ':hover{
color: ' . $value['bgcolor'] . ';
border-right: 2px solid  ' . $value['bgcolor'] . ';
}';
    }

    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-10 .' . $class . '{
color: ' . $value['bgcolor'] . ';
border-right: 2px solid ' . $value['bgcolor'] . ';
}';
    }
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-10  [class^="fa"]{
border-radius: ' . $iconradius . 'px;
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-10  [class^="fa"]:hover{      
border-radius: ' . $iconhoverradius . 'px;
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-11  [class^="fa"]{  
color: ' . $iconcolor . ';
border: 1px solid  ' . $iconcolor . ';
border-radius: ' . $iconradius . 'px;
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-11  [class^="fa"]:hover{      
border-radius: ' . $iconhoverradius . 'px;
}';
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-11 .' . $class . ':hover{
color: ' . $value['color'] . ';
background-color: ' . $value['bgcolor'] . ';
border: 1px solid  ' . $value['bgcolor'] . ';
}';
    }
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-12 .' . $class . '{
color: ' . $value['bgcolor'] . ';
border: 1px solid ' . $value['bgcolor'] . ';
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-12 .' . $class . ':hover{
color: ' . $value['color'] . ';
background-color: ' . $value['bgcolor'] . ';  
border: 1px solid ' . $value['bgcolor'] . ';
}';
    }
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-12  [class^="fa"]{
border-radius: ' . $iconradius . 'px;
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-12  [class^="fa"]:hover{      
border-radius: ' . $iconhoverradius . 'px;
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-13  [class^="fa"]{  
color: ' . $iconcolor . ';
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-13  [class^="fa"]:hover{      
border-radius: ' . $iconhoverradius . 'px;
}';
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-13 .' . $class . ':hover{
color: ' . $value['color'] . ';
background-color: ' . $value['bgcolor'] . ';
}';
    }
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-14 .' . $class . '{
color: ' . $value['bgcolor'] . ';
}';
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-14 .' . $class . ':hover{
color: ' . $value['color'] . ';
background-color: ' . $value['bgcolor'] . ';  
}';
    }
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-14  [class^="fa"]:hover{      
border-radius: ' . $iconhoverradius . 'px;
}';

    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-15  [class^="fa"]{  
color: ' . $iconcolor . ';
background-color: ' . $iconbackground . ';
border: 1px solid ' . $iconcolor . ';
border-radius: ' . $iconradius . 'px;
            
}';
    echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-15  [class^="fa"]:hover{      
border-radius: ' . $iconhoverradius . 'px;
}';
    foreach ($icondata as $value) {
        echo '.oxi-team-show-' . $styleid . ' .oxi-member-icons-style-15 .' . $class . ':hover{
color: ' . $value['color'] . ';
background-color: ' . $value['bgcolor'] . ';
border: 1px solid ' . $value['bgcolor'] . ';
}';
    }
    echo '</style>';
}
