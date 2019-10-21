<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/7/2016
 * Time: 11:56 AM
 */
?>
<?php
session_start();
require_once ('../aiboc_admin/class/Tenant.php');

$id = $_POST['id'];

$getdelete = Tenant::DeleteEnquiry($id);

if($getdelete == 1)
{
    echo "1";
}
else
{
    echo "0";
}
?>
