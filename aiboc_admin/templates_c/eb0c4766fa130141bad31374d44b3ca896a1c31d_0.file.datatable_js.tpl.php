<?php
/* Smarty version 3.1.30, created on 2016-10-13 07:30:05
  from "D:\wamp\www\aiboc\aiboc_admin\templates\datatable_js.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57ff1bdd0f84f7_11737748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb0c4766fa130141bad31374d44b3ca896a1c31d' => 
    array (
      0 => 'D:\\wamp\\www\\aiboc\\aiboc_admin\\templates\\datatable_js.tpl',
      1 => 1476336601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ff1bdd0f84f7_11737748 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="vendars/DataTables-1.10.12/media/js/jquery.dataTables.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendars/DataTables-1.10.12/media/js/dataTables.bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        $("#mytable").DataTable({
            serverSide: true,
            ajax: 'table/server_processing.php'
        });
    });
<?php echo '</script'; ?>
><?php }
}
