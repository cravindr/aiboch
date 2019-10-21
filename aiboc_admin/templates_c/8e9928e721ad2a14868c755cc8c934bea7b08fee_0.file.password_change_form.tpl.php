<?php
/* Smarty version 3.1.30, created on 2016-12-16 10:49:19
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\password_change_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5853b89fb7a0d9_14603009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e9928e721ad2a14868c755cc8c934bea7b08fee' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\password_change_form.tpl',
      1 => 1481877799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5853b89fb7a0d9_14603009 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>User Password Change</h3>
</ol>

<div class="col-lg-12 well">
    <div class="col-lg-offset-4 col-lg-4">
        <form id="validate" method="post" action="change_password_save.php">
            <div class="form-group">
                <label>Current Password</label>
                <input type="password" name="curpass" id="curpass" class="form-control" placeholder="Enter Current Password">
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="newpass" id="newpass" class="form-control" placeholder="Enter New Password">
            </div>
            <div class="form-group">
                <label>Conform Password</label>
                <input type="password" name="conpass" id="conpass" class="form-control" placeholder="Enter Conform Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary pull-right">Change</button>
            </div>
        </form>
    </div>
</div><?php }
}
