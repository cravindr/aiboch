<?php
/* Smarty version 3.1.30, created on 2016-11-23 12:59:56
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583584bcc433c9_37280060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2382cfbeff9e0f8e76333fc2ef12eb549bb6aca' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\login.tpl',
      1 => 1479902392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583584bcc433c9_37280060 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            <center><h1 class="font_me">Admin Login</h1></center>
            <div class="x_panel">
               <center> <img src="images/Login.png" class="img-thambnail" width="130"></center><br>
                <div id="resulttxt"></div>
                <form method="post" action="login_check.php">
                    <div class="form-group">
                        <label>Username or EmailID or Mobile Number:</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username or EmailID or Mobile Number">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label></label>
                        <label></label>
                        <button type="submit"  class="btn btn-success form-control">Login</button>
                    </div>
                    <div class="form-group">
                        <center><a href="#" data-toggle="modal" data-target="#modalforgotpass" id="link">Forgot your password</a></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .col-lg-4{
        margin-top: 6%;
    }
    .font_me{
        font-family: Impact, Charcoal, sans-serif;
        color: whitesmoke;
    }
    #link{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 15px;
    }
</style><?php }
}
