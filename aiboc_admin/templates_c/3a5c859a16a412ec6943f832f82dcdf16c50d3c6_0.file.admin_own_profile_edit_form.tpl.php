<?php
/* Smarty version 3.1.30, created on 2016-12-17 09:01:48
  from "E:\wamp\www\1\aiboc\aiboc_admin\templates\admin_own_profile_edit_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5854f0ecf18d92_16537435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a5c859a16a412ec6943f832f82dcdf16c50d3c6' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\aiboc_admin\\templates\\admin_own_profile_edit_form.tpl',
      1 => 1481961701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5854f0ecf18d92_16537435 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Profile Edit</h3>
</ol>
<div class="well">
    <form id="validate" method="post" action="admin_own_profile_update.php">
        <div class="row">

            <div class="col-lg-offset-4 col-lg-4">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="uname" id="uname"  class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" placeholder="Enter Your Username">
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class="form-control validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label>Email Address:</label>
                    <input type="text" name="email" id="email" class="form-control validate[required,custom[email]]" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="Enter Your Email Address">
                </div>
                <div class="form-group">
                    <label>Mobile Number:</label>
                    <input type="text" name="mobile" id="mobile" class="form-control  validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
" placeholder="Enter Your Mobile Number">
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <textarea name="address" rows="3" id="address" class="form-control" placeholder="Enter Your Address"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</textarea>
                </div>
                <div class="form-group">
                    <label>Place:</label>
                    <input type="text" name="place" id="place" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['place']->value;?>
" placeholder="Enter Your Place">
                </div>
                <div class="form-group">
                    <button class="btn btn-info pull-right">Update</button>
                </div>
            </div>
        </div>
    </form>

</div><?php }
}
