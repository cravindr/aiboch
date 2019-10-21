/**
 * Created by Andhu on 11/8/2016.
 */

function fnGetOTP()
{
    var mobile=$("input[name='mobile']").val();

    $.ajax({
        url: 'php/generate_otp.php',
        data: {mobile:mobile},
        type: 'POST',
        success: function (data) {
            if(data=="success")
            {
                alert("OTP has generated and send to your Mobile number.Use this OTP to logon");
            }
            else
            {
                alert("You are not a regisered member Please Register");
            }
        }
    });

}