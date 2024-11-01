jQuery(function () {
    jQuery("#oxilab-admin-drag-submit").submit(function (e) {
        var list_sortable = jQuery('#oxilab-admin-drag-drop').sortable('toArray').toString();
        var security = jQuery('#oxi_team_show_ajax_data').val();
        jQuery.post({
            url: oxi_team_show_admin_ajax.ajaxurl,
            beforeSend: function () {
                jQuery("#oxilab-admin-drag-saving").slideDown();
                jQuery("#oxilab-admin-drag-drop").slideUp();
                jQuery("#oxilab-admin-drag-close").slideUp();
                jQuery('#oxilab-admin-drag-submit').val('Saving...');
            },
            data: {
                action: 'oxi_team_show_admin_ajax_data',
                list_order: list_sortable,
                security: security
            },
            success: function () {
                setTimeout(function () {
                     location.reload();
                }, 500);
            }
        });
        e.preventDefault();
        return false;
    });
});
  