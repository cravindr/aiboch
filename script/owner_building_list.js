/**
 * Created by oom on 10/24/2016.
 */

$(function () {
    $('#buildinglist').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "language": {
            "infoFiltered": ""
        },
        "ajax": "php/owner_building_list_data_table.php"
    });

    var table = $('#buildinglist').DataTable();
    table.column(1).visible(false);

    table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

    $('#buildinglist tbody').on("click","#Buildlistedit",function () {
        var data = table.row($(this).parents('tr')).data();
        BuildingListEdit(data[1]);
    });

    $('#buildinglist tbody').on("click","#Buildlistdelete",function () {
        var data = table.row($(this).parents('tr')).data();
        BuildingListDelete(data[1],data[2]);
    });

    $('#buildinglist tbody').on("click","#active",function () {
        var data = table.row($(this).parents('tr')).data();
        Active_And_Deactive_Status(data[1]);
    });
});

function BuildingListEdit(id) {
    $.ajax({
        url: 'vendars/php/buildinglist_edit.php',
        data: {id:id},
        type: 'POST',
        success: function (data) {
            if(data == "1")
            {
                window.location.href = "owner_building_edit.php";
            }
        }
    });
}

function BuildingListDelete(id,name) {
    var auth = confirm("Are you Want to Delete:"+name);
    if(auth == true)
    {
        $.ajax({
            url: 'vendars/php/buildinglist_detete.php',
            data: {id:id},
            type: 'POST',
            success: function (data) {
                if(data == "1")
                {
                    $('#modelmsg').html('<div class="alert alert-success"><strong>Success!!!</strong>&nbsp; Deleted Successfull</div>');
                    $('#formsuccess').modal('show');
                    $('button[type="button"]').click(function () {
                        window.location.href = "dashboard.php";
                    });
                }
                else
                {
                    $('#modelmsg').html('<div class="alert alert-danger"><strong>Success!!!</strong>&nbsp;Does Not Deleted</div>');
                    $('#formsuccess').modal('show');
                    $('button[type="button"]').click(function () {
                        window.location.href = "dashboard.php";
                    });
                }
            }
        });
    }
}

function Active_And_Deactive_Status(id)
{
    $.ajax({
        url: 'vendars/php/active_and_deactive_status.php',
        data: {id:id},
        type: 'POST',
        success: function (data) {
            if(data == "1")
            {
                window.location.href = "owner_building_list.php";
            }
        }
    });
}

