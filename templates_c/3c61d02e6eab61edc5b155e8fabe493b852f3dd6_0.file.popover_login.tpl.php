<?php
/* Smarty version 3.1.30, created on 2016-11-14 07:36:34
  from "E:\wamp\www\1\aiboc\templates\popover_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58295b72850e17_18685153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c61d02e6eab61edc5b155e8fabe493b852f3dd6' => 
    array (
      0 => 'E:\\wamp\\www\\1\\aiboc\\templates\\popover_login.tpl',
      1 => 1478600795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58295b72850e17_18685153 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="hide" id="popover_login">
    <ul class='nav nav-tabs'>
        <li class='active'><a data-toggle='tab' href='#login' style='font-size: 10px;'><b>Login</b></a></li>
        <li><a data-toggle='tab' href='#register' style='font-size: 10px;'><b>New User</b></a></li>
    </ul>

    <div class='tab-content'>
        <div id='login' class='tab-pane fade in active'>
            <form>
                <div class='form-group cusform-group'>
                    <label></label>
                    <input type='text' class='form-control cusform-control mainLoginInput' id="mobile" name='mobile' placeholder='Mobile Number'>
                </div>
                <div class='form-group cusform-group'>
                    <input type='password' class='form-control cusform-control mainLoginInput' id="password" name='password' placeholder='Password/OTP'>
                </div>
                <div class='form-group cusform-group'>
                    <div class='row'>
                        <button type="button" class='btn btn-warning cusbtn col-lg-offset-1' onclick="fnGetOTP()">Get OTP</button>
                        <button type="button" class='btn btn-success cusbtn col-lg-offset-3' onclick="fnLogon()">Login</button>
                    </div>
                    <div style='margin-top: 10px' class='form-group'>
                        <div class='row'>
                            <center><a data-toggle='tab' href='#register'>New User Registeration</a></center>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div id='register' class='tab-pane fade in'>
            <form>
                <div class='row'>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <label></label>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='name' placeholder='Name'>
                        </div>
                    </div>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <label></label>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='mobile' placeholder='Mobile'>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='email' placeholder='email'>
                        </div>
                    </div>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='scale' placeholder='Scale / Grade'>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='email' placeholder='Presently working branch'>
                        </div>
                    </div>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='scale' placeholder='Tranfor to branch'>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='email' placeholder='Quarters Elligiblity Amount'>
                        </div>
                    </div>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='scale' placeholder='Max Rent Afford To Pay'>
                        </div>
                    </div>
                </div>
                <div class='form-group cusform-group'>
                    <button class='btn btn-info cusbtn col-lg-offset-9'>Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="hide" id="popover_login2">
    <ul class='nav nav-tabs'>
        <li class='active'><a data-toggle='tab' href='#login1' style='font-size: 10px;'><b>Login</b></a></li>
        <li><a data-toggle='tab' href='#register1' style='font-size: 10px;'><b>New User</b></a></li>
    </ul>

    <div class='tab-content'>
        <div id='login1' class='tab-pane fade in active'>
            <form>
                <div class='form-group cusform-group'>
                    <label></label>
                    <input type='text' class='form-control cusform-control mainLoginInput' name='mobile' placeholder='Mobile Number'>
                </div>
                <div class='form-group cusform-group'>
                    <input type='password' class='form-control cusform-control mainLoginInput' name='password' placeholder='Password/OTP'>
                </div>
                <div class='form-group cusform-group'>
                    <div class='row'>
                        <button class='btn btn-warning cusbtn col-lg-offset-1'>Get OTP</button>
                        <button  class='btn btn-success cusbtn col-lg-offset-3'>Login</button>
                    </div>
                    <div style='margin-top: 10px' class='form-group'>
                        <div class='row'>
                            <center><a data-toggle='tab' href='#register'>New User Registeration</a></center>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div id='register1' class='tab-pane fade in'>
            <form>
                <div class='row'>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <label></label>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='name' placeholder='Name'>
                        </div>
                    </div>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <label></label>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='mobile' placeholder='Mobile'>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='email' placeholder='email'>
                        </div>
                    </div>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='scale' placeholder='Scale / Grade'>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='email' placeholder='Presently working branch'>
                        </div>
                    </div>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='scale' placeholder='Tranfor to branch'>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='email' placeholder='Quarters Elligiblity Amount'>
                        </div>
                    </div>
                    <div class='col-lg-6 padingzero'>
                        <div class='form-group cusform-group'>
                            <input type='text' class='form-control cusform-control mainLoginInput' name='scale' placeholder='Max Rent Afford To Pay'>
                        </div>
                    </div>
                </div>
                <div class='form-group cusform-group'>
                    <button class='btn btn-info cusbtn col-lg-offset-9'>Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php }
}
