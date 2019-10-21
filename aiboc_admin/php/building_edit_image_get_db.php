<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/7/2016
 * Time: 3:32 PM
 */
?>
<?php
session_start();
require_once ('../class/Buidling_Image.php');

$id = $_SESSION['BUILDING_EDIT_ID'];

$getimgs = Buidling_Image::GetGalleryImageByID($id);
$path = "../".BUILDING_IMGAGES;
foreach ($getimgs as $setimgs)
{
    $imgs[] = $path.$setimgs['img_url'];
}
echo json_encode($imgs,JSON_UNESCAPED_SLASHES);
?>