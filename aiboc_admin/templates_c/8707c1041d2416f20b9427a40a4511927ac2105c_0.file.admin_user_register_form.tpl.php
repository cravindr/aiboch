<?php
/* Smarty version 3.1.30, created on 2016-12-14 10:55:52
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\admin_user_register_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58511728c5e0c1_52159766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8707c1041d2416f20b9427a40a4511927ac2105c' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\admin_user_register_form.tpl',
      1 => 1481708766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58511728c5e0c1_52159766 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Create User</h3>
</ol>
<div class="well">
    <form id="validate" method="post" action="admin_add_user_save.php">
        <div class="row">

            <div class="col-lg-offset-4 col-lg-4">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="uname" id="uname"  class="form-control validate[required,ajax[ajaxAdminAddUserNameCheck]]" placeholder="Enter Your Username">
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class="form-control validate[required]" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label>Email Address:</label>
                    <input type="text" name="email" id="email" class="form-control validate[required,custom[email],ajax[ajaxAdminAddUserEmailCheck]]" placeholder="Enter Your Email Address">
                </div>
                <div class="form-group">
                    <label>Mobile Number:</label>
                    <input type="text" name="mobile" id="mobile" class="form-control  validate[required,ajax[ajaxAdminAddUserMobileCheck]]" placeholder="Enter Your Mobile Number">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="pass" id="pass" class="form-control validate[required]" placeholder="Enter Your password">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Conform Password:</label>
                            <input type="password" name="cpass" id="cpass" class="form-control validate[required,equals[pass]]" placeholder="Enter Conform password">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Role:</label>
                   <select name="role" id="role" class="form-control validate[required] selectpicker" title="Select User Role"></select>
                </div>
                <div class="form-group">
                    <label>Address:</label>
                   <textarea name="address" rows="3" id="address" class="form-control" placeholder="Enter Your Address"></textarea>
                </div>
                <div class="form-group">
                    <label>Place:</label>
                    <input type="text" name="place" id="place" class="form-control" placeholder="Enter Your Place">
                </div>
                <div class="form-group">
                    <button class="btn btn-info pull-right">Add User</button>
                </div>
            </div>
        </div>
    </form>

</div><?php }
}
