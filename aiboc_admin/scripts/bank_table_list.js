/**
 * Created by Ravindran on 12/26/2016.
 */


$(document).ready(function () {
    $("#mytable").DataTable({
        serverSide: true,
        processing: true,
        "order": [[ 0, "desc" ]],
        "language": {
            "infoFiltered": ""
        },
        ajax: 'php/bank_table_list.php'
    });

    var table = $('#mytable').DataTable();

    table.column(0).visible(false);

    $('#mytable tbody').on('click','#status',function () {
        var data = table.row($(this).parents('tr')).data();
        status(data[0]);
    });

    $('#mytable tbody').on('click','#bankedit',function () {
        var data = table.row($(this).parents('tr')).data();
        BankEdit(data[0]);
    });

    $('#mytable tbody').on('click','#bankdelete',function () {
        var data = table.row($(this).parents('tr')).data();
        BankDelete(data[0],data[1]);
    });

    $('#mytable tbody').on('click','#bankview',function () {
        var data = table.row($(this).parents('tr')).data();
        Viewfull(data[0]);
    });

});



function Viewfull(id) {
    $.post('php/bank_list_view_modal.php',{id:id}, function (data) {
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
    html += '<tr><td>Bank Name</td><td>'+ obj.bank_name +'</td></tr>';
    html += '<tr><td>Description</td><td>'+ obj.description +'</td></tr>';
    html += '<tr><td>Status</td><td>'+ obj.status +'</td></tr>';
    html += '</tbody>';
    return html += '</table>';
}
function BankEdit(id) {
    $.ajax({
        url: 'php/get_owner_edit_id.php',
        data: {id:id},
        type: 'POST',
        success: function () {
            window.location.href = "bank_list_edit.php";
        }
    });
}

function BankDelete(id,name) {
    var con = confirm("Are you want to delete this:"+name);
    if(con == true)
    {
        $.ajax({
            url: 'php/bank_table_list_delete.php',
            data: {id:id},
            type: 'POST',
            success: function (res) {
                if(res == "1")
                {
                    window.location.href = "bank_list.php";
                }
            }
        });
    }
}

function status(id){
    $.ajax({
        url: 'php/bank_table_status.php',
        data: {id:id},
        type: 'POST',
        success: function (res) {
            if(res == 1)
            {
                window.location.href = "bank_list.php";
            }
        }
    });
}

