<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/4/2016
 * Time: 5:27 PM
 */
session_start();
require_once ('../aiboc_admin/class/Buidling_Image.php');

$editid = $_SESSION['BUILD_LIST_EDIT_ID'];

$getimgs = Buidling_Image::GetGalleryImageByID($editid);
$path = BUILDING_IMGAGES;
    foreach ($getimgs as $setimgs)
    {
        $imgs[] = $path.$setimgs['img_url'];
    }
echo json_encode($imgs,JSON_UNESCAPED_SLASHES);
?>