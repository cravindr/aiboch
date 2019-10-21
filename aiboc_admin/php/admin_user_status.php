<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/16/2016
 * Time: 12:34 PM
 */ ?>
<?php
require_once ('../class/Admin.php');

    $id = $_POST['id'];

    echo Admin::Status($id);
?>