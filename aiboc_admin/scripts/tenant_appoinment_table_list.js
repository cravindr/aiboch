/**
 * Created by Andhu on 2/3/2017.
 */

/*the following codes should placed in dynamic datatable placed file's javascript file*/

$(document).ready(function () {

    $("#mytable").DataTable({
        serverSide: true,
        "order": [[ 0, "desc" ]],
        "language": {
            "infoFiltered": ""
        },
        ajax: 'php/tenant_appoinment_today_list.php',
        stateSave: true
    });

    var table = $('#mytable').DataTable();

    table.column(0).visible(false);
    table.column(1).visible(false);

    $('#mytable tbody').on('click','#tenantview',function () {
        var data = table.row($(this).parents('tr')).data();
        view(data[1]);
    });

    $('#mytable tbody').on('click','#tenantedit',function () {
        var data = table.row($(this).parents('tr')).data();
        EditAppoinment(data[0]);
    });

    $('#mytable tbody').on('click','#tenantdelete',function () {
        var data = table.row($(this).parents('tr')).data();
        tenantDelete(data[0],data[1]);

    });

    //date change function tenant list date wise
    $('#selectdate').datepicker();
    $('#selectdate').change(function () {
        var date = $('#selectdate').val();
        NewDate(date);
    });
});

function EditForm(obj)
{
    //var obj = $.parseJSON(values);

    var html = '<form method="post" action="appoinment_tenant_update.php">';
    html += '<div class="form-group">' +
        '<label>Appinment date</label>' +
        '<input type="hidden" name="tenantid" value="'+ obj.tenappid +'">'+
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

    $.post('php/tenant_appoinment_edit_get_values.php',{id:id},function (data) {
        //Set value after setting HTML
        var obj = $.parseJSON(data);

        var formedit = EditForm(obj);
        $('.modal-body').html(formedit);
        $('#orumodal').modal('show');

        $('#appstatus option[value="'+ obj.status +'"]').attr('selected',true);
    });
}

function tenantDelete(id,name) {
    var con = confirm("Are you want to delete this:"+name);
    if(con == true)
    {
        $.ajax({
            url: 'php/tenant_table_delete.php',
            data: {id:id},
            type: 'POST',
            success: function (res) {
                if(res == "1")
                {
                    window.location.href = "tenant_list.php";
                }
            }
        });
    }
}

function view(id){

    $.ajax({
        url: 'php/tenant_view.php',
        data: {id:id},
        type: 'POST',
        success: function (res) {
            /* if(res == "success")
             {
             window.location.href = "owner_list.php";
             }*/
            $("#modelmsg").html(res);
            $('#formsuccess').modal('show');
        }
    });
}

function addnew() {


    $.ajax({
        url: 'php/tenant_registration.php',
        type: 'POST',
        success: function (res) {
            /* if(res == "success")
             {
             window.location.href = "owner_list.php";
             }*/
            $("#modelmsglg").html(res);
        }
    });
}
function NewDate(val) {
    $.ajax({
        url: 'php/datechange.php',
        data: {dates:val},
        type: 'POST',
        success: function () {
            window.location.href = "appoinment_tenant_today.php";
        }
    });
}
