<div class="row">
  <div class="col-lg-12 well">
      <h2 id="titleregbuild">Update Profile</h2>

      <form id="ownerfrom" method="post" action="tenant_reg_update.php">
        <div class="col-lg-offset-1 col-lg-5">

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class="form-control validate[required]" placeholder="Your Full Name" value="{$name}">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" id="email" class="form-control validate[required,custom[email]]" placeholder="Your Email Address" readonly value="{$emailid}">
                </div>
                <div class="form-group">
                    <label>Mobile Number:</label>
                    <input type="text" name="mobile" id="mobile" class="form-control validate[required]" placeholder="Your Mobile Number" value="{$mobile}">
                </div>
            <div class="form-group">
                <label>Bank Name:</label>
                <input type="text" name="bankname" id="bankname" class="form-control validate[required]" placeholder="Bank Name" value="{$bank_name}">
            </div>
                <div class="form-group">
                    <label>Presently Working Branch:</label>
                    <input type="text" name="workingbranch" id="workingbranch" class="form-control validate[required]" placeholder="Your Working Branch" value="{$workingbranch}">
                </div>
                <div class="form-group">
                    <label>Transferred Branch:</label>
                    <input type="text" name="transferedbranch" id="transferedbranch" class="form-control validate[required]" placeholder="Transferred Branch" value="{$transferedbranch}">
                </div>
            <div class="form-group">
                <label>Transferred Place:</label>
                <input type="text" name="transferedplace" id="transferedplace" class="form-control validate[required]" placeholder="Transferred Branch" value="{$transferedplace}">
            </div>
                <div class="form-group">
                    <label>Scale / Grade:</label>
                    <input type="text" name="grade" id="grade" class="form-control validate[required]" placeholder="Scale / Grade" value="{$grade}">
                </div>
                <div class="form-group">
                    <label>Quarters Eligible Amount:</label>
                    <input type="text" name="qeamount" id="qeamount" class="form-control validate[required]" placeholder="Quarters Eligible Amount" value="{$qeamount}">
                </div>

                <div class="form-group">
                    <label>	Maximum Offered able Amount:</label>
                    <input type="text" name="maamount" id="maamount" class="form-control validate[required]" placeholder="Maximum Afferdable Amount" value="{$maaount}">
                </div>

                <div class="form-group">
                    <label>Other Expectation:</label>
                    <textarea rows="3" name="otherexp" id="otherexp" class="form-control " placeholder="Other Expectation">{$others}</textarea>
                </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <label>Employee Code:</label>
                <input type="text" name="empcode" id="empcode" class="form-control" placeholder="Employee Code" value="{$empcode}">
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



            <div class="form-group">
                <label></label>
                <button class="btn btn-primary pull-right">Update</button>
            </div>
        </div>
      </form>
  </div>
</div>