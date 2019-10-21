<?php
/* Smarty version 3.1.30, created on 2017-02-27 15:10:29
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\ckeditor_for_terms_and_condition.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b3f40d6d4bb5_59821368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c53e2f587875db945a886d206864d04a4bd5f9b' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\ckeditor_for_terms_and_condition.tpl',
      1 => 1488188423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b3f40d6d4bb5_59821368 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(function () {
        CKEDITOR.replace('ownterm');
    });
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function () {
        CKEDITOR.replace('tenterm');
    });
<?php echo '</script'; ?>
><?php }
}
