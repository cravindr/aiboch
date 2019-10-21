<?php
/* Smarty version 3.1.30, created on 2016-11-17 08:47:43
  from "E:\wamp\www\1\aiboc\templates\location_body_logged.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_582d609f215a85_11210210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f9be8c3b2ce9252348c473d2b68d08eba88ef95' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\location_body_logged.tpl',
      1 => 1479368726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_582d609f215a85_11210210 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a  href="search.php?place=<?php echo $_smarty_tpl->tpl_vars['places']->value;?>
&location=<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
"  data-placement="bottom" data-html="true" class="tags1" id="hand" ><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
</a>


<?php }
}
