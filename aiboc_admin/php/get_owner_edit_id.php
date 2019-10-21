<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/29/2016
 * Time: 3:13 PM
 */
?>
<?php
session_start();
$id = $_POST['id'];
$edit = $_POST['getid'];

$_SESSION['OWNER_EDIT_ID'] = $id;
$_SESSION['BUILDING_EDIT_ID'] = $id;
$_SESSION['OWNER_LIST_ORDER_ID'] = $edit;
$_SESSION['ADMIN_USER_EDIT_ID'] = $id;
$_SESSION['BANK_EDIT_ID'] = $id;
$_SESSION['ROLE_EDIT_ID'] = $id;
?>