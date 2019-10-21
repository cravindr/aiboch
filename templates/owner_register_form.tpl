<div class="container">
    <div class="col-lg-offset-3 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-body">
                <center><img src="vendars/images/register-button-png-20.png" width="160"></center>
                <h2>Register Your Details</h2>
                <form id="ownerfrom" method="post" action="owner_reg_save.php">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="oname" id="oname" class="form-control validate[required]" placeholder="Your Full Name">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="oemail" id="oemail" class="form-control validate[required,custom[email,ajax[ajaxUserEmailCheck]]]" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <label>Mobile Number:</label>
                        <input type="text" name="omobile" id="omobile" class="form-control validate[required,ajax[ajaxUserMobileCheck]]" placeholder="Your Mobile Number">
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
                        <input type="checkbox" name="terms" class="validate[required]"> <b>I accept the <a href="#" id="ownerterms">terms and conditions.</a></b>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <button class="btn btn-primary form-control">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>