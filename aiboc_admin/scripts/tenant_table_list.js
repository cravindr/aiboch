/**
 * Created by Andhu on 11/24/2016.
 */

/*the following codes should placed in dynamic datatable placed file's javascript file*/

$(document).ready(function () {




    $("#mytable").DataTable({
        serverSide: true,
        "order": [[ 0, "desc" ]],
        ajax: 'php/tenant_table_list.php',
        stateSave: true
    });

        var table = $('#mytable').DataTable();



        $('#mytable tbody').on('click','#tenantview',function () {
            var data = table.row($(this).parents('tr')).data();
            view(data[0]);
        });

            $('#mytable tbody').on('click','#tenantedit',function () {
                var data = table.row($(this).parents('tr')).data();
                tenantEdit(data[0]);
            });

            $('#mytable tbody').on('click','#tenantdelete',function () {
                var data = table.row($(this).parents('tr')).data();
                tenantDelete(data[0],data[1]);

            });
});

function tenantEdit(id) {
    $.ajax({
        url: 'php/tenant_edit.php',
        data: {id:id},
        type: 'POST',
        success: function (res) {
            /* if(res == "success")
             {
             window.location.href = "owner_list.php";
             }*/
            $("#modelmsg").html(res);
            var selval=$("#statusval").val();
            $('select[name="status"]').selectpicker('val',selval);
        }
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

/*
$(function () {
    $("#validate").validationEngine();

    $('#city').typeahead({
        name: 'city',
        remote: 'city.php?query=%QUERY',
        limit: 10

    });
    $('#state').typeahead({
        name: 'state',
        remote: 'state.php?query=%QUERY',
        limit: 10

    });
});*/
