<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/7/2016
 * Time: 4:11 PM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('class/Building.php');
require_once ('class/Owner.php');
require_once ('class/IndianTime.php');
require_once ('class/Buidling_Image.php');
require_once ('../renameImg.php');

$getlogdetails = unserialize($_SESSION['OWNER_LOGIN_DETAILS']);

$building_id = $_SESSION['BUILDING_EDIT_ID'];


$address = $_POST['raddress'];
$location = $_POST['rlocation'];
$place = $_POST['rplace'];
$state = $_POST['rstate'];
$pin = $_POST['rpin'];
$building_type = $_POST['rbuildingtype'];
$room_options = $_POST['rroomsoptions'];
$carpet_area = $_POST['rcarpetarea'];
$excepted_rent = $_POST['rexceptedrent'];
$maintance_cost = $_POST['rmaincost'];
$water_facility = implode(",",$_POST['rwaterfacility']);
$power_backup = implode(",",$_POST['rpowerbackup']);
$lift_facility = $_POST['rlift'];
$parking_area = $_POST['rparking'];
$other_facilities = $_POST['rotherfaci'];
$any_conditions = $_POST['rconditions'];


        $obj = new Building();

        $obj->building_id = $building_id;
        $obj->owner_id = $getlogdetails->owner_id;
        $obj->address = $address;
        $obj->location = $location;
        $obj->place = $place;
        $obj->state = $state;
        $obj->pin = $pin;
        $obj->building_type = $building_type;
        $obj->room_options = $room_options[0];
        $obj->no_of_toilets = $room_options[1];
        $obj->carpet_area = $carpet_area;
        $obj->excepted_rent = $excepted_rent;
        $obj->maintance_cost = $maintance_cost;
        $obj->water_facility = $water_facility;
        $obj->power_backup = $power_backup;
        $obj->lift_facility = $lift_facility;
        $obj->parking_area = $parking_area;
        $obj->other_facilities = $other_facilities;
        $obj->any_conditions = $any_conditions;
        $obj->mdate = IndianTime::CurrentTime();
        $obj->status = "inactive";

$smarty->display('link_css.tpl');
$smarty->display('link_js.tpl');



$imgsfiles = $_FILES['ourimges']['name'];
//print_r($_FILES); exit;
$target = "../".BUILDING_IMGAGES;
$getoldimgs = Buidling_Image::GetGalleryImageByID($building_id);
foreach ($getoldimgs as $getimgdelete)
{
    $oldimg[] = $getimgdelete['img_url'];
}

if($obj->Update() == 1) {
    if (in_array("", $_FILES['ourimges']['name'])) {
        ?>
        <script>
            var html = '<div class="alert alert-success">Building Edited Success!!!</div>';
            $('#rescout').html(html);
        </script>
        <?php
        ?>
        }
        elseif ($imgsfiles == $oldimg)
        {
        ?>
        <script>
            var html = '<div class="alert alert-danger">Building Edited Failed!!!</div>';
            $('#rescout').html(html);
        </script>
        <?php
    } else {
        $target = "../" . BUILDING_IMGAGES;
        $getoldimgs = Buidling_Image::GetGalleryImageByID($building_id);
        foreach ($getoldimgs as $getimgdelete) {
            $oldimages = $target . $getimgdelete['img_url'];
            unlink($oldimages);
            Buidling_Image::DeleteImages($getimgdelete['gallery_id']);
        }
        for ($i = 0; $i < count($imgsfiles); $i++) {
            $imgtmp = $_FILES['ourimges']['tmp_name'][$i];

            $imgs = $_FILES['ourimges']['name'][$i];
            $renameimgs = renameIMG($target, $imgs);

            Building::BuildingImageUpload($getlogdetails->owner_id, $building_id, $renameimgs, $obj->mdate, $obj->status);
            $imgtarget = $target . $renameimgs;

            move_uploaded_file($imgtmp, $imgtarget);
        }

        ?>
        <script>
            var html = '<div class="alert alert-success">Building Edited Success!!!</div>';
            $('#rescout').html(html);
        </script>
        <?php
        ?>
        }
        }
        else
        {
        ?>
        <script>
            var html = '<div class="alert alert-danger">Building Edited Failed!!!</div>';
            $('#rescout').html(html);
        </script>
        <?php
    }
}
?>