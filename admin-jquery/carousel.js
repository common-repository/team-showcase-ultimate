var styleid = jQuery('#oxi-team-styleid').val();
jQuery("#oxilab-carousel-no").on("change", function () {
    var data = "<strong>Slider Deactive</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-yes").on("change", function () {
    var data = "<strong>Slider</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-center-mode-yes").on("change", function () {
    var data = "<strong>Center Mode</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-center-mode-no").on("change", function () {
    var data = "<strong>Center Mode</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-autoplay-yes").on("change", function () {
    var data = "<strong>Auto Play</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-autoplay-no").on("change", function () {
    var data = "<strong>Auto Play</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-autoplay-time").on("change", function () {
    var data = "<strong>Autoplay Time</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});

jQuery("#oxilab-carousel-navigation-no").on("change", function () {
    var data = "<strong>Active Navigation</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-navigation-yes").on("change", function () {
    var data = "<strong>Active Navigation</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery(".oxilab-carousel-team-nev-preview").click(function (e) {
    var data = "<strong>Navimation Style</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});

jQuery("#oxilab-carousel-navigation-size").on("change", function () {
    var intvalue = parseInt(jQuery(this).val(), 10);
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-nav [class*='owl-']{font-size: " + jQuery(this).val() + "px; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-nav [class*='owl-'] [class*='fa']{font-size: " + jQuery(this).val() + "px; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-nav [class*='owl-']{margin-top: -" + intvalue / 2 + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-navigation-color").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-nav [class*='owl-']{color: " + jQuery(this).val() + "; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-nav [class*='owl-'] [class*='fa']{color: " + jQuery(this).val() + "; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-navigation-active-color").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-nav [class*='owl-']:hover{color: " + jQuery(this).val() + "; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-nav [class*='owl-'] [class*='fa']:hover{color: " + jQuery(this).val() + "; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-navigation-position-top-bottom").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-nav {transform: translateY(-" + jQuery(this).val() + "%);  top: " + jQuery(this).val() + "%; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-navigation-position-left-right").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-nav [class*='owl-']{left: " + jQuery(this).val() + "%; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-nav .owl-next{right: " + jQuery(this).val() + "%; left: auto; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-navigation-showing-type-no").on("change", function () {
    var data = "<strong>Showing Type</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-navigation-showing-type-yes").on("change", function () {
    var data = "<strong>Showing Type</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-pagination-no").on("change", function () {
    var data = "<strong>Pagination</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-pagination-yes").on("change", function () {
    var data = "<strong>Pagination</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});

jQuery("#oxilab-carousel-pagination-position").on("change", function () {
    var data = "<strong>Position</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});

jQuery("#oxilab-carousel-pagination-color").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-dots .owl-dot span{background: " + jQuery(this).val() + "; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-pagination-active-color").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-dots .owl-dot.active span{background: " + jQuery(this).val() + "; } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-dots .owl-dot:hover span{background: " + jQuery(this).val() + "; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-body-width").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-dots .owl-dot span{width: " + jQuery(this).val() + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-body-height").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-dots .owl-dot span{height: " + jQuery(this).val() + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-active-body-size").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-dots .owl-dot.active span{ transform: scale(" + jQuery(this).val() + "); } </style>").appendTo("#oxilab-preview-data");
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-dots .owl-dot:hover span{ transform: scale(" + jQuery(this).val() + "); } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-active-body-padding-top").on("change", function () {
    var data = "<strong>Margin Top Bottom</strong> will works after saved data";
    jQuery.bootstrapGrowl(data, {});
});
jQuery("#oxilab-carousel-active-body-padding-left").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-dots .owl-dot span{ margin: 0px " + jQuery(this).val() + "px; } </style>").appendTo("#oxilab-preview-data");
});
jQuery("#oxilab-carousel-pagination-border-radius").on("change", function () {
    jQuery("<style type='text/css'> .oxi-team-carousel-" + styleid + " .owl-dots .owl-dot span{ border-radius: " + jQuery(this).val() + "px; } </style>").appendTo("#oxilab-preview-data");
});



/* Rearrange Data File*/

jQuery('#oxilab-admin-drag-id').on('click', function () {
    jQuery("#oxilab-admin-drag-data").modal("show");
    jQuery("#oxilab-admin-drag-saving").slideUp();
    jQuery("#oxilab-admin-drag-drop").slideDown();
    jQuery("#oxilab-admin-drag-close").slideDown();
    jQuery('#oxilab-admin-drag-submit').val('Submit');
});


setTimeout(function () {
    jQuery('#oxilab-admin-drag-drop').sortable({
        axis: 'y',
        opacity: 0.7
    });
}, 1500);