
jQuery(document).ready(function ($) {
    var custom_uploader;
    jQuery('#oxi-team-profile-image-button').click(function (e) {
        e.preventDefault();
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: true
        });
        custom_uploader.on('select', function () {
            console.log(custom_uploader.state().get('selection').toJSON());
            attachment = custom_uploader.state().get('selection').first().toJSON();
            jQuery('#oxi-team-profile-image').val(attachment.url);
                       
            jQuery("#oxilab-add-new-data").css({
                "overflow-x": "hidden",
                "overflow-y": "auto"

            });
            jQuery("body").css({
                "overflow" : "hidden"
            });
          
        });
        custom_uploader.open();
    });
});
