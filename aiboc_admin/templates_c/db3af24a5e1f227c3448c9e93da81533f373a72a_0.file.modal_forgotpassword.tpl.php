<?php
/* Smarty version 3.1.30, created on 2016-10-11 04:09:22
  from "G:\wamp\www\projects\aiboc\aiboc_admin\templates\modal_forgotpassword.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fc49d2112c65_84345020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db3af24a5e1f227c3448c9e93da81533f373a72a' => 
    array (
      0 => 'G:\\wamp\\www\\projects\\aiboc\\aiboc_admin\\templates\\modal_forgotpassword.tpl',
      1 => 1475946779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fc49d2112c65_84345020 (Smarty_Internal_Template $_smarty_tpl) {
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
