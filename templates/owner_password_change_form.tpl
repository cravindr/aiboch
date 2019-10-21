<div class="row">
    <div class="col-lg-12 well">
        <h2 id="titleregbuild">Change Password</h2>
        <div class="col-lg-offset-4 col-lg-4 panel panel-default panel-body">
            <form id="passwordform" method="post" action="owner_password_update.php">
                <div class="form-group">
                    <label>Current Password:</label>
                    <input type="password" name="curpass" id="curpass" class="form-control validate[required]" placeholder="Current Password">
                </div>
                <div class="form-group">
                    <label>New Password:</label>
                    <input type="password" name="newpass" id="newpass" class="form-control validate[required]" placeholder="New Password">
                </div>
                <div class="form-group">
                    <label>Conform Password:</label>
                    <input type="password" name="conpass" id="conpass" class="form-control validate[required,equals[newpass]]" placeholder="Conform Password">
                </div>
                <div class="form-group">
                    <label></label>
                    <button class="btn btn-primary form-control">Change</button>
                </div>
            </form>
        </div>
    </div>
</div>