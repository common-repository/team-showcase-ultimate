var styleid = jQuery('#oxi-team-styleid').val();
jQuery('#icon-color').parents('.form-group.row.form-group-sm').attr('id', 'icon-color-js');
jQuery('#icon-background-color').parents('.form-group.row.form-group-sm').attr('id', 'icon-background-color-js');
jQuery('#icon-radius').parents('.form-group.row.form-group-sm').attr('id', 'icon-radius-js');
jQuery('#icon-hover-radius').parents('.form-group.row.form-group-sm').attr('id', 'icon-hover-radius-js');
function oximembericondatafunction() {
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-1') {
        jQuery("#icon-color-js").slideDown();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideUp();
        jQuery("#icon-hover-radius-js").slideUp();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-2') {
        jQuery("#icon-color-js").slideUp();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideUp();
        jQuery("#icon-hover-radius-js").slideUp();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-3') {
        jQuery("#icon-color-js").slideDown();
        jQuery("#icon-background-color-js").slideDown();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-4') {
        jQuery("#icon-color-js").slideUp();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-5') {
        jQuery("#icon-color-js").slideDown();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-6') {
        jQuery("#icon-color-js").slideUp();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-7') {
        jQuery("#icon-color-js").slideDown();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-8') {
        jQuery("#icon-color-js").slideUp();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-9') {
        jQuery("#icon-color-js").slideDown();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-10') {
        jQuery("#icon-color-js").slideUp();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-11') {
        jQuery("#icon-color-js").slideDown();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-12') {
        jQuery("#icon-color-js").slideUp();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-13') {
        jQuery("#icon-color-js").slideDown();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideUp();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-14') {
        jQuery("#icon-color-js").slideUp();
        jQuery("#icon-background-color-js").slideUp();
        jQuery("#icon-radius-js").slideUp();
        jQuery("#icon-hover-radius-js").slideDown();
    } else if (jQuery("#icon-style").val() === 'oxi-member-icons-style-15') {
        jQuery("#icon-color-js").slideDown();
        jQuery("#icon-background-color-js").slideDown();
        jQuery("#icon-radius-js").slideDown();
        jQuery("#icon-hover-radius-js").slideDown();
    }
}
oximembericondatafunction();
jQuery("#icon-style").on("change", function () {
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-1");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-2");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-3");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-4");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-5");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-6");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-7");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-8");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-9");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-10");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-11");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-12");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-13");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-14");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-style-15");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").addClass(jQuery('#icon-style').val());
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-1') {
        jQuery("#icon-color").attr('value', '#9500c2');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-1 [class^='fa']{color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-3') {
        jQuery("#icon-color").attr('value', '#fff');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-3 [class^='fa']{color:#FFF;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-background-color").attr('value', '#9500c2');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-3 [class^='fa']{background-color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-3 [class^='fa']{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-3 [class^='fa']:hover{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-4') {
        jQuery("#icon-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-4 [class^='fa']{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-4 [class^='fa']:hover{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-5') {
        jQuery("#icon-color").attr('value', '#9500c2');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5 [class^='fa']{color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5 [class^='fa']{border:1px solid #9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5 [class^='fa']{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5 [class^='fa']:hover{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-6') {
        jQuery("#icon-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-6 [class^='fa']{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-6 [class^='fa']:hover{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-5') {
        jQuery("#icon-color").attr('value', '#9500c2');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5 [class^='fa']{color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5 [class^='fa']{border:1px solid #9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5 [class^='fa']{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5 [class^='fa']:hover{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-6') {
        jQuery("#icon-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-6 [class^='fa']{border-radius:0px ;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-6 [class^='fa']:hover{border-radius:0px ;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-7') {
        jQuery("#icon-color").attr('value', '#9500c2');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-7 [class^='fa']{color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-7 [class^='fa']{border-right-color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-7 [class^='fa']{border-bottom-color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-radius").attr('value', '50');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-7 [class^='fa']{border-radius:50px ;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '50');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-7 [class^='fa']:hover{border-radius:50px ;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-8') {
        jQuery("#icon-radius").attr('value', '50');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-8 [class^='fa']{border-radius:50px;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '50');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-8 [class^='fa']:hover{border-radius:50px;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-9') {
        jQuery("#icon-color").attr('value', '#9500c2');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-9 [class^='fa']{color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-9 [class^='fa']{border-right: 2px solid #9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-radius").attr('value', '50');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-9 [class^='fa']{border-radius:50px ;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '50');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-9 [class^='fa']:hover{border-radius:50px ;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-10') {
        jQuery("#icon-radius").attr('value', '50');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-10 [class^='fa']{border-radius:50px;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '50');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-10 [class^='fa']:hover{border-radius:50px;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-11') {
        jQuery("#icon-color").attr('value', '#9500c2');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-11 [class^='fa']{color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-11 [class^='fa']{border: 1px solid #9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-11 [class^='fa']{border-radius:0px ;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-11 [class^='fa']:hover{border-radius:0px ;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-12') {
        jQuery("#icon-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-12 [class^='fa']{border-radius:5px ;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-12 [class^='fa']:hover{border-radius:0px ;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-13') {
        jQuery("#icon-color").attr('value', '#9500c2');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-13 [class^='fa']{color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-13 [class^='fa']:hover{border-radius:0px ;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-14') {
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-14 [class^='fa']:hover{border-radius:0px ;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#icon-style").val() === 'oxi-member-icons-style-15') {
        jQuery("#icon-color").attr('value', '#fff');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-15 [class^='fa']{color:#FFF;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-15 [class^='fa']{border:1px solid #FFF;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-background-color").attr('value', '#9500c2');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-15 [class^='fa']{background-color:#9500c2;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-15 [class^='fa']{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#icon-hover-radius").attr('value', '0');
        jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-15 [class^='fa']:hover{border-radius:0px;} </style>").appendTo("#oxilab-preview-data");
    }
    oximembericondatafunction();
});

jQuery("#icon-color").on("change", function () {
    var idvalue = jQuery('#icon-color').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-1 [class^='fa']{color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-3 [class^='fa']{color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5 [class^='fa']{color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-7 [class^='fa']{color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-9 [class^='fa']{color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-11 [class^='fa']{color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-13 [class^='fa']{color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-15 [class^='fa']{color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-background-color").on("change", function () {
    var idvalue = jQuery('#icon-background-color').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-3 [class^='fa']{ background-color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " ..oxi-member-icons-style-15 [class^='fa']{ background-color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});

jQuery("#icon-font-size").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icons [class^='fa']{ font-size:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");

});
jQuery("#icon-font-size").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icons [class^='fa']{ font-size:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");

});
jQuery("#icon-width").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icons [class^='fa']{ height:" + jQuery(this).val() + "px;width:" + jQuery(this).val() + "px;line-height:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-radius").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-3  [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-4  [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5  [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-6  [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-7  [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-8  [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-9  [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-10  [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-11 [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-13  [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-15  [class^='fa']{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-hover-radius").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-3  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-4  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-5  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-6  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-7  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-8  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-9  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-10  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-11 [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-13  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-14  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-style-15  [class^='fa']:hover{ border-radius:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
});