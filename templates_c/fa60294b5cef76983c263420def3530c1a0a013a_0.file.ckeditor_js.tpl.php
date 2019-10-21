<?php
/* Smarty version 3.1.30, created on 2016-11-25 15:01:14
  from "E:\wamp\www\1\aiboc\templates\ckeditor_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5838442a7dbe79_50537525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa60294b5cef76983c263420def3530c1a0a013a' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\ckeditor_js.tpl',
      1 => 1478243066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5838442a7dbe79_50537525 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="vendars/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('comments');
        CKEDITOR.replace('commentsold');
        //bootstrap WYSIHTML5 - text editor
        /*$(".textarea").wysihtml5();*/
    });
<?php echo '</script'; ?>
><?php }
}
