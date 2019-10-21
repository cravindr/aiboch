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
                   {* <div class="form-group">
                        <label>Transferred Branch:</label>
                        <input type="text" name="transferedbranch" id="transferedbranch" class="form-control validate[required]" placeholder="Transferred Branch">
                    </div>*}
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
                   {* <div class="form-group">
                        <label>Employee Code:</label>
                        <input type="text" name="empcode" id="empcode" class="form-control validate[required]" placeholder="Employee Code" value="{$empcode}">
                    </div>

                    <div class="form-group">
                        <label>Address:</label>
                        <textarea rows="3" name="address" id="address" class="form-control " placeholder="Give your Address">{$address}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Place:</label>
                        <input type="text" name="place" id="place" class="form-control " placeholder="Your Place" value="{$place}">
                    </div>
                    <div class="form-group">
                        <label>City:</label>
                        <input type="text" name="city" id="city" class="form-control " placeholder="Your City" value="{$city}">
                    </div>
                    <div class="form-group">
                        <label>State:</label>
                        <input type="text" name="state" id="ostate" class="form-control " placeholder="Your State" value="{$state}">
                    </div>
                    <div class="form-group">
                        <label>Pin Code:</label>
                        <input type="text" name="pin" id="pin" class="form-control " placeholder="Your Place Pin Code" value="{$pin}">
                    </div>
                    <div class="form-group">*}
                        <label></label>
                        <button class="btn btn-primary form-control">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>