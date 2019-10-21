<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/29/2016
 * Time: 2:04 PM
 */ ?>
<?php
session_start();
require_once ('../class/Bank.php');

    $id = $_POST['id'];

    $getall = Bank::GetById($id);

echo json_encode($getall);
?>