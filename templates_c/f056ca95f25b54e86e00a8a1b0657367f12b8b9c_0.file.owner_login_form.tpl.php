<?php
/* Smarty version 3.1.30, created on 2016-11-15 11:52:39
  from "E:\wamp\www\1\aiboc\templates\owner_login_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582ae8f7602049_80910057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f056ca95f25b54e86e00a8a1b0657367f12b8b9c' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\owner_login_form.tpl',
      1 => 1477120373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582ae8f7602049_80910057 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="col-lg-offset-4 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-body">
                <center><img src="aiboc_admin/images/Login.png" class="img-thambnail" width="130"></center><br>
                <form id="loginform" method="post" action="login_check.php  ">
                    <div class="form-group">
                        <label>Mobile Or Email:</label>
                        <input type="text" name="lusername" id="lusername" class="form-control validate[required]" placeholder="Enter Your Username">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="lpass" id="lpass" class="form-control validate[required]" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success form-control">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
