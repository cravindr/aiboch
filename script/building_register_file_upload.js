/**
 * Created by oom on 10/31/2016.
 */

$(document).ready(function () {
    $("#buildimgs").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        allowedFileExtensions : ['jpg', 'png','gif']
    });
});

