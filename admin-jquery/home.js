jQuery(".oxi-team-style-clone").on("click", function () {
    var dataid = jQuery(this).attr("dataid");
    jQuery("#oxi-team-id").val(dataid);
});
jQuery('.oxi-team-delete').submit(function () {
    var status = confirm("Do you Want to Delete?");
    if (status == false) {
        return false;
    } else {
        return true;
    }
});

