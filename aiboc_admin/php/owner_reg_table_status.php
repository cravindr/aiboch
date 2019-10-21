<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/25/2016
 * Time: 1:55 PM
 */
?>
<?php
session_start();
require_once ('../class/Owner.php');

    $id = $_POST['id'];

        $status = Owner::Status($id);

            if($status == '1')
            {
                echo "success";
            }
            else
            {
                echo "failed";
            }
?>