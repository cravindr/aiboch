<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/23/2016
 * Time: 3:49 PM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('class/SMS.php');
require_once ('class/Admin.php');

$smarty->display('link_css.tpl');
$smarty->assign('titletxt','welcome');
$smarty->display('title.tpl');
$smarty->display('link_js.tpl');
$smarty->display('modal_forgotpassword.tpl');


    $emailid = $_POST['email'];

        $getfor = @Admin::ForgotPassword($emailid);

            if($getfor->database->rows == 1)
            {
                $otp = mt_rand(100000, 999999);
                $sendotp = @Admin::Otp($getfor->user_id,$otp);
                $msg = "Welcome to AIBOC. Your One Time Password(OTP) is .$otp.";
                $sms = @SMS::sendSMS($getfor->mobile_no,$msg);

                    if($sendotp == 1 && $sms == "success")
                    {
                        ?>
                        <script>
                            var html = '<div class="alert alert-success"><center><strong>Success...!!!</strong><br>Your One Time Password send Successfull.</center></div>';
                            $('#forgotresult').html(html);
                            $('#modalforgotpass').modal('show');
                        </script>
                        <?php
                    }
                    else
                    {
                        ?>
                        <script>
                            var html = '<div class="alert alert-warning"><center><strong>Failed...!!!</strong><br>Some Undefined problem. try again.</center></div>';
                            $('#forgotresult').html(html);
                            $('#modalforgotpass').modal('show');
                        </script>
                        <?php
                    }
            }
            else
            {
                ?>
                <script>
                    var html = '<div class="alert alert-danger"><center><strong>Failed...!!!</strong><br>Check your Registered Email address</center></div>';
                    $('#forgotresult').html(html);
                    $('#modalforgotpass').modal('show');
                </script>
                <?php
            }
?>
<script>
    $('button[data-dismiss="modal"]').click(function () {
        window.location.href = "index.php";
    });
</script>
<?php
?>
