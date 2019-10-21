<?php
/* Smarty version 3.1.30, created on 2016-11-15 11:57:08
  from "E:\wamp\www\1\aiboc\templates\dashboard_side_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582aea04b73ce4_88702640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90987e3d8562858eadf0754e621284b8eb068b75' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\dashboard_side_menu.tpl',
      1 => 1478175917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582aea04b73ce4_88702640 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li class="<?php echo $_smarty_tpl->tpl_vars['regbuild']->value;?>
"><a href="dashboard.php">Register building<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-plus"></span></a></li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['building']->value;?>
"><a href="owner_building_list.php">Building List<span style="font-size:16px;" class="pull-right hidden-xs showopacity  glyphicon glyphicon-list"></span></a></li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
"><a href="owner_profile_edit.php">Profile Edit<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-edit"></span></a></li>
                <li class="<?php echo $_smarty_tpl->tpl_vars['pass']->value;?>
"><a href="owner_password_change.php">Change Password<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-repeat"></span></a></li>
                <li><a href="logout.php">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-remove-circle"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
<?php }
}
