<div class="row">
    <div class="col-lg-12 well">
        <h2 id="titleregbuild">Edit Your Personal Details</h2>
        <form id="updateform" method="post" action="owner_reg_update.php">
            <div class="col-lg-offset-1 col-lg-5">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="oname" id="oname" class="form-control validate[required]" value="{$editname}" placeholder="Your Full Name">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="oemail" id="oemail" class="form-control validate[required,custom[email]]" value="{$editemail}" placeholder="Your Email Address">
                </div>
                <div class="form-group">
                    <label>Mobile Number:</label>
                    <input type="text" name="omobile" id="omobile" class="form-control validate[required]" value="{$editmobile}" placeholder="Your Mobile Number">
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <textarea rows="3" name="oaddress" id="oaddress" class="form-control validate[required]" placeholder="Give your Address">{$editaddress}</textarea>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label>Place:</label>
                    <input type="text" name="oplace" id="oplace" class="form-control validate[required]" value="{$editplace}" placeholder="Your Place">
                </div>
                <div class="form-group">
                    <label>City:</label>
                    <input type="text" name="ocity" id="ocity" class="form-control validate[required]" value="{$editcity}" placeholder="Your City">
                </div>
                <div class="form-group">
                    <label>State:</label>
                    <input type="text" name="ostate" id="ostate" class="form-control validate[required]" value="{$editstate}" placeholder="Your State">
                </div>
                <div class="form-group">
                    <label>Pin Code:</label>
                    <input type="text" name="opin" id="opin" class="form-control validate[required]" value="{$editpin}" placeholder="Your Place Pin Code">
                </div>
                <div class="form-group">
                    <label></label>
                    <button class="btn btn-primary form-control">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>