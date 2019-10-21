<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/21/2016
 * Time: 2:56 PM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('aiboc_admin/class/Owner.php');

$logdetails = unserialize($_SESSION['OWNER_LOGIN_DETAILS']);

date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d H:i:s'); //Returns IST

$name = $_POST['oname'];
$email = $_POST['oemail'];
$mobile = $_POST['omobile'];
$address = $_POST['oaddress'];
$place = $_POST['oplace'];
$city = $_POST['ocity'];
$state = $_POST['ostate'];
$pin = $_POST['opin'];

        $obj = new Owner();

            $obj->owner_id = $logdetails->owner_id;
            $obj->name = $name;
            $obj->emailid = $email;
            $obj->mobile = $mobile;
            $obj->address = $address;
            $obj->place = $place;
            $obj->city = $city;
            $obj->state = $state;
            $obj->pin = $pin;
            $obj->mdate = $date;
            $obj->status = "active";

                $smarty->display('link_css.tpl');
                $smarty->display('link_js.tpl');
                $smarty->display('modal_success.tpl');

                        if($obj->Update() == 1)
                        {
                            ?>
                            <script>
                                $('#modelmsg').html('<div class="alert alert-success"><center><strong>Success!!!</strong><br>You are Updated Successfully.</center></div>');
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
                                $('#modelmsg').html('<div class="alert alert-danger"><center><strong>Failed!!!</strong><br>Sorry Updated Unsuccessful.</center></div>');
                                $('#formsuccess').modal('show');
                                $('button[type="button"]').click(function () {
                                    window.location.href = "owner_profile_edit.php";
                                });
                            </script>
                            <?php
                        }

?>