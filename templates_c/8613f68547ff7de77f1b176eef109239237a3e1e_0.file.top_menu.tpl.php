<?php
/* Smarty version 3.1.30, created on 2017-02-04 13:03:43
  from "E:\wamp\www\1\aiboc\templates\top_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5895c31faf8d30_89794411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8613f68547ff7de77f1b176eef109239237a3e1e' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\top_menu.tpl',
      1 => 1486209820,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5895c31faf8d30_89794411 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="header">
    <div class="col-xs-4">
        <div class="logo">
            <a href="index.html"><img src="vendars/images/logo.png" alt=""/></a>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 header_right">
        <span class="menu"></span>
        <div class="top-menu">
            <ul>
                <li><a class="active scroll" href="index.php"><i class="fa fa-home"> </i>Home</a></li>
                <li><a data-toggle="dropdown" id="about"><i class="fa fa-star"> </i> About</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-thumbs-up"></i>Building Owner Registration<span class="caret"></span></a>
                    <ul class="dropdown-menu pull-left col-lg-12">
                        <li><a href="sigin.php"><i class="fa fa-user-circle fa-lg pull-left"></i>Login</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="register_owner.php"><i class="fa fa-edit pull-left"></i>Register New</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-thumbs-up"></i>Bankers Registration<span class="caret"></span></a>
                    <ul class="dropdown-menu pull-left col-lg-12">
                        <li><a  href="tenant_sigin.php"><i class="fa fa-user-circle "></i>Login</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="register_tenant.php"><i class="fa fa-edit "></i>Register New</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="fa fa-envelope-o"> </i>Contact</a></li>

                <div class="clearfix"></div>
            </ul>
        </div>
    </div>

    <div class="clearfix"> </div>

</div>
<?php }
}
