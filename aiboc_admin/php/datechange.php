<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 1/13/2017
 * Time: 12:09 PM
 */ ?>
<?php
session_start();

    $date = $_POST['dates'];
    $fordate =  date("Y-m-d", strtotime($date) );
    $_SESSION['CHANGE_DATE'] = $fordate;
    $_SESSION['TENANT_DATE'] = $fordate;

?>