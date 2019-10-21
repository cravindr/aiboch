<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:38:39
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/owner_terms.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad67872d7670_48030314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '594a83579134153466e000b5804e0eb253e7ae56' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/owner_terms.tpl',
      1 => 1488192462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad67872d7670_48030314 (Smarty_Internal_Template $_smarty_tpl) {
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
