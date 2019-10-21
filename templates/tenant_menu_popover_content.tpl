<div id="menutenantpop" class="hide">
    <div class="panel panel-default">
        <div class="panel-body">
            <button id="tenantlog" class="btn btn-success form-control">Login</button><br><br>
            <button id="tenantreg" class="btn btn-primary form-control">Register</button>
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
    $('#popovertenant').popover({
        html: true,
        placement: 'bottom',
        content: function () {
            return $('#menutenantpop').html();
        }
    });

    $(document).on("click", "#tenantreg", function() {
        window.location.href = "register_tenant.php";
    });

    $(document).on("click", "#tenantlog", function() {
        window.location.href = "sigin_tenant.php";
    });

</script>