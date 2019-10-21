<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/22/2016
 * Time: 11:46 AM
 */
require_once ("smartysettings.php");
require_once ("aiboc_admin/class/Buidling_Image.php");
require_once ("config.php");
//$smarty->display('slideshow.tpl');
$id=$_POST['id'];
$imagelist=Buidling_Image::GetGalleryImageByBuildingID($id);
$smarty->display('slideshow_open.tpl');



if(count($imagelist)==0)
{
    $smarty->assign("image_url",SITE_IMAGES."no-image-found.gif");
    $smarty->assign("active",'active');
    $smarty->display('slideshow_body.tpl');
}
else
{
    $row=1;
    foreach($imagelist as $image)
    {
        $active = (1 == $row) ? 'active' : '';
        $smarty->assign("image_url",BUILDING_IMGAGES.$image['img_url']);
        $smarty->assign("active",$active);
        $smarty->display('slideshow_body.tpl');
        $row ++;
    }
}


$smarty->display('slideshow_close.tpl');

?>