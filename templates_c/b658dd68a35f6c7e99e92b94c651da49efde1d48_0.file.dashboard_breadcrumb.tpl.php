<?php
/* Smarty version 3.1.30, created on 2016-11-14 07:43:09
  from "E:\wamp\www\1\aiboc\templates\dashboard_breadcrumb.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58295cfdbd8557_34821753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b658dd68a35f6c7e99e92b94c651da49efde1d48' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\dashboard_breadcrumb.tpl',
      1 => 1478499461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58295cfdbd8557_34821753 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['activemenu']->value;?>
</li>
    </ol>
</div>

<?php }
}
