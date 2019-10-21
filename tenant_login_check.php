<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/20/2016
 * Time: 12:45 PM
 */
?>
<?php
//require_once ('smartysettings.php');

session_start();
require_once ('aiboc_admin/class/Tenant.php');

$username = $_POST['lusername'];
$pass = $_POST['lpass'];

    //$logdetails = Owner::LoginOwner($username,$pass);
$logdetails=Tenant::Login($username,$pass);


        if($logdetails->login_status=='true')
        {
            $_SESSION['TENANT_LOGIN_DETAILS'] = serialize($logdetails);
            header("Location: tenantdashboard.php");
        }
        else
        {
            header("Location: tenant_sigin.php");
        }
?>