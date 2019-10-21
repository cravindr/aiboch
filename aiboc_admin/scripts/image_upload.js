/**
 * Created by Andhu on 12/9/2016.
 */

$(document).ready(function () {
    $("#ourimges").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-sm",
        allowedFileExtensions : ['jpg', 'png','gif']
    });
});