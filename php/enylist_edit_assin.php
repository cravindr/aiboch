<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/4/2016
 * Time: 12:13 PM
 */


session_start();

$id = $_POST['id'];

$_SESSION['ENQUIRY_LIST_EDIT_ID'] = $id;

if(isset($_SESSION['ENQUIRY_LIST_EDIT_ID']))
{
    echo "1";
}
else
{
    echo "0";
}
?>