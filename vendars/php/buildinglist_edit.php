<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/25/2016
 * Time: 12:29 PM
 */
?>
<?php
session_start();

$id = $_POST['id'];

    $_SESSION['BUILD_LIST_EDIT_ID'] = $id;

        if(isset($_SESSION['BUILD_LIST_EDIT_ID']))
        {
            echo "1";
        }
        else
        {
            echo "0";
        }
?>