/**
 * Created by Ravindran on 12/16/2016.
 */

/*the following codes should placed in dynamic datatable placed file's javascript file*/

$(document).ready(function () {

    $("#mytable").DataTable({
        serverSide: true,
        "order": [[ 0, "desc" ]],
        ajax: 'php/role_list.php',
        stateSave: true
    });

    var table = $('#mytable').DataTable();

    table.column(0).visible(false);

    $('#mytable tbody').on('click','#tenantview',function () {
        var data = table.row($(this).parents('tr')).data();
        view(data[0]);
    });

    $('#mytable tbody').on('click','#tenantedit',function () {
        var data = table.row($(this).parents('tr')).data();
        RoleEdit(data[0]);
    });

    $('#mytable tbody').on('click','#tenantdelete',function () {
        var data = table.row($(this).parents('tr')).data();
        RoleDelete(data[0],data[1]);

    });
});

function RoleEdit(id) {
    $.post('php/role_values_get.php', {id:id},function (values) {
        var obj = $.parseJSON(values);
        var html = UpdateRoles(obj);
        var head = '<center><h2>Edit Role</h2></center>'
        $("#modal_header").html(head);
        $("#modelmsg").html(html);
        $('#formsuccess').modal('show');
    });

}

function RoleDelete(id,name) {
    var con = confirm("Are you want to delete this:"+name);
    if(con == true)
    {
        $.ajax({
            url: 'php/role_delete.php',
            data: {id:id},
            type: 'POST',
            success: function (res) {
                if(res == "1")
                {
                    window.location.href = "role_list.php";
                }
            }
        });
    }
}

function view(id){
    $.post('php/role_values_get.php', {id:id},function (values) {
        var obj = $.parseJSON(values);
        var html = table(obj);
        var head = '<center><h2>View Role</h2></center>'
        $("#modal_header").html(head);
        $("#modelmsg").html(html);
        $('#formsuccess').modal('show');
    });
}

function table(val) {

    var html = '<style>tr:nth-child(odd){background-color: #f5f5f5;} thead>tr{background-color: #ec971f; color: white;}</style>';
    html += '<table class="table table-bordered has-warning">';
    html += '<tbody>';
    html += '<tr><td>Name</td><td>'+ val.role_name +'</td></tr>';
    html += '<tr><td>Description</td><td>'+ val.role_desc +'</td></tr>';
    html += '</tbody>';
    return html += '</table>';
}

$('#addnew').click(function () {
    var html = addnew();
    var head = '<center><h2>Register Role</h2></center>'
    $("#modal_header").html(head);
    $("#modelmsg").html(html);
    $('#formsuccess').modal('show');
});

function addnew() {

    var html = '<form method="post" action="roles_insert.php">';
    html += '<div class="form-group">' +
        '<label>Role Name</label>' +
        '<input type="text" name="rolename" class="form-control" placeholder="Enter the Role Name">' +
        '</div>';
    html += '<div class="form-group">' +
        '<label>Role Description</label>' +
        '<textarea rows="3" name="roledesc" class="form-control" placeholder="Enter the Description"></textarea>' +
        '</div>';
    html += '<div class="col-lg-offset-4 col-lg-4"><div class="form-group">' +
        '<label></label>' +
        '<button class="btn btn-info form-control">Add</button>' +
        '</div></div>';
    return html += '</form>';

}

function UpdateRoles(obj) {

    var html = '<form method="post" action="roles_update.php">';
    html += '<div class="form-group">' +
        '<label>Role Name</label>' +
        '<input type="text" name="rolename" value="'+ obj.role_name +'" class="form-control" placeholder="Enter the Role Name">' +
        '<input type="hidden" name="getid" value="'+ obj.role_id +'">' +
        '</div>';
    html += '<div class="form-group">' +
        '<label>Role Description</label>' +
        '<textarea rows="3" name="roledesc" class="form-control" placeholder="Enter the Description">'+ obj.role_desc +'</textarea>' +
        '</div>';
    html += '<div class="col-lg-offset-4 col-lg-4"><div class="form-group">' +
        '<label></label>' +
        '<button class="btn btn-info form-control">Update</button>' +
        '</div></div>';
    return html += '</form>';
}



