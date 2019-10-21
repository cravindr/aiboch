<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 1/4/2017
 * Time: 4:34 PM
 */ ?>
<?php
session_start();
require_once ('../class/Tenant.php');

    $id = $_POST['id'];

$status = Tenant::Status($id);

echo $status;
?>