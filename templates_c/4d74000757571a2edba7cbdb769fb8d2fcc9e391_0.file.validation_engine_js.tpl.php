<?php
/* Smarty version 3.1.30, created on 2016-11-29 08:52:15
  from "E:\wamp\www\1\aiboc\templates\validation_engine_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583d33af4f5fe2_69887912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d74000757571a2edba7cbdb769fb8d2fcc9e391' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\validation_engine_js.tpl',
      1 => 1480405932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583d33af4f5fe2_69887912 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="aiboc_admin/vendars/validation-engine-latest/js/jquery.validationEngine-en.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="aiboc_admin/vendars/validation-engine-latest/js/jquery.validationEngine.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function () {
        $("#ownerfrom").validationEngine();
        $("#loginform").validationEngine();
        $("#updateform").validationEngine();
        $("#passwordform").validationEngine();
        $("#buildingreg").validationEngine();
    });
<?php echo '</script'; ?>
><?php }
}
