/**
 * Created by Ravindran on 11/3/2016.
 */



$(function () {

    $('#enylist').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "order": [[ 0, "desc" ]],
        /*"bInfo" : false,*/
        "language": {
            "infoFiltered": ""
        },

        "ajax": "php/tenant_enquiry_list_data_table.php"
    });

    var table = $('#enylist').DataTable();
  table.column(1).visible(false);
  table.column(6).visible(false);

/*    table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();*/

    $('#enylist tbody').on("click","#Enquiryedit",function () {
        var data = table.row($(this).parents('tr')).data();
        enylistEdit(data[0]);
    });

    $('#enylist tbody').on("click","#Enquirydelete",function () {
        var data = table.row($(this).parents('tr')).data();
        enylistDelete(data[0],data[2]);
    });
    $('#enylist tbody').on("click","#tenantname",function () {
        var data = table.row($(this).parents('tr')).data();
        fnTenantInfo(data[1]);
    });
    $('#enylist tbody').on("click","#location",function () {
        var data = table.row($(this).parents('tr')).data();
        Viewfull(data[6]);
    });

/*    $('#enylist tbody').on("click","#active",function () {
        var data = table.row($(this).parents('tr')).data();
        Active_And_Deactive_Status(data[1]);
    });*/
});

function enylistEdit(id) {

    $.ajax({
        url: 'php/enquiry_form.php',
        data: {id:id},
        type: 'POST',
        success: function (data) {
         var obj=$.parseJSON(data);



          $("#enquiry_id").val(obj.enquiry_id);

          //$("#progress_status").val(obj.status);
            $("#progress_status").selectpicker('val',obj.status);
          CKEDITOR.instances["enquiry_message"].setData(obj.comment);


          $("#modal_enquiry").modal("show");
        }
    });

}



function enylistDelete(id,name) {
    //var myContent = name;
    //alert($(myContent).text());
    var auth = confirm("Are you Want to Delete :"+$(name).text() + " enquiry detail ?");
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

function fnTenantInfo(id)
{

    $.ajax({
        url: 'php/tenant_view.php',
        data: {id:id},
        type: 'POST',
        success: function (res) {

           // $("#modelmsg").html(res); //using id
            $("#modelmsg").html(res); // using class instead of id
            $("#formsuccess").modal("show");

        }
    });

}


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
        $('#modelbuilding').html(html);
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

/*function fnSaveEnquiry() {
    var enquiry_id=$("#enquiry_id").val();
    var progress_status=$("#progress_status").val();
    var enquiry_message=$("#enquiry_message").val();
    alert(enquiry_message);
    $.ajax({
        url:"enquiry_update.php",
        type:"POST",
        data:{enquiry_id:enquiry_id,progress_status:progress_status,enquiry_message:enquiry_message},
        success:function (data) {
            if(data==1)
            {
                alert("Message Updated Successfully");
                $("#formsuccess").modal("hide");
                window.location.href="tenant_enquiry_list.php";
            }
            else
            {
                alert("Message Updation Failed");
                $("#formsuccess").modal("hide");

            }
        }
    });
}*/


