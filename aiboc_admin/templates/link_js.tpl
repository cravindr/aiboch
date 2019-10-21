<!-- jQuery -->
{*<script src="vendars/jquery/jquery-1.12.4.min.js"></script>*}
<script src="vendars/typeahead/jquery-2.1.4.min.js"></script>
<script src="vendars/typeahead/typeahead.js"></script>
{*<script src="vendars/typeahead/typeahead.bundle.js"></script>*}
<!-- jQuery -->
<!-- Bootstrap -->
<script src="vendars/bootstrap-3.3.6/js/bootstrap.min.js"></script>
<!-- Bootstrap -->
<!-- Custom Theme Scripts -->
<script src="vendars/build/js/custom.min.js"></script>
<!-- Custom Theme Scripts -->



<script src="../bootstrap-fileinput-master/js/fileinput.min.js" type="text/javascript"></script>

<script>
    $(function () {
        $.get('php/profile_image_view.php',function (result) {
            var object = $.parseJSON(result);
            //alert(object);
            if(object == 'profile_images/')
            {
                $('#profileimage').attr('src','images/avatar.png');
                $('#topimg').attr('src','images/avatar.png');
            }
            else if(object == 'profile_images/1.')
            {
                $('#profileimage').attr('src','images/avatar.png');
                $('#topimg').attr('src','images/avatar.png');
            }
            else
            {
                $('#profileimage').attr('src',object);
                 $('#topimg').attr('src',object);
            }
        });
    });

    function imageload() {
        var html = '<div class="container">';
                        html += '<div class="row well">';
                            html += '<div class="col-md-offset-4 col-md-6">';
                                html += '<form method="post" action="profile_image_save.php" enctype="multipart/form-data">';
                                            html += '<div class="form-group">';
                                            html += '<label>Profile Image</label>'
                                            html += '<input type="file" id="profileimg" name="profileimg">';
                                            html += '</div>';
                                            html += '<div class="form-group">';
                                            html += '<button class="btn btn-success btn-lg pull-right">Change</button>';
                                            html += '</div>';
                                html += '</form>';
                            html += '</div>';
                        html += '</div>';
         return   html += '</div>';
    }


    $('#profileimage,#profileimage1').click(function () {

        $.get('php/profile_image_view.php',function (result) {
            var object = $.parseJSON(result);
            $("#profileimg").fileinput({
                showUpload: false,
                showCaption: false,
                initialPreview: object,
                initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
                initialPreviewFileType: 'image',
                browseClass: "btn btn-primary btn-md",
                allowedFileExtensions : ['jpg', 'png','gif']
            });
        });
        var val = imageload();
        $('#uploadmsg').html(val);
        $('#profileuploadmodal').modal('show');

    });


</script>