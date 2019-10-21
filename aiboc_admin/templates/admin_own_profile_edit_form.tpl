<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>Profile Edit</h3>
</ol>
<div class="well">
    <form id="validate" method="post" action="admin_own_profile_update.php">
        <div class="row">

            <div class="col-lg-offset-4 col-lg-4">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="uname" id="uname"  class="form-control validate[required]" value="{$username}" placeholder="Enter Your Username">
                </div>
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" class="form-control validate[required]" value="{$name}" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label>Email Address:</label>
                    <input type="text" name="email" id="email" class="form-control validate[required,custom[email]]" value="{$email}" placeholder="Enter Your Email Address">
                </div>
                <div class="form-group">
                    <label>Mobile Number:</label>
                    <input type="text" name="mobile" id="mobile" class="form-control  validate[required]" value="{$mobile}" placeholder="Enter Your Mobile Number">
                </div>
                <div class="form-group">
                    <label>Address:</label>
                    <textarea name="address" rows="3" id="address" class="form-control" placeholder="Enter Your Address">{$address}</textarea>
                </div>
                <div class="form-group">
                    <label>Place:</label>
                    <input type="text" name="place" id="place" class="form-control" value="{$place}" placeholder="Enter Your Place">
                </div>
                <div class="form-group">
                    <button class="btn btn-info pull-right">Update</button>
                </div>
            </div>
        </div>
    </form>

</div>