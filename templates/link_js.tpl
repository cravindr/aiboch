<!-- jQuery -->
<script src="aiboc_admin/vendars/jquery/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- jQuery -->
<!-- Bootstrap -->
<script src="aiboc_admin/vendars/bootstrap-3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<!-- Responsive Slider -->
<script src="vendars/scripts/responsiveslides.min.js" type="text/javascript"></script>
<script src="vendars/scripts/slidercontrol.js" type="text/javascript"></script>
<!-- Responsive Slider -->

<!-- Bootstap-dropdown -->
<script src="aiboc_admin/vendars/bootstrap-3.3.6/bootstrap-dropdown/bootstrap-dropdown.js" type="text/javascript"></script>
<script>
    $(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
<!-- Bootstap-dropdown -->

<script src="vendars/scripts/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>

<!-- script for menu -->
<script>
    $( "span.menu" ).click(function() {
        $( ".top-menu" ).slideToggle( "slow", function() {
            // Animation complete.
        });
    });
</script>
<!-- script for menu -->
<script src="vendars/submenu/js/bootstrap-submenu.min.js" type="text/javascript"></script>

<script>
    $(function () {
        $('#about').submenupicker();
    });
</script>


