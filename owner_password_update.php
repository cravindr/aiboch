<?php
require_once ('smartysettings.php');
require_once ('aiboc_admin/class/Owner.php');

$getlogdetails = unserialize($_SESSION['OWNER_LOGIN_DETAILS']);

$userid = $getlogdetails->owner_id;

$oldpass = $_POST['curpass'];
$newpass = $_POST['newpass'];

    $getout = Owner::ChangePassword($oldpass,$userid,$newpass);

        $smarty->display('link_css.tpl');
        $smarty->display('link_js.tpl');
        $smarty->display('modal_success.tpl');

        if($getout == 1)
        {
            ?>
            <script>
                $('#modelmsg').html('<div class="alert alert-success"><strong>Success!!!</strong>&nbsp;Password Successfully Updated</div>');
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
                $('#modelmsg').html('<div class="alert alert-danger"><strong>Failed!!!</strong>&nbsp;Password Does Not Updated</div>');
                $('#formsuccess').modal('show');
                $('button[type="button"]').click(function () {
                    window.location.href = "dashboard.php";
                });
            </script>
            <?php
        }
?>