var styleid = jQuery('#oxi-team-styleid').val();
jQuery(".oxilab-tabs-content-tabs:first").addClass("active");
jQuery(".oxilab-tabs-ul li").click(function () {
    jQuery(".oxilab-tabs-ul li").removeClass("active");
    jQuery(this).toggleClass("active");
    jQuery(".oxilab-tabs-content-tabs").removeClass("active");
    var activeTab = jQuery(this).attr("ref");
    jQuery(activeTab).addClass("active");
});
jQuery('[data-toggle="tooltip"]').tooltip();
jQuery('#oxilab-admin-add-new-item').on('click', function () {
    jQuery("#oxilab-add-new-data").modal("show");
    jQuery("#oxi-team-name").val(null);
    jQuery("#oxi-team-designation").val(null);
    jQuery("#oxi-team-profile-image").val(null);
    jQuery("#oxi-team-socail-First").val(null);
    jQuery("#oxi-team-socail-First-url").val(null);
    jQuery("#oxi-team-socail-Second").val(null);
    jQuery("#oxi-team-socail-Second-url").val(null);
    jQuery("#oxi-team-socail-Third").val(null);
    jQuery("#oxi-team-socail-Third-url").val(null);
    jQuery("#oxi-team-socail-Forth").val(null);
    jQuery("#oxi-team-socail-Forth-url").val(null);
    jQuery("#item-id").val(null);
});
jQuery('#oxilab-team-category').multiselect({
    enableFiltering: true
});
jQuery("#oxilab-preview-data-background").on("change", function () {
    var idvalue = jQuery('#oxilab-preview-data-background').val();
    jQuery("<style type='text/css'> #oxilab-preview-data{ background-color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-width").on("change", function () {
    var idvalue = jQuery('#team-width').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-team-show-body{max-width: " + idvalue + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-height").on("change", function () {
    var idvalue = parseInt(jQuery('#team-height').val(), 10);
    var idvalue2 = parseInt(jQuery('#team-width').val(), 10);
    var datawidth = idvalue / idvalue2 * 100;
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-team-pic-size:after{ padding-bottom:" + datawidth + "%;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-bg-color").on("change", function () {
    var idvalue = jQuery('#team-box-bg-color').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .team-content{background-color: " + idvalue + "; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-item").on("change", function () {
    var idvalue = jQuery('#team-item').val();
    jQuery(".oxi-team-show-" + styleid + "").removeClass("oxi-team-show-col-1");
    jQuery(".oxi-team-show-" + styleid + "").removeClass("oxi-team-show-col-2");
    jQuery(".oxi-team-show-" + styleid + "").removeClass("oxi-team-show-col-3");
    jQuery(".oxi-team-show-" + styleid + "").removeClass("oxi-team-show-col-4");
    jQuery(".oxi-team-show-" + styleid + "").removeClass("oxi-team-show-col-5");
    jQuery(".oxi-team-show-" + styleid + "").removeClass("oxi-team-show-col-6");
    jQuery(".oxi-team-show-" + styleid + "").addClass(idvalue);
});
jQuery("#team-icon-position").on("change", function () {
    var idvalue = jQuery('#team-icon-position').val();
    jQuery(".oxi-team-show").removeClass("oxi-team-center");
    jQuery(".oxi-team-show").removeClass("oxi-team-right");
    jQuery(".oxi-team-show").addClass(idvalue);
});
jQuery("#image-margin-top").on("change", function () {
    var idvalue = jQuery('#image-margin-top').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + "{padding-top: " + idvalue + "px; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + "{padding-bottom: " + idvalue + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#image-margin-bottom").on("change", function () {
    var idvalue = jQuery('#image-margin-bottom').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + "{padding-left: " + idvalue + "px; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + "{padding-right: " + idvalue + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-shadow-color").on("change", function () {
    var idvalue = jQuery('#team-box-shadow-length-horizontal').val() + 'px ' + jQuery('#team-box-shadow-length-vertical').val() + 'px ' + jQuery('#team-box-shadow-radius-blur').val() + 'px ' + jQuery('#team-box-shadow-radius-spread').val() + 'px ' + jQuery('#team-box-shadow-color').val();
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .oxi-team-show{ box-shadow:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-shadow-length-horizontal").on("change", function () {
    var idvalue = jQuery('#team-box-shadow-length-horizontal').val() + 'px ' + jQuery('#team-box-shadow-length-vertical').val() + 'px ' + jQuery('#team-box-shadow-radius-blur').val() + 'px ' + jQuery('#team-box-shadow-radius-spread').val() + 'px ' + jQuery('#team-box-shadow-color').val();
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .oxi-team-show{ box-shadow:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-shadow-length-vertical").on("change", function () {
    var idvalue = jQuery('#team-box-shadow-length-horizontal').val() + 'px ' + jQuery('#team-box-shadow-length-vertical').val() + 'px ' + jQuery('#team-box-shadow-radius-blur').val() + 'px ' + jQuery('#team-box-shadow-radius-spread').val() + 'px ' + jQuery('#team-box-shadow-color').val();
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .oxi-team-show{ box-shadow:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-shadow-radius-blur").on("change", function () {
    var idvalue = jQuery('#team-box-shadow-length-horizontal').val() + 'px ' + jQuery('#team-box-shadow-length-vertical').val() + 'px ' + jQuery('#team-box-shadow-radius-blur').val() + 'px ' + jQuery('#team-box-shadow-radius-spread').val() + 'px ' + jQuery('#team-box-shadow-color').val();
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .oxi-team-show{ box-shadow:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-shadow-radius-spread").on("change", function () {
    var idvalue = jQuery('#team-box-shadow-length-horizontal').val() + 'px ' + jQuery('#team-box-shadow-length-vertical').val() + 'px ' + jQuery('#team-box-shadow-radius-blur').val() + 'px ' + jQuery('#team-box-shadow-radius-spread').val() + 'px ' + jQuery('#team-box-shadow-color').val();
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .oxi-team-show{ box-shadow:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});

jQuery("#name-general-padding-top-bottom").on("change", function () {
    var idvalue = jQuery('#name-general-padding-top-bottom').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .team-content{ padding-top:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-general-padding-left-right").on("change", function () {
    var idvalue = jQuery('#name-general-padding-left-right').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .team-content{ padding-right:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .team-content{ padding-left:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});

jQuery("#name-font-size").on("change", function () {
    var idvalue = jQuery('#name-font-size').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{ font-size:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-color").on("change", function () {
    var idvalue = jQuery('#name-color').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#heading-font-family').change(function () {
    var font = jQuery(this).val().replace(/\+/g, ' ');
    font = font.split(':');
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .member-name{ font-family:" + font[0] + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-font-weight").on("change", function () {
    var idvalue = jQuery('#name-font-weight').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{font-weight:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-font-style").on("change", function () {
    var idvalue = jQuery('#name-font-styles').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{font-style:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-margin-top").on("change", function () {
    var idvalue = jQuery('#name-margin-top').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{ margin-top:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-margin-bottom").on("change", function () {
    var idvalue = jQuery('#name-margin-bottom').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{ margin-bottom:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});

jQuery("#position-font-size").on("change", function () {
    var idvalue = jQuery('#position-font-size').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " span.member-role{ font-size:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#position-color").on("change", function () {
    var idvalue = jQuery('#position-color').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " span.member-role{ color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#position-font-family').change(function () {
    var font = jQuery(this).val().replace(/\+/g, ' ');
    font = font.split(':');
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " span.member-role{ font-family:" + font[0] + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#position-font-weight").on("change", function () {
    var idvalue = jQuery('#position-font-weight').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " span.member-role{font-weight:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#position-font-style").on("change", function () {
    var idvalue = jQuery('#position-font-style').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " span.member-role{font-style:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#position-margin-bottom").on("change", function () {
    var idvalue = jQuery('#position-margin-bottom').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " span.member-role{ margin-bottom:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-style").on("change", function () {
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-background");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-border");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").removeClass("oxi-member-icons-background-border");
    jQuery(".oxi-team-show-" + styleid + " .member-icons").addClass(jQuery('#icon-style').val());
});
jQuery("#icon-font-size").on("change", function () {
    var idvalue = jQuery('#icon-font-size').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icon i{ font-size:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-color").on("change", function () {
    var idvalue = jQuery('#icon-color').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons .member-icon i{ color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-background .member-icon i{ color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-border .member-icon i{ color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-border .member-icon i{ border-color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-background-border .member-icon i{ color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");

});
jQuery("#icon-background-color").on("change", function () {
    var idvalue = jQuery('#icon-background-color').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-background .member-icon i{ background-color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-background-border .member-icon i{ background-color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");

});
jQuery("#icon-width").on("change", function () {
    var idvalue = jQuery('#icon-width').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icon i{ width:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icon i{ height:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icon i{ line-height:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-padding-top-bottom").on("change", function () {
    var idvalue = jQuery('#icon-padding-top-bottom').val() + 'px';
    jQuery("<style type='text/css'>  .oxi-team-show-" + styleid + ":hover .member-icons{ padding-top:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-padding-left-right").on("change", function () {
    var idvalue = jQuery('#icon-padding-left-right').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + ":hover .member-icons{ padding-bottom:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-radius").on("change", function () {
    var idvalue = jQuery('#icon-radius').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-background i { border-radius:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-background-border i{ border-radius:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-member-icons-border i{ border-radius:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-hover-radius").on("change", function () {
    var idvalue = jQuery('#icon-hover-radius').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icon i:hover{ border-radius:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-distance").on("change", function () {
    var idvalue = jQuery('#icon-distance').val() + 'px';
    var idvalue02 = (parseInt(jQuery('#icon-distance').val()) / 2) + 'px';
    jQuery("<style type='text/css'>  .oxi-team-show-" + styleid + " .member-icon i{margin-left: 0; margin-right: " + idvalue + "; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>  .oxi-team-show-" + styleid + " .oxi-team-right .member-icon i{margin-right: 0; margin-left: " + idvalue + "; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>  .oxi-team-show-" + styleid + " .oxi-team-center .member-icon i{margin-right: " + idvalue02 + "; margin-left: " + idvalue02 + "; } </style>").appendTo("#oxilab-preview-data");

});
jQuery("#team-top-border-radius").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-team-show{ border-radius:" + jQuery('#team-top-border-radius').val() + "px " + jQuery('#team-top-border-radius').val() + "px " + jQuery('#team-bottom-border-radius').val() + "px " + jQuery('#team-bottom-border-radius').val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-bottom-border-radius").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-team-show{ border-radius:" + jQuery('#team-top-border-radius').val() + "px " + jQuery('#team-top-border-radius').val() + "px " + jQuery('#team-bottom-border-radius').val() + "px " + jQuery('#team-bottom-border-radius').val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#content-top-border-radius").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .team-content{ border-radius:" + jQuery('#content-top-border-radius').val() + "px " + jQuery('#content-top-border-radius').val() + "px  0 0;} </style>").appendTo("#oxilab-preview-data");
});