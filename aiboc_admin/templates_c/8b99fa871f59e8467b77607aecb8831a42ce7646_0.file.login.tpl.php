<?php
/* Smarty version 3.1.30, created on 2016-10-11 04:09:21
  from "G:\wamp\www\projects\aiboc\aiboc_admin\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57fc49d1eefdf6_43996015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b99fa871f59e8467b77607aecb8831a42ce7646' => 
    array (
      0 => 'G:\\wamp\\www\\projects\\aiboc\\aiboc_admin\\templates\\login.tpl',
      1 => 1476100508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57fc49d1eefdf6_43996015 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-offset-4 col-lg-4">
            <center><h1 class="font_me">Admin Login</h1></center>
            <div class="x_panel">
               <center> <img src="images/Login.png" class="img-thambnail" width="130"></center><br>
                <?php echo $_smarty_tpl->tpl_vars['resulttxt']->value;?>

                <form method="post" action="login_check.php">
                    <div class="form-group">
                        <label>EmailID or Mobile Number:</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="EmailID or Mobile Number">
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
