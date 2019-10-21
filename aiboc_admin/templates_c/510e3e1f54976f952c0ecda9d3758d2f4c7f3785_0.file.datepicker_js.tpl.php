<?php
/* Smarty version 3.1.30, created on 2016-12-21 13:48:00
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\datepicker_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585a7a00ab7043_44845515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '510e3e1f54976f952c0ecda9d3758d2f4c7f3785' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\datepicker_js.tpl',
      1 => 1482324462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585a7a00ab7043_44845515 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="vendars/Datedropper3-master/datedropper.min.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="vendars/Datedropper3-master/datedropper.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function () {
        //CKEDITOR.replace('enquiry_message');
        $('#datepicker').dateDropper();
    });
<?php echo '</script'; ?>
>

<?php }
}
