<?php
/* Smarty version 3.1.30, created on 2016-10-08 18:48:23
  from "G:\wamp\www\aiboc\aiboc_admin\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57f92357680ec9_76110708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '379f012785fa17cc7a09157ba769f61e28da7ecb' => 
    array (
      0 => 'G:\\wamp\\www\\aiboc\\aiboc_admin\\templates\\login.tpl',
      1 => 1475945298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57f92357680ec9_76110708 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            <center><h1 class="font_me">Admin Login</h1></center>
            <div class="x_panel">
               <center> <img src="images/Login.png" class="img-thambnail" width="130"></center><br>
                <form>
                    <div class="form-group">
                        <label>EmailID or Mobile Number:</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="EmailID or Mobile Number">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" name="password" id="password" class="form-control" placeholder="Password">
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
