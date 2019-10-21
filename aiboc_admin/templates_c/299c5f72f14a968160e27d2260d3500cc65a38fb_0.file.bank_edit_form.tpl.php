<?php
/* Smarty version 3.1.30, created on 2016-12-29 11:34:40
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\bank_edit_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5864e6c0baf7e5_97860245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '299c5f72f14a968160e27d2260d3500cc65a38fb' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\bank_edit_form.tpl',
      1 => 1483001912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5864e6c0baf7e5_97860245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Bank Details Edit</h3>
</ol>
<div class="row well">
    <div class="col-lg-offset-1 col-lg-8">
        <form method="post" action="bank_update.php">
            <div class="form-group">
                <label>Bank Name</label>
                <input type="text" name="bankname" id="bankname" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bankname']->value;?>
" placeholder="Bank Name">
            </div>
            <div class="form-group">
                <label>Bank Description</label>
                <textarea rows="3" name="bankdesc" id="bankdesc" class="form-control" placeholder="Bank Description"><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</textarea>
            </div>
            <div class="form-group">
                <label></label>
                <button class="btn btn-info pull-right">Submit</button>
            </div>
        </form>
    </div>
</div>

<?php }
}
