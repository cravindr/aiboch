<?php
/* Smarty version 3.1.30, created on 2016-11-17 09:11:04
  from "E:\wamp\www\1\aiboc\templates\owner_password_change_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582d661860f492_40643625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c7aab88299c0691314bc898178c1fa3e89795a9' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\owner_password_change_form.tpl',
      1 => 1478087633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582d661860f492_40643625 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-lg-12 well">
        <h2 id="titleregbuild">Change Password</h2>
        <div class="col-lg-offset-4 col-lg-4 panel panel-default panel-body">
            <form id="passwordform" method="post" action="owner_password_update.php">
                <div class="form-group">
                    <label>Current Password:</label>
                    <input type="password" name="curpass" id="curpass" class="form-control validate[required]" placeholder="Current Password">
                </div>
                <div class="form-group">
                    <label>New Password:</label>
                    <input type="password" name="newpass" id="newpass" class="form-control validate[required]" placeholder="New Password">
                </div>
                <div class="form-group">
                    <label>Conform Password:</label>
                    <input type="password" name="conpass" id="conpass" class="form-control validate[required,equals[newpass]]" placeholder="Conform Password">
                </div>
                <div class="form-group">
                    <label></label>
                    <button class="btn btn-primary form-control">Change</button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
