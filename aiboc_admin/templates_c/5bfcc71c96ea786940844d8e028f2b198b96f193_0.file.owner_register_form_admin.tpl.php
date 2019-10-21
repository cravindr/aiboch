<?php
/* Smarty version 3.1.30, created on 2019-10-21 13:38:44
  from "/opt/lampp/htdocs/aiboch/aiboc_admin/templates/owner_register_form_admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5dad678c3ec5b3_79174812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bfcc71c96ea786940844d8e028f2b198b96f193' => 
    array (
      0 => '/opt/lampp/htdocs/aiboch/aiboc_admin/templates/owner_register_form_admin.tpl',
      1 => 1481105102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dad678c3ec5b3_79174812 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Owner's Registration</h3>
</ol>
<div class="well">
    <form id="validate" method="post" action="owner_register_save.php">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="oname" id="oname" class="form-control validate[required]" placeholder="Your Full Name">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="oemail" id="oemail" class="form-control validate[required,custom[email,ajax[ajaxAdminEmailCheck]]]" placeholder="Your Email Address">
            </div>
            <div class="form-group">
                <label>Mobile Number:</label>
                <input type="text" name="omobile" id="omobile" class="form-control validate[required,ajax[ajaxAdminMobileCheck]]" placeholder="Your Mobile Number">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="opass" id="opass" class="form-control validate[required]" placeholder="Enter Your password">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Conform Password:</label>
                        <input type="password" name="ocpass" id="ocpass" class="form-control validate[required,equals[opass]]" placeholder="Enter Your Conform password">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <textarea rows="3" name="oaddress" id="oaddress" class="form-control validate[required]" placeholder="Give your Address"></textarea>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Place:</label>
                <input type="text" name="oplace" id="oplace" class="form-control validate[required]" placeholder="Your Place">
            </div>
            <div class="form-group">
                <label>City:</label>
                <input type="text" name="ocity" id="ocity" class="form-control validate[required]" placeholder="Your City">
            </div>
            <div class="form-group">
                <label>State:</label>
                <input type="text" name="ostate" id="ostate" class="form-control validate[required]" placeholder="Your State">
            </div>
            <div class="form-group">
                <label>Pin Code:</label>
                <input type="text" name="opin" id="opin" class="form-control validate[required]" placeholder="Your Place Pin Code">
            </div>
            <div class="form-group">
                <label></label>
                <button class="btn btn-primary form-control">Register</button>
            </div>
        </div>
    </form>
</div>

<?php }
}
