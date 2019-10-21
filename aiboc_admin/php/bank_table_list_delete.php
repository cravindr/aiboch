<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/29/2016
 * Time: 4:14 PM
 */ ?>
<?php
session_start();
require_once ('../class/Bank.php');

    $id = $_POST['id'];

    echo Bank::Delete($id);
?>