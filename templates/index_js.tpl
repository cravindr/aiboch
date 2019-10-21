<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            html: true,
            content: function () {
                $('[data-toggle="popover"]').not(this).popover('hide');
                return  $("#popover_login").html();

            }
        });
    });

</script>
<script src="script/getOTP.js"></script>
<script src="script/fnLogOn.js"></script>
<script type="text/javascript" src="script/advanced_search_modal_content.js"></script>

<script>
    function assign_selected_city(data)
    {
        $('#selected_place').val(data);
    }
</script>
