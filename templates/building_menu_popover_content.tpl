<div id="menupop" class="hide">
  <div class="panel panel-default">
      <div class="panel-body">
          <button id="log" class="btn btn-success form-control">Login</button><br><br>
          <button id="reg" class="btn btn-primary form-control">Register</button>
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
    $('#popbuild').popover({
        html: true,
        placement: 'bottom',
        content: function () {
            return $('#menupop').html();
        }
    });

    $(document).on("click", "#reg", function() {
        window.location.href = "register_owner.php";
    });

    $(document).on("click", "#log", function() {
        window.location.href = "sigin.php";
    });

</script>