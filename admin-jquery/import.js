jQuery("#oxi-team-style-active").click(function () {
    var dataid = jQuery(this).attr("oxi-data");
    jQuery("#oxi-team-import").val(dataid);
    jQuery("form#oxi-team-import-data").submit();
});