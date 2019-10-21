<?php
/* Smarty version 3.1.30, created on 2016-11-30 07:05:48
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\validation_engine_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583e6c3cb49067_87895038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '189be2c317bef56d8e31713fe0ef58512639875f' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\validation_engine_js.tpl',
      1 => 1480485942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583e6c3cb49067_87895038 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="vendars/validation-engine-latest/js/jquery.validationEngine-en.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendars/validation-engine-latest/js/jquery.validationEngine.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {
        $("#validate").validationEngine();
    });
<?php echo '</script'; ?>
><?php }
}
