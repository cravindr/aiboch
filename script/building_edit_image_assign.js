/**
 * Created by oom on 11/4/2016.
 */

$(function () {
    $.get( "php/building_edit_image_get_db.php", function( your_return_data ) {

        $("#editimagefile").fileinput({
            showUpload: false,
            showCaption: false,
            overwriteInitial: true,
            initialPreview: $.parseJSON(your_return_data),
            initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
            initialPreviewFileType: 'image', // image is the default and can be overridden in config below
            browseClass: "btn btn-primary btn-lg",
            allowedFileExtensions : ['jpg', 'png','gif']
        });
    });
});


