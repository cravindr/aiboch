<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/29/2016
 * Time: 1:12 PM
 */ ?>
<?php
session_start();
require_once ('../class/Bank.php');

$id = $_POST['id'];

echo $status = Bank::Status($id);

?>
