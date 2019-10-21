<?php
/* Smarty version 3.1.30, created on 2016-11-15 13:16:59
  from "E:\wamp\www\1\aiboc\templates\owner_top_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582afcbb3e9321_41060425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46d2d6bd3d8caf495b58ba8884aa90ac2548d93c' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\owner_top_menu.tpl',
      1 => 1479212117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582afcbb3e9321_41060425 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="header">
    <div class="col-xs-4">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt=""/></a>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 pull-right header_right">
        <span class="menu"></span>
        <div class="top-menu">
            <ul>
                <li><a class="active scroll" href="index.php"><i class="fa fa-home"> </i>Home</a></li>
                <li><a data-toggle="dropdown" id="about"><i class="fa fa-star"> </i> About</a></li>
                <li class="dropdown">
                    <a href="dashboard.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-thumbs-up"></i>Building Owner Registration<span class="caret"></span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-thumbs-up"></i>Bankers Registration<span class="caret"></span></a>
                    <ul class="dropdown-menu pull-left col-lg-12">
                        <li><a href="tenant_sigin.php"><i class="fa fa-user-circle fa-lg pull-left"></i>Login</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="register_tenant.php"><i class="fa fa-edit pull-left"></i>Register New</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="fa fa-envelope-o"> </i>Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-thumbs-up"></i><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
<span class="caret"></span></a>
                    <ul class="dropdown-menu pull-left col-lg-12">
                        <li><a href="dashboard.php"><i class="fa fa-user fa-lg pull-left"></i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out pull-left"></i>Logout</a></li>
                    </ul>
                </li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>

    <div class="clearfix"> </div>

</div>
<?php }
}
