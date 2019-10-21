<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/16/2016
 * Time: 11:55 AM
 */ ?>
<?php
session_start();
require_once ('../class/Admin.php');

$id = $_SESSION['ADMIN_USER_EDIT_ID'];

$getval = Admin::GetById($id);

echo json_encode($getval);
?>