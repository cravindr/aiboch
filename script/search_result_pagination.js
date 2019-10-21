/**
 * Created by Andhu on 11/10/2016.
 */

$(document).ready(function() {
    $("#results" ).load( "fetch_pages.php"); //load initial records

    //executes code below when user click on pagination links
    $("#results").on( "click", ".pagination a", function (e){
        e.preventDefault();
        $(".loading-div").show(); //show loading element
        var page = $(this).attr("data-page"); //get page number from link
        $("#results").load("fetch_pages.php",{"page":page}, function(){ //get content from PHP page
            $(".loading-div").hide(); //once done, hide loading element
        });

    });


});

function slideshow(id) {
    $("#modal_header").html('<h3>Image Preview</h3>');
    //$("#modelmsg").load('slideshow.php?id=' + id);

$.ajax({
    url:'slideshow.php',
    data:{id:id},
    type:'post',
    success:function (data) {
        $("#modelmsg").html(data);
    }

});

}

/*   $("button[type='button']").click(function () {
 alert("ok");
 });*/

function fnInterested(buildingid) {

    $("#modelmsg").load("php/enquiry_form.php?building_id="+buildingid);
    $("#formsuccess").modal("show");
}

function fnSaveEnquiry()
{
    var building_id=$("#building_id").val();
    var tenant_id=$("#tenant_id").val();
    var enquiry_message=$("#enquiry_message").val();
    $.ajax({
       url:"eqnuiry_save.php",
        type:"post",
        data:{building_id:building_id,tenant_id:tenant_id,enquiry_message:enquiry_message},
        success:function (data) {

            $("#formsuccess").modal("hide");
        }
    });

}