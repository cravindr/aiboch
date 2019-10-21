<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/10/2016
 * Time: 1:37 PM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('config.php');
require_once ('class/Building.php');
require_once ('class/Owner.php');
require_once ('class/IndianTime.php');
require_once ('../renameImg.php');


$ownerid = $_POST['ownerid'];
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

        $obj->owner_id = $ownerid;
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
        $obj->cdate = IndianTime::CurrentTime();
        $obj->status = "inactive";



            $smarty->display('link_css.tpl');
            $smarty->display('link_js.tpl');
            $smarty->display('building_register_modal_form.tpl');

                $imgfiles = $_FILES['ourimges']['name'];




                        if($obj->Save() == 1)
                        {
                            for($i = 0; $i < count($imgfiles); $i++)
                            {
                                $imgtmp = $_FILES['ourimges']['tmp_name'][$i];
                                $target = "../".BUILDING_IMGAGES;
                                $imgs = $_FILES['ourimges']['name'][$i];
                                $renameimgs = renameIMG($target,$imgs);

                                Building::BuildingImageUpload($ownerid,$obj->database->inserted_id,$renameimgs,$obj->cdate,$obj->status);
                                $imgtarget = $target.$renameimgs;

                                move_uploaded_file($imgtmp,$imgtarget);
                            }

                            ?>
                            <script>
                                $('#viewmodallistowner').html('<div class="alert alert-success"><center><strong>Success!!!</strong><br>Your Building Posted Successfully.</center></div>');
                                $('#buildregmodal').modal('show');
                                $('button[type="button"]').click(function () {
                                    window.location.href = "building_list_order_by_owner.php";
                                });
                            </script>
                            <?php
                        }
                        else
                        {
                            ?>
                            <script>
                                $('#viewmodallistowner').html('<div class="alert alert-danger"><center><strong>Failed!!!</strong><br>Sorry Unsuccessful.</center></div>');
                                $('#buildregmodal').modal('show');
                                $('button[type="button"]').click(function () {
                                    window.location.href = "building_list_order_by_owner.php";
                                });
                            </script>
                            <?php
                        }
?>


