<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/16/2016
 * Time: 3:28 PM
 */ ?>
<?php
require_once ('smartysettings.php');
require_once ('class/Admin.php');
require_once ('authandicate.php');
require_once ('class/IndianTime.php');

$logdetails = unserialize($_SESSION['ADMIN_LOG_DETAILS']);

$datetime = IndianTime::CurrentTime();

$username = $_POST['uname'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$role = $_POST['role'];
$address = $_POST['address'];
$place = $_POST['place'];

    $obj = new Admin();

        $obj->user_id = $_SESSION['ADMIN_USER_EDIT_ID'];
        $obj->user_name = $username;
        $obj->name = $name;
        $obj->emailid = $email;
        $obj->mobile = $mobile;
        $obj->role = $role;
        $obj->address = $address;
        $obj->place = $place;
        $obj->modified = $datetime;
        $obj->status = "active";

            $smarty->display('link_css.tpl');
            $smarty->display('link_js.tpl');
            $smarty->display('model_success.tpl');



                if($obj->Update() == 1)
                {
                    ?>
                    <script>
                        var html = '<div class="alert alert-success">User Updated Successful.</div>';
                        $('.modal-body').html(html);
                        $('#formsuccess').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "admin_add_user_list.php";
                        });
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                        var html = '<div class="alert alert-danger">User Updated Unsuccessful.</div>';
                        $('.modal-body').html(html);
                        $('#formsuccess').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "admin_add_user_edit.php";
                        });
                    </script>
                    <?php

                }
?>