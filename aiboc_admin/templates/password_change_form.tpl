<ol class="breadcrumb" style="background-color:#e0dfe3 ; color: dodgerblue; font-family: Elephant">
    <h3>User Password Change</h3>
</ol>

<div class="col-lg-12 well">
    <div class="col-lg-offset-4 col-lg-4">
        <form id="validate" method="post" action="change_password_save.php">
            <div class="form-group">
                <label>Current Password</label>
                <input type="password" name="curpass" id="curpass" class="form-control" placeholder="Enter Current Password">
            </div>
            <div class="form-group">
                <label>New Password</label>
                <input type="password" name="newpass" id="newpass" class="form-control" placeholder="Enter New Password">
            </div>
            <div class="form-group">
                <label>Conform Password</label>
                <input type="password" name="conpass" id="conpass" class="form-control" placeholder="Enter Conform Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary pull-right">Change</button>
            </div>
        </form>
    </div>
</div>