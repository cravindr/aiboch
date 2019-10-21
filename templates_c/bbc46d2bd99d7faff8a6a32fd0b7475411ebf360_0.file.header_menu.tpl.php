<?php
/* Smarty version 3.1.30, created on 2016-11-21 10:04:56
  from "E:\wamp\www\1\aiboc\templates\header_menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5832b8b8ab1fe2_09598114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbc46d2bd99d7faff8a6a32fd0b7475411ebf360' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\header_menu.tpl',
      1 => 1477914029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5832b8b8ab1fe2_09598114 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="header">
    <div class="col-xs-4">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt=""/></a>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 header_right">
        <span class="menu"></span>
        <div class="top-menu">
            <ul>
                <li><a class="active scroll" href="index.php"><i class="fa fa-home"> </i>Home</a></li>
                <li><a data-toggle="dropdown" id="about"><i class="fa fa-star"> </i> About</a></li>
                <li><a <?php echo $_smarty_tpl->tpl_vars['signuptxt']->value;?>
><i class="fa fa-thumbs-up"> </i>Register Bulding</a></li>
                <li><a <?php echo $_smarty_tpl->tpl_vars['tenanttxt']->value;?>
><i class="fa fa-picture-o"> </i>Register Bankers</a></li>
                <li><a href=""><i class="fa fa-envelope-o"> </i>Contact</a></li>
                <?php echo $_smarty_tpl->tpl_vars['nametxt']->value;?>

                <div class="clearfix"></div>
            </ul>
        </div>
    </div>

    <div class="clearfix"> </div>

</div><?php }
}
