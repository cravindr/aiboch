<?php
/* Smarty version 3.1.30, created on 2016-10-21 09:14:52
  from "D:\wamp\www\1\aiboc\aiboc_admin\templates\modal_forgotpassword.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5809c06c7533e4_94005908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a3a3262c7f866c9405b865da88b99bcee9c2a41' => 
    array (
      0 => 'D:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\modal_forgotpassword.tpl',
      1 => 1475946779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5809c06c7533e4_94005908 (Smarty_Internal_Template $_smarty_tpl) {
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
               <form>
                   <div class="form-group">
                       <label>EmailID:</label>
                       <input type="text" id="email" name="email" class="form-control" placeholder="EmailID">
                   </div>
                   <div class="form-group">
                       <label>Mobile Number:</label>
                       <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile Number">
                   </div>
                   <div class="form-group">
                      <button class="btn btn-success pull-right">Submit</button>
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
