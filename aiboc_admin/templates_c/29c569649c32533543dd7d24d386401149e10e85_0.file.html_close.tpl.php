<?php
/* Smarty version 3.1.30, created on 2019-10-21 10:00:35
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/html_close.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad65a3578b06_21444187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29c569649c32533543dd7d24d386401149e10e85' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/html_close.tpl',
      1 => 1482150016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad65a3578b06_21444187 (Smarty_Internal_Template $_smarty_tpl) {
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
