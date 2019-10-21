<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/3/2016
 * Time: 1:11 PM
 */
?>
<?php
//session_start();
if(!isset($_SESSION))
{
    session_start();
}
require_once ('aiboc_admin/class/Tenant.php');

$details = unserialize($_SESSION['TENANT_LOGIN_DETAILS']);

if($details->login_status != "true")
{
    header("Location: tenant_sigin.php");
}
?>