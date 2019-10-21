<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/7/2016
 * Time: 12:39 PM
 */
?>

<?php
require_once ('smartysettings.php');
require_once ('aiboc_admin/class/Tenant.php');

$getlogdetails = unserialize($_SESSION['TENANT_LOGIN_DETAILS']);

$userid = $getlogdetails->tenant_id;

$oldpass = $_POST['curpass'];
$newpass = $_POST['newpass'];

$getout = Tenant::ChangePassword($userid,$oldpass,$newpass);

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
            window.location.href = "tenantdashboard.php";
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
            window.location.href = "tenantdashboard.php";
        });
    </script>
    <?php
}
?>
