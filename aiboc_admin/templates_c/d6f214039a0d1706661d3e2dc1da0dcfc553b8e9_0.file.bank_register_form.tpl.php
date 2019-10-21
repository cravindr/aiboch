<?php
/* Smarty version 3.1.30, created on 2016-12-24 12:04:25
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\bank_register_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585e56393d12f6_47041862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f214039a0d1706661d3e2dc1da0dcfc553b8e9' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\bank_register_form.tpl',
      1 => 1482577458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585e56393d12f6_47041862 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Bank Details Registration</h3>
</ol>
<div class="row well">
    <div class="col-lg-offset-1 col-lg-8">
        <form method="post" action="bank_register_save.php">
            <div class="form-group">
                <label>Bank Name</label>
                <input type="text" name="bankname" id="bankname" class="form-control" placeholder="Bank Name">
            </div>
            <div class="form-group">
                <label>Bank Description</label>
                <textarea rows="3" name="bankdesc" id="bankdesc" class="form-control" placeholder="Bank Description"></textarea>
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
