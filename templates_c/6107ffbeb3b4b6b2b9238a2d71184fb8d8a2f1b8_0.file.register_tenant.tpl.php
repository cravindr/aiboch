<?php
/* Smarty version 3.1.30, created on 2017-02-27 11:57:47
  from "E:\wamp\www\1\aiboc\templates\register_tenant.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b4062b3a2ea4_80523969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6107ffbeb3b4b6b2b9238a2d71184fb8d8a2f1b8' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\register_tenant.tpl',
      1 => 1488193063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b4062b3a2ea4_80523969 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="col-lg-offset-3 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <center><img src="vendars/images/register-button-png-20.png" width="160"></center>
                <h2>Tenant Registration</h2>
                <form id="ownerfrom" method="post" action="tenant_reg_save.php">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" id="name" class="form-control validate[required]" placeholder="Your Full Name">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" id="email" class="form-control validate[required,custom[email,ajax[ajaxTenantEmailCheck]]]" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <label>Mobile Number:</label>
                        <input type="text" name="mobile" id="mobile" class="form-control validate[required,custome[ajax[ajaxTenantMobileCheck]]]" placeholder="Your Mobile Number">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="pass" id="pass" class="form-control validate[required]" placeholder="Enter Your password">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Conform Password:</label>
                                <input type="password" name="cpass" id="cpass" class="form-control validate[required,equals[pass]]" placeholder="Enter Your Conform password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Bank Name:</label>
                        <input type="text" name="bankname" id="bankname" class="form-control validate[required]" placeholder="Your Bank Name">
                    </div>
                    <div class="form-group">
                        <label>Presently Working Branch:</label>
                        <input type="text" name="workingbranch" id="workingbranch" class="form-control validate[required]" placeholder="Your Working Branch">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Transferred Branch Name:</label>
                                <input type="text" name="transferedbranch" id="transferedbranch" class="form-control validate[required]" placeholder="Enter transferred Branch Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Transferred Place:</label>
                                <input type="text" name="transferedplace" id="transferedplace" class="form-control validate[required]" placeholder="Enter Transferred Place">
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label>Scale / Grade:</label>
                        <input type="text" name="grade" id="grade" class="form-control validate[required]" placeholder="Scale / Grade">
                    </div>
                    <div class="form-group">
                        <label>Quarters Eligible Amount:</label>
                        <input type="text" name="qeamount" id="qeamount" class="form-control validate[required]" placeholder="Quarters Eligible Amount">
                    </div>

                    <div class="form-group">
                        <label>	Maximum Offered able Amount:</label>
                        <input type="text" name="maamount" id="maamount" class="form-control validate[required]" placeholder="Maximum Afferdable Amount">
                    </div>
                    <div class="form-group">
                        <label>Other Expectation:</label>
                        <textarea rows="3" name="otherexp" id="otherexp" class="form-control " placeholder="Other Expectation"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" class="validate[required]"> <b>I accept the <a href="#" id="tenantterms">terms and conditions.</a></b>
                    </div>
                   
                        <label></label>
                        <button class="btn btn-primary form-control">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
