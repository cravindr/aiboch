<?php
/* Smarty version 3.1.30, created on 2016-11-14 07:33:01
  from "E:\wamp\www\1\aiboc\templates\search_result_top_open.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58295a9db828c9_17544644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18c48a3eb70748d542207dd56c5f5022f7cf1744' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\search_result_top_open.tpl',
      1 => 1479105144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58295a9db828c9_17544644 (Smarty_Internal_Template $_smarty_tpl) {
?>
<hgroup class="mb20">
    <h1>Search Results</h1>
    <h2 class="lead"><strong class="text-danger"><?php echo $_smarty_tpl->tpl_vars['resultcount']->value;?>
</strong> results were found for the search place <strong class="text-danger"><?php echo $_smarty_tpl->tpl_vars['placesearch']->value;?>
</strong></h2>
</hgroup><?php }
}
