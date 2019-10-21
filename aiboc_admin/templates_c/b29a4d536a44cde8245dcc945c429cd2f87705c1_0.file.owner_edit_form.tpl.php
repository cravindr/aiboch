<?php
/* Smarty version 3.1.30, created on 2016-11-29 10:38:16
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\owner_edit_form_admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583d4c88215c88_58922975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b29a4d536a44cde8245dcc945c429cd2f87705c1' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\owner_edit_form_admin.tpl',
      1 => 1480311679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583d4c88215c88_58922975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Building Owners Edit</h3>
</ol>
<div class="container">
    <div class="col-lg-12 well">
        <form id="updateform" method="post" action="owner_reg_update.php">
            <div class="col-lg-offset-1 col-lg-5">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="oname" id="oname" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['editname']->value;?>
" placeholder="Your Full Name">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="oemail" id="oemail" class="form-control validate[required,custom[email]]" value="<?php echo $_smarty_tpl->tpl_vars['editemail']->value;?>
" placeholder="Your Email Address">
                </div>
                <div class="form-group">
                    <label>Mobile Number:</label>
                    <input type="text" name="omobile" id="omobile" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['editmobile']->value;?>
" placeholder="Your Mobile Number">
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <textarea rows="3" name="oaddress" id="oaddress" class="form-control validate[required]" placeholder="Give your Address"><?php echo $_smarty_tpl->tpl_vars['editaddress']->value;?>
</textarea>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Place:</label>
                    <input type="text" name="oplace" id="oplace" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['editplace']->value;?>
" placeholder="Your Place">
                </div>
                <div class="form-group">
                    <label>City:</label>
                    <input type="text" name="ocity" id="ocity" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['editcity']->value;?>
" placeholder="Your City">
                </div>
                <div class="form-group">
                    <label>State:</label>
                    <input type="text" name="ostate" id="ostate" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['editstate']->value;?>
" placeholder="Your State">
                </div>
                <div class="form-group">
                    <label>Pin Code:</label>
                    <input type="text" name="opin" id="opin" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['']->value;?>
" placeholder="Your Place Pin Code">
                </div>
                <div class="form-group">
                    <label>Status:</label>
                    <select name="status" class="selectpicker form-control">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="form-group">
                    <label></label>
                    <button class="btn btn-primary form-control">Update</button>
                </div>
            </div>
        </form>
    </div>
</div><?php }
}
