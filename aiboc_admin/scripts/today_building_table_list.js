/**
 * Created by Andhu on 1/4/2017.
 */

$(function () {
    $("#mybuild").DataTable({
        serverSide: true,
        processing: true,
        "order": [[ 0, "desc" ]],
        "language": {
            "infoFiltered": ""
        },
        "bFilter": false,
        ajax: 'php/today_building_table_list.php'
    });

    var table = $('#mybuild').DataTable();

    table.column(0).visible(false);
    table.column(1).visible(false);
    table.column(3).visible(false);

    $('#mybuild tbody').on('click','#status',function () {
        var data = table.row($(this).parents('tr')).data();
        status(data[0]);
    });

    $('#mybuild tbody').on('click','#btnedit',function () {
        var data = table.row($(this).parents('tr')).data();
        buildingEdit(data[0]);
    });

    $('#mybuild tbody').on('click','#btndelete',function () {
        var data = table.row($(this).parents('tr')).data();
        buildingDelete(data[0],data[2]);
    });

    $('#mybuild tbody').on('click','#btnview',function () {
        var data = table.row($(this).parents('tr')).data();
        Viewfull(data[0]);
    });
});


function ownermodalShow(id) {
    $.post('php/owner_list_view_modal.php',{id:id}, function (data) {
        var html = ownertable(data);
        $('#modalshowowner').html(html);
        $('#modalowner').modal('show');
    });
}

function ownertable(val) {
    var obj = $.parseJSON(val);

    var html = '<style>tr:nth-child(odd){background-color: #f5f5f5;} thead>tr{background-color: #ec971f; color: white;}</style>';
    html += '<table class="table table-bordered has-warning">';
    html += '<tbody>';
    html += '<tr><td>Name</td><td>'+ obj.name +'</td></tr>';
    html += '<tr><td>Email</td><td>'+ obj.emailid +'</td></tr>';
    html += '<tr><td>Mobile</td><td>'+ obj.mobile +'</td></tr>';
    html += '<tr><td>Address</td><td>'+ obj.address +'</td></tr>';
    html += '<tr><td>Place</td><td>'+ obj.place +'</td></tr>';
    html += '<tr><td>City</td><td>'+ obj.city +'</td></tr>';
    html += '<tr><td>State</td><td>'+ obj.state +'</td></tr>';
    html += '<tr><td>Pin</td><td>'+ obj.pin +'</td></tr>';
    html += '<tr><td>Status</td><td>'+ obj.status +'</td></tr>';
    html += '</tbody>';
    return html += '</table>';
}

function Viewfull(id) {
    $.post('php/building_list_view_modal.php',{id:id}, function (data) {
        var html = table(data);
        $('.modal-body').html(html);
        $('#orumodal').modal('show');
    });
}

function table(val) {
    var obj = $.parseJSON(val);

    var html = '<style>tr:nth-child(odd){background-color: #f5f5f5;} thead>tr{background-color: #ec971f; color: white;}</style>';
    html += '<button type="button" onclick="ownermodalShow('+ obj.owner_id +')" class="btn btn-warning pull-right">View Owner Details</button>';
    html += '<table class="table table-bordered has-warning">';
    html += '<tbody>';
    html += '<tr><td>Address</td><td>'+ obj.address +'</td></tr>';
    html += '<tr><td>Location</td><td>'+ obj.location +'</td></tr>';
    html += '<tr><td>City</td><td>'+ obj.place +'</td></tr>';
    html += '<tr><td>State</td><td>'+ obj.state +'</td></tr>';
    html += '<tr><td>Pin</td><td>'+ obj.pin +'</td></tr>';
    html += '<tr><td>Building Type</td><td>'+ obj.building_type +'</td></tr>';
    html += '<tr><td>Room Options</td><td>'+ obj.room_options +'</td></tr>';
    html += '<tr><td>No Of Toilets</td><td>'+ obj.no_of_toilets +'</td></tr>';
    html += '<tr><td>Carpet Area</td><td>'+ obj.carpet_area +'</td></tr>';
    html += '<tr><td>Excepted Rent</td><td>'+ obj.excepted_rent +'</td></tr>';
    html += '<tr><td>Maintance Cost</td><td>'+ obj.maintance_cost +'</td></tr>';
    html += '<tr><td>Water Facility</td><td>'+ obj.water_facility +'</td></tr>';
    html += '<tr><td>Power Backup</td><td>'+ obj.power_backup +'</td></tr>';
    html += '<tr><td>Lift Facility</td><td>'+ obj.lift_facility +'</td></tr>';
    html += '<tr><td>Parking_Area</td><td>'+ obj.parking_area +'</td></tr>';
    html += '<tr><td>Other Facilities</td><td>'+ obj.other_facilities +'</td></tr>';
    html += '<tr><td>Any Conditions</td><td>'+ obj.any_conditions +'</td></tr>';
    html += '<tr><td>Status</td><td>'+ obj.status +'</td></tr>';
    html += '</tbody>';
    return html += '</table>';
}

function buildingEdit(id) {
    $.ajax({
        url: 'php/get_owner_edit_id.php',
        data: {id:id},
        type: 'POST',
        success: function () {
            window.location.href = "building_list_edit.php";
        }
    });
}

function buildingDelete(id,name) {
    var condition = confirm("Are you want to delete:"+name);
    if(condition == true)
    {
        $.ajax({
            url: 'php/building_table_delete.php',
            data: {id:id},
            type: 'POST',
            success: function (res) {
                if(res == 1)
                {
                    alert("Record deleted successfully");
                    window.location.href = "dashboard.php";
                }
            }
        });
    }
}

function status(id) {
    $.ajax({
        url: 'php/building_list_status_update.php',
        data: {id:id},
        type: 'POST',
        success: function (res) {
            if(res == 1)
            {
                window.location.href = "dashboard.php";
            }
        }
    });
}

