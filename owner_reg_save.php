<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/19/2016
 * Time: 4:55 PM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('aiboc_admin/class/Owner.php');

date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d H:i:s'); //Returns IST


$name = $_POST['oname'];
$email = $_POST['oemail'];
$mobile = $_POST['omobile'];
$pass = md5($_POST['opass']);
$address = $_POST['oaddress'];
$place = $_POST['oplace'];
$city = $_POST['ocity'];
$state = $_POST['ostate'];
$pin = $_POST['opin'];

    $obj = new Owner();

        $obj->name = $name;
        $obj->emailid = $email;
        $obj->mobile = $mobile;
        $obj->password = $pass;
        $obj->address = $address;
        $obj->place = $place;
        $obj->city = $city;
        $obj->state = $state;
        $obj->pin = $pin;
        $obj->cdate = $date;
        $obj->status = "active";

            $smarty->display('link_css.tpl');
            $smarty->display('link_js.tpl');
            $smarty->display('modal_success.tpl');

                if($obj->Save() == true)
                {
                    ?>
                    <script>
                        $('#modelmsg').html('<div class="alert alert-success"><center><strong>Success!!!</strong><br>You are Registered Successfully.</center></div>');
                        $('#formsuccess').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "dashboard.php";
                        });
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                        $('#modelmsg').html('<div class="alert alert-danger"><center><strong>Failed!!!</strong><br>Sorry Unsuccessful.</center></div>');
                        $('#formsuccess').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "register_owner.php";
                        });
                    </script>
                    <?php
                }
?>