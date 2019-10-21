/**
 * Created by Ravindran on 12/7/2016.
 */
$(document).ready(function(){
    //$("#state").load("php/load_state.php"); for select

    // bellow code is for select picker
    $("#state").load("php/load_state.php",function (data) {
        $('#state').html(data).selectpicker('refresh');
    });

    $("#bedroom").load("php/load_bedroom.php",function (data) {
        $('#bedroom').html(data).selectpicker('refresh');
    });
    $("#toilet").load("php/load_toilet.php",function (data) {
        $('#toilet').html(data).selectpicker('refresh');
    });
    $("#parking").load("php/load_parking.php",function (data) {
        $('#parking').html(data).selectpicker('refresh');
    });
    $("#buildingtype").load("php/load_buildingtype.php",function (data) {
        $('#buildingtype').html(data).selectpicker('refresh');
    });





    $('#state').on('change', function (){
        $.post('php/load_city.php', {state: $(this).val()}, function(data){
            $('#city').html(data);
        });
    });

    $('#city').on('change', function (){
        $.post('php/load_area.php', {city: $(this).val()}, function(data){
            $('#area').html(data).selectpicker('refresh');
        });
    });

    $('button[name="search"]').click(function ()
    {

    var state=$("#state").val();
    var city=$("#city").val();
    var area=$("#area").val();
    var bedroom=$("#bedroom").val();
    var toilet=$("#toilet").val();
    var parking=$("#parking").val();
    var buildingtype=$("#buildingtype").val();


        $("#mytable").DataTable({
            serverSide: true,
            processing: true,
            "order": [[ 0, "desc" ]],
            "bDestroy": true, // for reinitialice perpose
            ajax: "php/search_building_table_list.php?state=" + state +"&city=" + city + "&area=" + area +"&bedroom="+bedroom+"&toilet="+toilet+"&parking="+parking+"&buildingtype="+buildingtype
        });

        var table = $('#mytable').DataTable();

        table.column(0).visible(false);
        table.column(1).visible(false);

        $('#mytable tbody').on('click','#status',function () {
            var data = table.row($(this).parents('tr')).data();
            status(data[0]);
        });

        $('#mytable tbody').on('click','#btnedit',function () {
            var data = table.row($(this).parents('tr')).data();
            buildingEdit(data[0]);
        });

        $('#mytable tbody').on('click','#btndelete',function () {
            var data = table.row($(this).parents('tr')).data();
            buildingDelete(data[0],data[2]);
        });

        $('#mytable tbody').on('click','#btnview',function () {
            var data = table.row($(this).parents('tr')).data();
            Viewfull(data[0]);
        });

    });

/*    $('#state').on('change', function (){
        $.getJSON('php/load_city.php', {state: $(this).val()}, function(data){
            var options = '';
            for (var x = 0; x < data.length; x++) {
                options += '<option value="' + data[x]['place'] + '">' + data[x]['place'] + '</option>';
            }
           // alert (options);
            $('#city').html(options);
        });
    });*/



});