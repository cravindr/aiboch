<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:32:48
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/validation_engine_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad6628e75b65_28367649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc775a4a6a2df367ccb5aa597cab43a0eee1f29d' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/validation_engine_js.tpl',
      1 => 1480485942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad6628e75b65_28367649 (Smarty_Internal_Template $_smarty_tpl) {
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
