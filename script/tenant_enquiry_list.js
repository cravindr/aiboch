/**
 * Created by Ravindran on 11/3/2016.
 */



$(function () {
    $('#enylist').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        /*"bInfo" : false,*/
        "language": {
            "infoFiltered": ""
        },

        "ajax": "php/tenant_enquiry_list_data_table.php"
    });

    var table = $('#enylist').DataTable();
  table.column(1).visible(false);
  table.column(2).visible(false);

    table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

    $('#enylist tbody').on("click","#Enquiryedit",function () {
        var data = table.row($(this).parents('tr')).data();
        enylistEdit(data[1]);
    });

    $('#enylist tbody').on("click","#Enquirydelete",function () {
        var data = table.row($(this).parents('tr')).data();
        enylistDelete(data[1],data[3]);
    });

/*    $('#enylist tbody').on("click","#active",function () {
        var data = table.row($(this).parents('tr')).data();
        Active_And_Deactive_Status(data[1]);
    });*/
});

function enylistEdit(id) {
    $.ajax({
        url: 'php/enylist_edit_assin.php',
        data: {id:id},
        type: 'POST',
        success: function (data) {
            if(data == "1")
            {
                window.location.href = "enquiry_edit.php";
            }
        }
    });

}

function enylistDelete(id,name) {
    var auth = confirm("Are you Want to Delete :"+name + " enquiry detail ?");
    if(auth == true)
    {
        $.ajax({
            url: 'php/enquiry_list_delete.php',
            data: {id:id},
            type: 'POST',
            success: function (data) {
                if(data == "1")
                {
                    alert("Enquiry Deleted successfully");
                        window.location.href = "tenant_enquiry_list.php";

                }
                else
                {
                    alert("Enquiry Deletion Failed");
                    window.location.href = "tenant_enquiry_list.php";
                }
            }
        });
    }
    //alert("Delete");
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
                window.location.href = "../../owner_building_list.php";
            }
        }
    });
}

