<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/20/2016
 * Time: 12:45 PM
 */
?>
<?php
require_once ('config.php');
require_once ('smartysettings.php');
require_once ('aiboc_admin/class/Owner.php');
unset($_SESSION['TENANT_LOGIN_DETAILS']);

$username = $_POST['lusername'];
$pass = $_POST['lpass'];

    $logdetails = Owner::LoginOwner($username,$pass);

        if($logdetails->login_Status == "true")
        {
            $_SESSION['OWNER_LOGIN_DETAILS'] = serialize($logdetails);
            header("Location: dashboard.php");
        }
        else
        {
            header("Location: sigin.php");
        }
?>