<?php
/* Smarty version 3.1.30, created on 2017-02-27 16:17:45
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\owner_terms.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b403d1a336e7_62394675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '539d094a1710d8f87d3c45229e8697f2212f788f' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\owner_terms.tpl',
      1 => 1488192462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b403d1a336e7_62394675 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Terms & Condition</h3>
</ol>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <form method="post" action="owner_terms_save.php">
                <div class="form-group">
                    <label>Owner Terms and Conditions</label>
                    <textarea rows="6" name="ownterm" id="ownterm" class="form-control"><?php echo $_smarty_tpl->tpl_vars['ownerterms']->value;?>
</textarea>
                </div>
                <div class="form-group">
                    <button  name="owner" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>

        <div class="col-lg-offset-1 col-lg-5">
            <form method="post" action="tenant_terms_save.php">
                <div class="form-group">
                    <label>Tenant Terms and Conditions</label>
                    <textarea rows="6" name="tenterm" id="tenterm" class="form-control"><?php echo $_smarty_tpl->tpl_vars['tenantterms']->value;?>
</textarea>
                </div>
                <div class="form-group">
                    <button name="tenant" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
