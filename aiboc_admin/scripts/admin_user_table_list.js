/**
 * Created by Andhu on 12/15/2016.
 */


$(document).ready(function () {
    $("#mytable").DataTable({
        serverSide: true,
        processing: true,
        "order": [[ 0, "desc" ]],
        "language": {
            "infoFiltered": ""
        },
        ajax: 'php/admin_user_table_list.php'
    });

    var table = $('#mytable').DataTable();

    table.column(0).visible(false);

    $('#mytable tbody').on('click','#status',function () {
        var data = table.row($(this).parents('tr')).data();
        status(data[0]);
    });

    $('#mytable tbody').on('click','#useredit',function () {
        var data = table.row($(this).parents('tr')).data();
        userEdit(data[0]);
    });

    $('#mytable tbody').on('click','#userdelete',function () {
        var data = table.row($(this).parents('tr')).data();
        userDelete(data[0],data[1]);
    });

    $('#mytable tbody').on('click','#userview',function () {
        var data = table.row($(this).parents('tr')).data();
        Viewfull(data[0]);
    });

});


function Viewfull(id) {
    $.post('php/admin_user_view_modal.php',{id:id}, function (data) {
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
function userEdit(id) {
    $.ajax({
        url: 'php/get_owner_edit_id.php',
        data: {id:id},
        type: 'POST',
        success: function () {
            window.location.href = "admin_add_user_edit.php";
        }
    });
}

function userDelete(id,name) {
    var con = confirm("Are you want to delete this:"+name);
    if(con == true)
    {
        $.ajax({
            url: 'php/admin_user_delete.php',
            data: {id:id},
            type: 'POST',
            success: function (res) {
                if(res == "1")
                {
                    window.location.href = "admin_add_user_list.php";
                }
            }
        });
    }
}

function status(id){
    $.ajax({
        url: 'php/admin_user_status.php',
        data: {id:id},
        type: 'POST',
        success: function (res) {
            if(res == 1)
            {
                window.location.href = "admin_add_user_list.php";
            }
        }
    });
}


