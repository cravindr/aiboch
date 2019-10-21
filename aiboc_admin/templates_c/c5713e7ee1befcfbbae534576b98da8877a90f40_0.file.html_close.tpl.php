<?php
/* Smarty version 3.1.30, created on 2016-12-19 13:20:39
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\html_close.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5857d0971be9c9_85034846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5713e7ee1befcfbbae534576b98da8877a90f40' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\html_close.tpl',
      1 => 1482150017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5857d0971be9c9_85034846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modal -->
<div id="profileuploadmodal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body" id="uploadmsg">
              <div class="container">
                    <div class="row well">
                        <div class="col-md-offset-4 col-md-6">
                            <form method="post" action="profile_image_save.php" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <input type="file" id="profileimg" name="profileimg">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success btn-lg pull-right">Change</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</html>
<?php }
}
