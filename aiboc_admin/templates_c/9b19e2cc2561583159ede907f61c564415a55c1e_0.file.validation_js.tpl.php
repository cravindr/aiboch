<?php
/* Smarty version 3.1.30, created on 2016-11-30 06:28:44
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\validation_engine_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583e638c4d4429_84807787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b19e2cc2561583159ede907f61c564415a55c1e' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\validation_engine_js.tpl',
      1 => 1480483682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583e638c4d4429_84807787 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="vendars/validation-engine-latest/js/jquery.validationEngine-en.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendars/validation-engine-latest/js/jquery.validationEngine.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $("#adminownerform").validationEngine();
    });
<?php echo '</script'; ?>
><?php }
}
