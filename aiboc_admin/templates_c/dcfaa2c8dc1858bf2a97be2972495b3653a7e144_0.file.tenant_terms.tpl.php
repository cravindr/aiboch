<?php
/* Smarty version 3.1.30, created on 2017-02-27 15:19:55
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\tenant_terms.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b3f643a47cd2_37154079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcfaa2c8dc1858bf2a97be2972495b3653a7e144' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\tenant_terms.tpl',
      1 => 1488188992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b3f643a47cd2_37154079 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-lg-offset-2 col-lg-6">
    <form method="post" action="">
        <div class="form-group">
            <label>Terms and Conditions</label>
            <textarea rows="6" name="tenterm" id="tenterm" class="form-control"><?php echo $_smarty_tpl->tpl_vars['tenantterms']->value;?>
</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
</div><?php }
}
