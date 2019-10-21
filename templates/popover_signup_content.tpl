<div id="signupmenu" class="hide">
    <div class="panel panel-default">
        <div class="panel-body">
            <button id="profile" class="btn btn-info form-control">Profile</button><br><br>
            <button id="logout" class="btn btn-danger form-control">Logout</button>
        </div>
    </div>
</div>

<style>
    .panel{
        margin-bottom: 6px;
    }
    a{
        cursor: pointer;
    }
</style>

<script>
    $('#signupid').popover({
        html: true,
        placement: 'bottom',
        content: function () {
            return $('#signupmenu').html();
        }
    });

    $(document).on("click", "#profile", function() {
        window.location.href = "dashboard.php";
    });

    $(document).on("click", "#logout", function() {
        window.location.href = "../logout.php";
    });

</script>