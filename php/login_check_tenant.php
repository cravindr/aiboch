<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/8/2016
 * Time: 3:46 PM
 */
?>

<?php
//require_once ('smartysettings.php');

session_start();
require_once ('../aiboc_admin/class/Tenant.php');

$username = $_POST['lusername'];
$pass = $_POST['lpass'];

//$logdetails = Owner::LoginOwner($username,$pass);
$logdetails=Tenant::Login($username,$pass);




if($logdetails->login_status=='true')
{
    $_SESSION['TENANT_LOGIN_DETAILS'] = serialize($logdetails);
   // header("Location: loginindex.php");
    echo "1";
}
else
{
    echo "0";
}
?>
