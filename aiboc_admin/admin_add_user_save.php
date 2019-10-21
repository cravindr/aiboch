<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/13/2016
 * Time: 3:56 AM
 */ ?>
<?php
require_once ('smartysettings.php');
require_once ('class/Admin.php');
require_once ('authandicate.php');
require_once ('class/IndianTime.php');

$datetime = IndianTime::CurrentTime();

$username = $_POST['uname'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['pass'];
$role = $_POST['role'];
$address = $_POST['address'];
$place = $_POST['place'];

    $obj = new Admin();

    $obj->user_name = $username;
    $obj->name = $name;
    $obj->emailid = $email;
    $obj->mobile = $mobile;
    $obj->password = $password;
    $obj->role = $role;
    $obj->address = $address;
    $obj->place = $place;
    $obj->created = $datetime;
    $obj->status = "active";

        $smarty->display('link_css.tpl');
        $smarty->display('link_js.tpl');
        $smarty->display('model_success.tpl');



        if($obj->Save() == 1)
        {
            ?>
            <script>
                var html = '<div class="alert alert-success">User Created Successful.</div>';
                $('.modal-body').html(html);
                $('#formsuccess').modal('show');
                $('button[type="button"]').click(function () {
                    window.location.href = "admin_add_user.php";
                });
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
                var html = '<div class="alert alert-danger">User Created Unsuccessful.</div>';
                $('.modal-body').html(html);
                $('#formsuccess').modal('show');
                $('button[type="button"]').click(function () {
                    window.location.href = "admin_add_user.php";
                });
            </script>
            <?php

        }


?>