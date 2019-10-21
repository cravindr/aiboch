<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 10/22/2016
 * Time: 11:30 PM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('aiboc_admin/class/Building.php');
require_once ('aiboc_admin/class/Owner.php');
require_once ('aiboc_admin/class/IndianTime.php');
require_once ('aiboc_admin/class/Buidling_Image.php');
require_once ('renameImg.php');

$getlogdetails = unserialize($_SESSION['OWNER_LOGIN_DETAILS']);

$building_id = $_SESSION['BUILD_LIST_EDIT_ID'];


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
            $smarty->display('modal_success.tpl');


            $imgsfiles = $_FILES['editimagefile']['name'];
            //print_r($_FILES); exit;
                $target = BUILDING_IMGAGES;
                $getoldimgs = Buidling_Image::GetGalleryImageByID($building_id);
                foreach ($getoldimgs as $getimgdelete)
                {
                    $oldimg[] = $getimgdelete['img_url'];
                }

                    if($obj->Update() == 1)
                    {
                        if(in_array("", $_FILES['editimagefile']['name']))
                        {
                            ?>
                            <script>
                                $('#modelmsg').html('<div class="alert alert-success"><center><strong>Success!!!</strong><br>Your Building Updated Successfully.</center></div>');
                                $('#formsuccess').modal('show');
                                $('button[type="button"]').click(function () {
                                    window.location.href = "owner_building_list.php";
                                });
                            </script>
                            <?php
                        }
                        elseif ($imgsfiles == $oldimg)
                        {
                            ?>
                            <script>
                                $('#modelmsg').html('<div class="alert alert-success"><center><strong>Success!!!</strong><br>Your Building Updated Successfully.</center></div>');
                                $('#formsuccess').modal('show');
                                $('button[type="button"]').click(function () {
                                    window.location.href = "owner_building_list.php";
                                });
                            </script>
                            <?php
                        }
                        else
                        {
                            $target = BUILDING_IMGAGES;
                            $getoldimgs = Buidling_Image::GetGalleryImageByID($building_id);
                            foreach ($getoldimgs as $getimgdelete)
                            {
                                $oldimages = $target.$getimgdelete['img_url'];
                                unlink($oldimages);
                                Buidling_Image::DeleteImages($getimgdelete['gallery_id']);
                            }
                            for($i = 0; $i < count($imgsfiles); $i++)
                            {
                                $imgtmp = $_FILES['editimagefile']['tmp_name'][$i];

                                $imgs = $_FILES['editimagefile']['name'][$i];
                                $renameimgs = renameIMG($target,$imgs);

                                Building::BuildingImageUpload($getlogdetails->owner_id,$building_id,$renameimgs,$obj->mdate,$obj->status);
                                $imgtarget = $target.$renameimgs;

                                move_uploaded_file($imgtmp,$imgtarget);
                            }

                                ?>
                                <script>
                                    $('#modelmsg').html('<div class="alert alert-success"><center><strong>Success!!!</strong><br>Your Building Updated Successfully.</center></div>');
                                    $('#formsuccess').modal('show');
                                    $('button[type="button"]').click(function () {
                                        window.location.href = "owner_building_list.php";
                                    });
                                </script>
                                <?php
                        }
                    }
                    else
                    {
                        ?>
                        <script>
                            $('#modelmsg').html('<div class="alert alert-danger"><center><strong>Failed!!!</strong><br>Sorry Building Updated Unsuccessful.</center></div>');
                            $('#formsuccess').modal('show');
                            $('button[type="button"]').click(function () {
                                window.location.href = "owner_building_edit.php";
                            });
                        </script>
                        <?php
                    }

?>

