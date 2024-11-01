var styleid = jQuery('#oxi-team-styleid').val();
jQuery("#team-category-no").on("change", function () {
    var data = "<strong>Category</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#team-category-yes").on("change", function () {
    var data = "<strong>Category</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
function oxiteamcatdatafunction() {
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-1') {
        jQuery("#category-bg-color-parent").slideUp();
        jQuery("#category-hover-bg-color-parent").slideDown();
        jQuery("#category-border-parent").slideUp();
        jQuery("#category-border-radius-parent").slideDown();
    }
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-2') {
        jQuery("#category-bg-color-parent").slideUp();
        jQuery("#category-hover-bg-color-parent").slideUp();
        jQuery("#category-border-parent").slideDown();
        jQuery("#category-border-radius-parent").slideDown();
    }
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-3') {
        jQuery("#category-bg-color-parent").slideDown();
        jQuery("#category-hover-bg-color-parent").slideDown();
        jQuery("#category-border-parent").slideUp();
        jQuery("#category-border-radius-parent").slideDown();
    }
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-4') {
        jQuery("#category-bg-color-parent").slideUp();
        jQuery("#category-hover-bg-color-parent").slideUp();
        jQuery("#category-border-parent").slideDown();
        jQuery("#category-border-radius-parent").slideDown();
    }
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-5') {
        jQuery("#category-bg-color-parent").slideUp();
        jQuery("#category-hover-bg-color-parent").slideUp();
        jQuery("#category-border-parent").slideDown();
        jQuery("#category-border-radius-parent").slideDown();
    }
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-6') {
        jQuery("#category-bg-color-parent").slideUp();
        jQuery("#category-hover-bg-color-parent").slideUp();
        jQuery("#category-border-parent").slideDown();
        jQuery("#category-border-radius-parent").slideDown();
    }
}
oxiteamcatdatafunction();
jQuery("#team-category-position").on("change", function () {
    jQuery("<style type='text/css'>.oxi-team-cat-style-1.oxi-team-cat-style-body-" + styleid + "{text-align:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-2.oxi-team-cat-style-body-" + styleid + "{text-align:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-3.oxi-team-cat-style-body-" + styleid + "{text-align:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4.oxi-team-cat-style-body-" + styleid + "{text-align:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-5.oxi-team-cat-style-body-" + styleid + "{text-align:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-6.oxi-team-cat-style-body-" + styleid + "{text-align:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-category-style").on("change", function () {
    oxiteamcatdatafunction();
    jQuery(".oxi-team-cat-style-body-" + styleid + "").removeClass("oxi-team-cat-style-1");
    jQuery(".oxi-team-cat-style-body-" + styleid + "").removeClass("oxi-team-cat-style-2");
    jQuery(".oxi-team-cat-style-body-" + styleid + "").removeClass("oxi-team-cat-style-3");
    jQuery(".oxi-team-cat-style-body-" + styleid + "").removeClass("oxi-team-cat-style-4");
    jQuery(".oxi-team-cat-style-body-" + styleid + "").removeClass("oxi-team-cat-style-5");
    jQuery(".oxi-team-cat-style-body-" + styleid + "").removeClass("oxi-team-cat-style-6");
    jQuery(".oxi-team-cat-style-body-" + styleid + "").addClass(jQuery("#team-category-style").val());
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-1') {
        jQuery("#category-color").attr('value', '#ac00b8');
        jQuery("#category-hover-color").attr('value', '#fff');
        jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + ":hover{color:#FFF;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + ".active{color:#FFF;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#category-hover-bg-color").attr('value', 'rgba(172, 0, 184, 1)');
        jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + ":hover{background-color:rgba(172, 0, 184, 1);} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + ".active{background-color:rgba(172, 0, 184, 1);} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-2') {
        jQuery("#category-color").attr('value', '#ac00b8');
        jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{color:#ac00b8;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{border-color:#ac00b8;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#category-hover-color").attr('value', '#0088cc');
        jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + ":hover{color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + ".active{color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + ":hover{border-color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + ".active{border-color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-3') {
        jQuery("#category-color").attr('value', '#fff');
        jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{color:#fff;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#category-bg-color").attr('value', 'rgba(0, 76, 163, 1)');
        jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{background-color:rgba(0, 76, 163, 1);} </style>").appendTo("#oxilab-preview-data");
        jQuery("#category-hover-color").attr('value', '#fff');
        jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + ":hover{color:#FFF;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + ".active{color:#FFF;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#category-hover-bg-color").attr('value', 'rgba(172, 0, 184, 1)');
        jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + ":hover{background-color:rgba(172, 0, 184, 1);} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + ".active{background-color:rgba(172, 0, 184, 1);} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-4') {
        jQuery("#category-color").attr('value', '#ac00b8');
        jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{color:#ac00b8;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{border-right-color:#ac00b8;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{border-bottom-color:#ac00b8;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#category-hover-color").attr('value', '#0088cc');
        jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ":hover{color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ".active{color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ":hover{border-top-color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ".active{border-top-color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ":hover{border-left-color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ".active{border-left-color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-5') {
        jQuery("#category-color").attr('value', '#ac00b8');
        jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{color:#ac00b8;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{border-bottom-color:#ac00b8;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#category-hover-color").attr('value', '#0088cc');
        jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + ":hover{color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + ".active{color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + ":hover{border-top-color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + ".active{border-top-color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
    }
    if (jQuery("#team-category-style").val() === 'oxi-team-cat-style-6') {
        jQuery("#category-color").attr('value', '#ac00b8');
        jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{color:#ac00b8;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{border-top-color:#ac00b8;} </style>").appendTo("#oxilab-preview-data");
        jQuery("#category-hover-color").attr('value', '#0088cc');
        jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + ":hover{color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + ".active{color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + ":hover{border-bottom-color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
        jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + ".active{border-bottom-color:#0088cc;} </style>").appendTo("#oxilab-preview-data");
    }
});

jQuery("#category-fot-size").on("change", function () {
    jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + "{font-size:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{font-size:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{font-size:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{font-size:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{font-size:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{font-size:" + jQuery(this).val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#category-color").on("change", function () {
    jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + "{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{border-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{border-right-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{border-bottom-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{border-bottom-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{border-top-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#category-bg-color").on("change", function () {
    jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{background-color:" + jQuery('#category-bg-color').val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#category-hover-color").on("change", function () {
    jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + ":hover{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + ":hover{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + ":hover{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ":hover{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + ":hover{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + ":hover{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + ".active{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + ".active{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + ".active{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ".active{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + ".active{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + ".active{color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + ":hover{border-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + ".active{border-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ":hover{border-top-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ".active{border-top-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ":hover{border-left-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ".active{border-left-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + ":hover{border-top-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + ".active{border-top-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + ":hover{border-bottom-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + ".active{border-bottom-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#category-hover-bg-color").on("change", function () {
    jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + ":hover{background-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + ".active{background-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + ":hover{background-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + ".active{background-color:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#category-font-family').change(function () {
    var font = jQuery(this).val().replace(/\+/g, ' ');
    font = font.split(':');
    jQuery("<style type='text/css'>.oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + "{ font-family:" + font[0] + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{ font-family:" + font[0] + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{ font-family:" + font[0] + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{ font-family:" + font[0] + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{ font-family:" + font[0] + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{ font-family:" + font[0] + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#category-font-weight').change(function () {
    jQuery("<style type='text/css'> .oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + "{font-weight:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{font-weight:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{font-weight:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{font-weight:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{font-weight:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{font-weight:" + jQuery(this).val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#category-padding-top-bottom').change(function () {
    jQuery("<style type='text/css'> .oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#category-padding-left-right').change(function () {
    jQuery("<style type='text/css'> .oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{padding: " + jQuery('#category-padding-top-bottom').val() + "px " + jQuery('#category-padding-left-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#category-border-radius').change(function () {
    jQuery("<style type='text/css'> .oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + "{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + ":hover{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + ":hover{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + ":hover{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + ":hover{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + ":hover{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + ":hover{border-radius: " + jQuery(this).val() + "px } </style>").appendTo("#oxilab-preview-data");
});

jQuery('#category-margin-top').change(function () {
    jQuery("<style type='text/css'> .oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#category-margin-bottom').change(function () {
    jQuery("<style type='text/css'> .oxi-team-cat-style-1 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-3 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{margin: " + jQuery('#category-margin-top').val() + "px " + jQuery('#category-margin-bottom').val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#category-margin-left').change(function () {
    jQuery("<style type='text/css'> .oxi-team-cat-style-1.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-2.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-3.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#category-margin-right').change(function () {
    jQuery("<style type='text/css'> .oxi-team-cat-style-1.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-2.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-3.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6.oxi-team-cat-style-body-" + styleid + "{margin: " + jQuery('#category-margin-left').val() + "px " + jQuery('#category-margin-right').val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#category-border').change(function () {
    jQuery("<style type='text/css'> .oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{border: " + jQuery('#category-border').val() + "px " + jQuery('#category-border-type').val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{border: " + jQuery('#category-border').val() + "px " + jQuery('#category-border-type').val() + "; border-left-color: transparent; border-top-color: transparent;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{border: " + jQuery('#category-border').val() + "px " + jQuery('#category-border-type').val() + ";border-right-color: transparent;  border-left-color: transparent; border-top-color: transparent;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{border: " + jQuery('#category-border').val() + "px " + jQuery('#category-border-type').val() + ";border-right-color: transparent; border-bottom-color: transparent; border-left-color: transparent;} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#category-border-type').change(function () {
    jQuery("<style type='text/css'> .oxi-team-cat-style-2 .oxi-team-cat-id-" + styleid + "{border: " + jQuery('#category-border').val() + "px " + jQuery('#category-border-type').val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-4 .oxi-team-cat-id-" + styleid + "{border: " + jQuery('#category-border').val() + "px " + jQuery('#category-border-type').val() + "; border-left-color: transparent; border-top-color: transparent;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-5 .oxi-team-cat-id-" + styleid + "{border: " + jQuery('#category-border').val() + "px " + jQuery('#category-border-type').val() + ";border-right-color: transparent;  border-left-color: transparent; border-top-color: transparent;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-cat-style-6 .oxi-team-cat-id-" + styleid + "{border: " + jQuery('#category-border').val() + "px " + jQuery('#category-border-type').val() + ";border-right-color: transparent; border-bottom-color: transparent; border-left-color: transparent;} </style>").appendTo("#oxilab-preview-data");
});
