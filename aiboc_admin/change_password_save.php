<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/16/2016
 * Time: 2:11 PM
 */ ?>
<?php
require_once ('smartysettings.php');
require_once ('class/Admin.php');
require_once ('authandicate.php');

$logdetails = unserialize($_SESSION['ADMIN_LOG_DETAILS']);

$old = $_POST['curpass'];
$new = $_POST['newpass'];

    $success = Admin::ChangePassword($logdetails->user_id,$old,$new);

            $smarty->display('link_css.tpl');
            $smarty->display('link_js.tpl');
            $smarty->display('model_success.tpl');

                if($success == 1)
                {
                    ?>
                    <script>
                        var html = '<div class="alert alert-success">User Password Change Successful.</div>';
                        $('.modal-body').html(html);
                        $('#formsuccess').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "change_password.php";
                        });
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                        var html = '<div class="alert alert-danger">User Password Change Unsuccessful.<br>Please Enter old Password Correctly.</div>';
                        $('.modal-body').html(html);
                        $('#formsuccess').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "change_password.php";
                        });
                    </script>
                    <?php
                }

?>