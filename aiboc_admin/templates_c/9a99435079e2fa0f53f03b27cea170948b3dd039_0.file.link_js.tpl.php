<?php
/* Smarty version 3.1.30, created on 2016-12-30 07:34:38
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\link_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5865fffe25b217_77434299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a99435079e2fa0f53f03b27cea170948b3dd039' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\link_js.tpl',
      1 => 1483014941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5865fffe25b217_77434299 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- jQuery -->

<?php echo '<script'; ?>
 src="vendars/typeahead/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendars/typeahead/typeahead.js"><?php echo '</script'; ?>
>

<!-- jQuery -->
<!-- Bootstrap -->
<?php echo '<script'; ?>
 src="vendars/bootstrap-3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap -->
<!-- Custom Theme Scripts -->
<?php echo '<script'; ?>
 src="vendars/build/js/custom.min.js"><?php echo '</script'; ?>
>
<!-- Custom Theme Scripts -->



<?php echo '<script'; ?>
 src="../bootstrap-fileinput-master/js/fileinput.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
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


<?php echo '</script'; ?>
><?php }
}
