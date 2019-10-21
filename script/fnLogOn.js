/**
 * Created by Ravindran on 11/8/2016.
 */
function fnLogon()
{
    var mobile=$("input[name='mobile']").val();
    var password=$("input[name='password']").val();
    var selected_place=$("input[name='selected_place']").val();
   // alert(selected_place);

    $.ajax({
        url: 'php/login_check_tenant.php',
        data: {lusername:mobile,
               lpass:password,
               lcity:selected_place },
        type: 'POST',
        success: function (data) {

            if(data ==1)
            {
                alert("You are successfully logged on ");
                //window.location.href="index.php";
                window.location.href="search.php?place=" + selected_place;
            }
            else
            {
                alert("You login failed");
            }
        }
    });

}