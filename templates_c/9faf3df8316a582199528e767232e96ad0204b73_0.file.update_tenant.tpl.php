<?php
/* Smarty version 3.1.30, created on 2016-11-30 12:54:19
  from "E:\wamp\www\1\aiboc\templates\update_tenant.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583ebdeb6d7db7_77826703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9faf3df8316a582199528e767232e96ad0204b73' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\update_tenant.tpl',
      1 => 1480506854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583ebdeb6d7db7_77826703 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-lg-12 well">
      <h2 id="titleregbuild">Update Profile</h2>

      <form id="ownerfrom" method="post" action="tenant_reg_update.php">
        <div class="col-lg-offset-1 col-lg-5">

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class="form-control validate[required]" placeholder="Your Full Name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" id="email" class="form-control validate[required,custom[email]]" placeholder="Your Email Address" readonly value="<?php echo $_smarty_tpl->tpl_vars['emailid']->value;?>
">
                </div>
                <div class="form-group">
                    <label>Mobile Number:</label>
                    <input type="text" name="mobile" id="mobile" class="form-control validate[required]" placeholder="Your Mobile Number" value="<?php echo $_smarty_tpl->tpl_vars['mobile']->value;?>
">
                </div>
            <div class="form-group">
                <label>Bank Name:</label>
                <input type="text" name="bankname" id="bankname" class="form-control validate[required]" placeholder="Bank Name" value="<?php echo $_smarty_tpl->tpl_vars['bank_name']->value;?>
">
            </div>
                <div class="form-group">
                    <label>Presently Working Branch:</label>
                    <input type="text" name="workingbranch" id="workingbranch" class="form-control validate[required]" placeholder="Your Working Branch" value="<?php echo $_smarty_tpl->tpl_vars['workingbranch']->value;?>
">
                </div>
                <div class="form-group">
                    <label>Transferred Branch:</label>
                    <input type="text" name="transferedbranch" id="transferedbranch" class="form-control validate[required]" placeholder="Transferred Branch" value="<?php echo $_smarty_tpl->tpl_vars['transferedbranch']->value;?>
">
                </div>
            <div class="form-group">
                <label>Transferred Place:</label>
                <input type="text" name="transferedplace" id="transferedplace" class="form-control validate[required]" placeholder="Transferred Branch" value="<?php echo $_smarty_tpl->tpl_vars['transferedplace']->value;?>
">
            </div>
                <div class="form-group">
                    <label>Scale / Grade:</label>
                    <input type="text" name="grade" id="grade" class="form-control validate[required]" placeholder="Scale / Grade" value="<?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
">
                </div>
                <div class="form-group">
                    <label>Quarters Eligible Amount:</label>
                    <input type="text" name="qeamount" id="qeamount" class="form-control validate[required]" placeholder="Quarters Eligible Amount" value="<?php echo $_smarty_tpl->tpl_vars['qeamount']->value;?>
">
                </div>

                <div class="form-group">
                    <label>	Maximum Offered able Amount:</label>
                    <input type="text" name="maamount" id="maamount" class="form-control validate[required]" placeholder="Maximum Afferdable Amount" value="<?php echo $_smarty_tpl->tpl_vars['maaount']->value;?>
">
                </div>

                <div class="form-group">
                    <label>Other Expectation:</label>
                    <textarea rows="3" name="otherexp" id="otherexp" class="form-control " placeholder="Other Expectation"><?php echo $_smarty_tpl->tpl_vars['others']->value;?>
</textarea>
                </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Employee Code:</label>
                <input type="text" name="empcode" id="empcode" class="form-control" placeholder="Employee Code" value="<?php echo $_smarty_tpl->tpl_vars['empcode']->value;?>
">
            </div>

            <div class="form-group">
                <label>Address:</label>
                <textarea rows="3" name="address" id="address" class="form-control " placeholder="Give your Address"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</textarea>
            </div>
            <div class="form-group">
                <label>Place:</label>
                <input type="text" name="place" id="place" class="form-control " placeholder="Your Place" value="<?php echo $_smarty_tpl->tpl_vars['place']->value;?>
">
            </div>
            <div class="form-group">
                <label>City:</label>
                <input type="text" name="city" id="city" class="form-control " placeholder="Your City" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
">
            </div>
            <div class="form-group">
                <label>State:</label>
                <input type="text" name="state" id="ostate" class="form-control " placeholder="Your State" value="<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
">
            </div>
            <div class="form-group">
                <label>Pin Code:</label>
                <input type="text" name="pin" id="pin" class="form-control " placeholder="Your Place Pin Code" value="<?php echo $_smarty_tpl->tpl_vars['pin']->value;?>
">
            </div>



            <div class="form-group">
                <label></label>
                <button class="btn btn-primary pull-right">Update</button>
            </div>
        </div>
      </form>
  </div>
</div><?php }
}
