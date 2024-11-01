var styleid = jQuery('#oxi-team-styleid').val();
jQuery(".oxilab-tabs-ul li:first").addClass("active");
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
    jQuery("#oxi-team-name").val('');
    jQuery("#oxi-team-designation").val('');
    jQuery("#oxi-team-profile-image").val('');
    jQuery("#oxi-team-socail-First").val('');
    jQuery("#oxi-team-socail-First-url").val('');
    jQuery("#oxi-team-socail-Second").val('');
    jQuery("#oxi-team-socail-Second-url").val('');
    jQuery("#oxi-team-socail-Third").val('');
    jQuery("#oxi-team-socail-Third-url").val('');
    jQuery("#oxi-team-socail-Forth").val('');
    jQuery("#oxi-team-socail-Forth-url").val('');
    jQuery("#item-id").val('');
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
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-team-show{background-color: " + idvalue + "; } </style>").appendTo("#oxilab-preview-data");
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
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{font-style:" + jQuery('#name-font-style').val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-margin-top").on("change", function () {
    var idvalue = jQuery('#name-margin-top').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{ margin-top:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-padding-bottom").on("change", function () {
    var idvalue = jQuery('#name-padding-bottom').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{ padding-bottom:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#bottom-width").on("change", function () {
    var idvalue = jQuery('#bottom-width').val() + 'px';
    jQuery("<style type='text/css'> oxi-team-show-" + styleid + " .member-name:before{ width:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#bottom-width").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-11 .member-name:before{ width:" + jQuery('#bottom-width').val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#bottom-height").on("change", function () {
    var idvalue = jQuery('#bottom-height').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name:before{ height:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#bottom-color").on("change", function () {
    var idvalue = jQuery('#bottom-color').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name:before{ background:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
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
jQuery("#icon-font-size").on("change", function () {
    var idvalue = jQuery('#icon-font-size').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icon [class^='fa']{ font-size:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-color").on("change", function () {
    var idvalue = jQuery('#icon-color').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icon [class^='fa']{ color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-background-color").on("change", function () {
    var idvalue = jQuery('#icon-background-color').val();
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icons{ background-color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .member-icons:before{ border-right-color:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-team-right .member-icons:before{ border-left-color::" + idvalue + ";border-right-color: transparent;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-width").on("change", function () {
    var idvalue = jQuery('#icon-width').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icon [class^='fa']{ width:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icons{ width:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-padding-top-bottom").on("change", function () {
    var idvalue = jQuery('#icon-padding-top-bottom').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icon [class^='fa']{ padding-top:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icon [class^='fa']{ padding-bottom:" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-arrow").on("change", function () {
    var idvalue = jQuery('#icon-arrow').val() + 'px';
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icons{ left:-" + idvalue + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icons:before{ left:-" + idvalue + ";bottom: -" + idvalue + "; border: " + idvalue + " solid transparent;border-right-color: " + jQuery('#icon-background-color').val() + "; } < /style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-team-right .member-icons{ right:-" + idvalue + "; left: auto;} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-team-right .member-icons:before{ right: -" + idvalue + "px;left: auto;   border-left-color: " + jQuery('#icon-background-color').val() + "; border-right-color: transparent;} </style>").appendTo("#oxilab-preview-data");
});