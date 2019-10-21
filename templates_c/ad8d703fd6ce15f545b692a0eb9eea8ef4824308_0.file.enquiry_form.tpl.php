<?php
/* Smarty version 3.1.30, created on 2016-12-13 10:42:37
  from "E:\wamp\www\1\aiboc\templates\enquiry_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584fc28d99f5b8_70323309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad8d703fd6ce15f545b692a0eb9eea8ef4824308' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\enquiry_form.tpl',
      1 => 1481621822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584fc28d99f5b8_70323309 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="eqnuiry_save.php" method="post" >
    <input type="hidden" name="building_id" id="building_id" value="<?php echo $_smarty_tpl->tpl_vars['building_id']->value;?>
">
    <input type="hidden" name="tenant_id" id="tenant_id" value="<?php echo $_smarty_tpl->tpl_vars['tenant_id']->value;?>
">
    <textarea name="enquiry_message" id="enquiry_message" class="form-control"> I want this...   </textarea>
    <br>
    <center><button type="button" name="submit" class="btn btn-success" onclick="fnSaveEnquiry()">Send Enquiry</button></center>


</form><?php }
}
