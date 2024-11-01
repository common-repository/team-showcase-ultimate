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
jQuery("#team-width").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-team-show-body{max-width: " + jQuery("#team-width").val() + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-height").on("change", function () {
    var idvalue = parseInt(jQuery('#team-height').val(), 10);
    var idvalue2 = parseInt(jQuery('#team-width').val(), 10);
    var datawidth = idvalue / idvalue2 * 100;
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .oxi-team-pic-size:after{padding-bottom: " + datawidth + "%; } </style>").appendTo("#oxilab-preview-data");
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
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + "{padding: " + jQuery("#image-margin-top").val() + "px " + jQuery("#image-margin-bottom").val() + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#image-margin-bottom").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + "{padding: " + jQuery("#image-margin-top").val() + "px " + jQuery("#image-margin-bottom").val() + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-top-border-radius").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-photo{border-radius:  " + jQuery("#team-top-border-radius").val() + "px  " + jQuery("#team-top-border-radius").val() + "px " + jQuery("#team-bottom-border-radius").val() + "px " + jQuery("#team-bottom-border-radius").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-bottom-border-radius").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-photo{border-radius:  " + jQuery("#team-top-border-radius").val() + "px  " + jQuery("#team-top-border-radius").val() + "px " + jQuery("#team-bottom-border-radius").val() + "px " + jQuery("#team-bottom-border-radius").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-animation-duration").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-animation-" + styleid + "{animation-duration:" + jQuery("#team-animation-duration").val() + "s; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-shadow-color").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-photo{box-shadow: " + jQuery("#team-box-shadow-length-horizontal").val() + "px " + jQuery("#team-box-shadow-length-vertical").val() + "px " + jQuery("#team-box-shadow-radius-blur").val() + "px " + jQuery("#team-box-shadow-radius-spread").val() + "px " + jQuery("#team-box-shadow-color").val() + "; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-shadow-length-horizontal").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-photo{box-shadow: " + jQuery("#team-box-shadow-length-horizontal").val() + "px " + jQuery("#team-box-shadow-length-vertical").val() + "px " + jQuery("#team-box-shadow-radius-blur").val() + "px " + jQuery("#team-box-shadow-radius-spread").val() + "px " + jQuery("#team-box-shadow-color").val() + "; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-shadow-length-vertical").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-photo{box-shadow: " + jQuery("#team-box-shadow-length-horizontal").val() + "px " + jQuery("#team-box-shadow-length-vertical").val() + "px " + jQuery("#team-box-shadow-radius-blur").val() + "px " + jQuery("#team-box-shadow-radius-spread").val() + "px " + jQuery("#team-box-shadow-color").val() + "; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-shadow-radius-blur").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-photo{box-shadow: " + jQuery("#team-box-shadow-length-horizontal").val() + "px " + jQuery("#team-box-shadow-length-vertical").val() + "px " + jQuery("#team-box-shadow-radius-blur").val() + "px " + jQuery("#team-box-shadow-radius-spread").val() + "px " + jQuery("#team-box-shadow-color").val() + "; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-shadow-radius-spread").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-photo{box-shadow: " + jQuery("#team-box-shadow-length-horizontal").val() + "px " + jQuery("#team-box-shadow-length-vertical").val() + "px " + jQuery("#team-box-shadow-radius-blur").val() + "px " + jQuery("#team-box-shadow-radius-spread").val() + "px " + jQuery("#team-box-shadow-color").val() + "; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-bg-color").on("change", function () {
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .team-content {background-color:  " + jQuery("#team-box-bg-color").val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .team-content:before {background-color:  " + jQuery("#team-box-bg-color").val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .team-content:after {background-color:  " + jQuery("#team-box-bg-color").val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-bg-color-padding-top-width").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name:before{width: " + jQuery("#team-box-bg-color-padding-top-width").val() + "px; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name:after{width: " + jQuery("#team-box-bg-color-padding-top-width").val() + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#team-box-bg-color-padding-top").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name:before{background: " + jQuery("#team-box-bg-color-padding-top").val() + ";} </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name:after{background: " + jQuery("#team-box-bg-color-padding-top").val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-general-padding-top-bottom").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .team-content{padding: " + jQuery("#name-general-padding-top-bottom").val() + "px " + jQuery("#name-general-padding-left-right").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-general-padding-left-right").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .team-content{padding: " + jQuery("#name-general-padding-top-bottom").val() + "px " + jQuery("#name-general-padding-left-right").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-font-size").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{font-size: " + jQuery("#name-font-size").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-color").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{color: " + jQuery("#name-color").val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#heading-font-family').change(function () {
    var font = jQuery(this).val().replace(/\+/g, ' ');
    font = font.split(':');
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .member-name{font-family:" + font[0] + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-font-weight").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{font-weight: " + jQuery("#name-font-weight").val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-font-style").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{font-style: " + jQuery("#name-font-style").val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-margin-top").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{margin-top: " + jQuery("#name-margin-top").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#name-margin-bottom").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-name{margin-bottom: " + jQuery("#name-margin-bottom").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#position-font-size").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-role{font-size: " + jQuery("#position-font-size").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#position-color").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-role{color: " + jQuery("#position-color").val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery('#position-font-family').change(function () {
    var font = jQuery(this).val().replace(/\+/g, ' ');
    font = font.split(':');
    jQuery("<style type='text/css'>.oxi-team-show-" + styleid + " .member-role{font-family:" + font[0] + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#position-font-weight").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-role{font-weight: " + jQuery("#position-font-weight").val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#position-font-style").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-role{font-style: " + jQuery("#position-font-style").val() + ";} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#position-margin-top").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-role{margin-top: " + jQuery("#position-margin-top").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#position-margin-bottom").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-role{margin-bottom: " + jQuery("#position-margin-bottom").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});
jQuery("#icon-font-size").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-show-" + styleid + " .member-icons i{font-size: " + jQuery("#icon-font-size").val() + "px;} </style>").appendTo("#oxilab-preview-data");
});