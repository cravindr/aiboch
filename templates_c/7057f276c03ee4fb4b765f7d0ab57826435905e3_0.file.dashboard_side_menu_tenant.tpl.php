<?php
/* Smarty version 3.1.30, created on 2016-11-14 07:43:09
  from "E:\wamp\www\1\aiboc\templates\dashboard_side_menu_tenant.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58295cfdb9a1c4_51259816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7057f276c03ee4fb4b765f7d0ab57826435905e3' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\dashboard_side_menu_tenant.tpl',
      1 => 1478511152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58295cfdb9a1c4_51259816 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-inverse sidebar" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="text-decoration: none; color: white" class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li ><a href="index.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                    <li class="<?php echo $_smarty_tpl->tpl_vars['profileactive']->value;?>
"><a href="tenantdashboard.php">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                    <li class="<?php echo $_smarty_tpl->tpl_vars['enqueirylistactive']->value;?>
"><a href="tenant_enquiry_list.php">Enquiry List<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
                   
                    <li class="<?php echo $_smarty_tpl->tpl_vars['changepass']->value;?>
"><a href="tenant_change_password.php">Changte Password<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-repeat"></span></a></li>
                    <li><a href="logout.php">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>



                </ul>
            </div>
        </div>
    </nav>
<?php }
}
