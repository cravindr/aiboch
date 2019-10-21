<?php
/* Smarty version 3.1.30, created on 2019-10-21 10:00:35
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/modal_forgotpassword.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad65a3577272_12544777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bcba39497a7076d0dfdb203e44da0a809cb7bbe' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/modal_forgotpassword.tpl',
      1 => 1479899652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad65a3577272_12544777 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Modal -->
<div id="modalforgotpass" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Forget Password reset form</h4></center>
            </div>
            <div class="modal-body">
                <div id="forgotresult"></div>
               <form method="post" action="forgotpassword.php">
                   <div class="form-group">
                       <label>Email Address OR Mobile Number:</label>
                       <input type="text" id="email" name="email" class="form-control" placeholder="Email Address OR Mobile Number">
                   </div>
                   <div class="form-group">
                      <center><button class="btn btn-success">Submit</button></center>
                   </div>
               </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<style>
    .modal-title{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style><?php }
}
