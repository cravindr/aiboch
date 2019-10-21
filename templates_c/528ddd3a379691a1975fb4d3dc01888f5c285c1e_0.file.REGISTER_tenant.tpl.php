<?php
/* Smarty version 3.1.30, created on 2016-11-21 10:34:26
  from "E:\wamp\www\1\aiboc\templates\REGISTER_tenant.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5832bfa2438711_62195327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '528ddd3a379691a1975fb4d3dc01888f5c285c1e' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\REGISTER_tenant.tpl',
      1 => 1477994922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5832bfa2438711_62195327 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <input type="text" name="email" id="email" class="form-control validate[required,custom[email]]" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <label>Mobile Number:</label>
                        <input type="text" name="mobile" id="mobile" class="form-control validate[required]" placeholder="Your Mobile Number">
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
                        <label>Presently Working Branch:</label>
                        <input type="text" name="workingbranch" id="workingbranch" class="form-control validate[required]" placeholder="Your Working Branch">
                    </div>
                    <div class="form-group">
                        <label>Transferred Branch:</label>
                        <input type="text" name="transferedbranch" id="transferedbranch" class="form-control validate[required]" placeholder="Transferred Branch">
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
                   
                        <label></label>
                        <button class="btn btn-primary form-control">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
