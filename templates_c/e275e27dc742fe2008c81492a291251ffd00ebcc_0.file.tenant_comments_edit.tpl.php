<?php
/* Smarty version 3.1.30, created on 2016-11-25 15:01:14
  from "E:\wamp\www\1\aiboc\templates\tenant_comments_edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5838442a77d908_13467000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e275e27dc742fe2008c81492a291251ffd00ebcc' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\tenant_comments_edit.tpl',
      1 => 1478498714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5838442a77d908_13467000 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-lg-12 well">
        <h2 id="titleregbuild">Update Comments</h2>

        <form id="ownerfrom"  method="post" action="tenant_enquiry_update.php">
            <input type="hidden" id="enquiryid" name="enquiryid" value="<?php echo $_smarty_tpl->tpl_vars['enquiryid']->value;?>
">
                <div class="form-group">
                    <label>Comments:</label>
                    <textarea rows="3" name="comments" id="comments" class="form-control " placeholder="Give your Comments" ><?php echo $_smarty_tpl->tpl_vars['comments']->value;?>
</textarea>
                </div>


            <div class="form-group">
                <label></label>
                <button class="btn btn-primary pull-right">Update</button>
            </div>
        </form>


    </div>
</div><?php }
}
