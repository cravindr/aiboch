<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:38:39
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/ckeditor_for_terms_and_condition.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad67872e0648_96540646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18cc4bcf7ce8aaa21d1e361197183cffa1296786' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/ckeditor_for_terms_and_condition.tpl',
      1 => 1488188422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad67872e0648_96540646 (Smarty_Internal_Template $_smarty_tpl) {
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
