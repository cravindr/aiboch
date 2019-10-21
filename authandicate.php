<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/20/2016
 * Time: 12:17 PM
 */
?>
<?php
require_once ('aiboc_admin/class/Owner.php');

$details = unserialize($_SESSION['OWNER_LOGIN_DETAILS']);

if($details == "")
{
    header("Location: sigin.php");
}
?>