/**
 * Created by Andhu on 11/24/2016.
 */

/*the following codes should placed in dynamic datatable placed file's javascript file*/

$(document).ready(function () {
    $("#mytable").DataTable({
        serverSide: true,
        processing: true,
        "order": [[ 0, "desc" ]],
        "language": {
            "infoFiltered": ""
        },
        ajax: 'php/owner_appoinment_today_list.php'
    });

    var table = $('#mytable').DataTable();

    table.column(0).visible(false);
    table.column(1).visible(false);

    $('#mytable tbody').on('click','#status',function () {
        var data = table.row($(this).parents('tr')).data();
        status(data[0]);
    });

    $('#mytable tbody').on('click','#owneredit',function () {
        var data = table.row($(this).parents('tr')).data();
        EditAppoinment(data[0]);
    });

    $('#mytable tbody').on('click','#ownerdelete',function () {
        var data = table.row($(this).parents('tr')).data();
        ownerDelete(data[0]);
    });

    $('#mytable tbody').on('click','#ownerview',function () {
        var data = table.row($(this).parents('tr')).data();
        Viewfull(data[1]);
    });

    // owner appoinment table change date wise list
    /*$('input[type="date"]').change(function () {
        var date = $('#selectdate').val();
        NewDate(date);
    });*/
    $('#selectdate').datepicker();
    $('#selectdate').change(function () {
        var date = $('#selectdate').val();
        NewDate(date);
    });

});

function NewDate(val) {
    $.ajax({
        url: 'php/datechange.php',
        data: {dates:val},
        type: 'POST',
        success: function () {
            window.location.href = "appoinment_owner_today.php";
        }
    });
}
function EditForm(obj)
{
    //var obj = $.parseJSON(values);

    var html = '<form method="post" action="appoinment_owner_update.php">';
            html += '<div class="form-group">' +
                        '<label>Appinment date</label>' +
                        '<input type="hidden" name="ownerid" value="'+ obj.ownappid +'">'+
                        '<input type="text" id="appdate" name="appdate" class="form-control" value="'+ obj.app_date +'" placeholder="Appoinment Date">' +
                    '</div>';
            html += '<div class="form-group">' +
                        '<label>Appinment Time</label>' +
                        '<input type="text" id="apptime" name="apptime" class="form-control" value="'+ obj.app_time +'" placeholder="Appoinment Time">' +
                    '</div>';
            html += '<div class="form-group">' +
                        '<label>Description</label>' +
                        '<textarea rows="3" name="desc" class="form-control" placeholder="Description">'+ obj.description +'</textarea>' +
                    '</div>';
            html += '<div class="form-group"><label>Status</label>' +
                        '<select name="appstatus" id="appstatus" class="form-control">' +
                            '<option value="success">Success</option>' +
                            '<option value="failed">Failed</option>' +
                            '<option value="processing">Processing</option>' +
                        '</select>' +
                    '</div>';
            html += '<div class="form-group">' +
                        '<button class="btn btn-primary pull-right">Update</button>'+
                    '</div>';
           return html += '</form>';
}
function EditAppoinment(id){

    $.post('php/owner_appoinment_edit_get_values.php',{id:id},function (data) {
        //Set value after setting HTML
        var obj = $.parseJSON(data);

        var formedit = EditForm(obj);
        $('.modal-body').html(formedit);
        $('#orumodal').modal('show');

        $('#appstatus option[value="'+ obj.status +'"]').attr('selected',true);
    });
}

function Viewfull(id) {
    $.post('php/owner_list_view_modal.php',{id:id}, function (data) {
        var html = table(data);
        $('.modal-body').html(html);
        $('#orumodal').modal('show');
    });
}

function table(val) {
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


function ownerDelete(id,name) {
    var con = confirm("Are you want to delete this:"+name);
    if(con == true)
    {
        $.ajax({
            url: 'php/owner_table_delete.php',
            data: {id:id},
            type: 'POST',
            success: function (res) {
                if(res == "1")
                {
                    window.location.href = "owner_list.php";
                }
            }
        });
    }
}

function status(id){
    $.ajax({
        url: 'php/owner_reg_table_status.php',
        data: {id:id},
        type: 'POST',
        success: function (res) {
            if(res == "success")
            {
                window.location.href = "owner_list.php";
            }
        }
    });
}

