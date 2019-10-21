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
        ajax: 'php/owner_table_list.php'
    });

        var table = $('#mytable').DataTable();

        table.column(0).visible(false);

        $('#mytable tbody').on('click','#status',function () {
            var data = table.row($(this).parents('tr')).data();
                status(data[0]);
        });

            $('#mytable tbody').on('click','#owneredit',function () {
                var data = table.row($(this).parents('tr')).data();
                ownerEdit(data[0]);
            });

            $('#mytable tbody').on('click','#ownerdelete',function () {
                var data = table.row($(this).parents('tr')).data();
                ownerDelete(data[0]);
            });

            $('#mytable tbody').on('click','#ownerview',function () {
                var data = table.row($(this).parents('tr')).data();
                Viewfull(data[0]);
            });

    $('#mytable tbody').on('click','#buildinglist',function () {
        var data = table.row($(this).parents('tr')).data();
        OwnerBuild(data[0]);
    });
});


function OwnerBuild(id){
    $.ajax({
        url: 'php/get_owner_edit_id.php',
        data: {getid:id},
        type: 'POST',
        success: function () {
            window.location.href = "building_list_order_by_owner.php";
        }
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
function ownerEdit(id) {
    $.ajax({
        url: 'php/get_owner_edit_id.php',
        data: {id:id},
        type: 'POST',
        success: function () {
            window.location.href = "owner_register_edit.php";
        }
    });
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

