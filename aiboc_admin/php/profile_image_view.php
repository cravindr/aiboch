<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/16/2016
 * Time: 5:03 PM
 */ ?>
<?php
session_start();
require_once ('../class/Admin.php');


        $logdetails = unserialize($_SESSION['ADMIN_LOG_DETAILS']);
        $path = "profile_images/";
        echo json_encode($path.$logdetails->img_url,JSON_UNESCAPED_SLASHES);
?>