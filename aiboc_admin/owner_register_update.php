<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/30/2016
 * Time: 12:53 PM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('class/Owner.php');
require_once ('authandicate.php');

    $id = $_SESSION['OWNER_EDIT_ID'];

        date_default_timezone_set("Asia/Kolkata");
        $date = date('Y-m-d H:i:s'); //Returns IST

            $name = $_POST['oname'];
            $email = $_POST['oemail'];
            $mobile = $_POST['omobile'];
            $address = $_POST['oaddress'];
            $place = $_POST['oplace'];
            $city = $_POST['ocity'];
            $state = $_POST['ostate'];
            $pin = $_POST['opin'];

                $obj = new Owner();

                    $obj->owner_id = $id;
                    $obj->name = $name;
                    $obj->emailid = $email;
                    $obj->mobile = $mobile;
                    $obj->address = $address;
                    $obj->place = $place;
                    $obj->city = $city;
                    $obj->state = $state;
                    $obj->pin = $pin;
                    $obj->mdate = $date;
                    $obj->status = "active";

                        $smarty->display('html_open.tpl');

                        $smarty->display('head_open.tpl');
                        $smarty->assign('titletxt','welcome');
                        $smarty->display('title.tpl');
                        $smarty->display('link_css.tpl');
                        $smarty->display('selectbox_css.tpl');
                        $smarty->display('head_close.tpl');

                        $smarty->display('body_open.tpl');

                        $smarty->display('container_body_open.tpl');

                        $smarty->display('main_container_open.tpl');
                        $smarty->display('header_left.tpl');
                        $smarty->display('top_navigation.tpl');

                        $smarty->display('body_content_open.tpl');
                        $smarty->display('top_tiles.tpl');

                        $id = $_SESSION['OWNER_EDIT_ID'];

                        $getowner = Owner::GetById($id);

                        $smarty->assign('editname',$getowner->name);
                        $smarty->assign('editemail',$getowner->emailid);
                        $smarty->assign('editmobile',$getowner->mobile);
                        $smarty->assign('editaddress',$getowner->address);
                        $smarty->assign('editplace',$getowner->place);
                        $smarty->assign('editcity',$getowner->city);
                        $smarty->assign('editstate',$getowner->state);
                        $smarty->assign('editpin',$getowner->pin);

                        $smarty->display('owner_edit_form_admin.tpl');
                        $smarty->display('body_content_close.tpl');

                        $smarty->display('main_container_close.tpl');

                        $smarty->display('link_js.tpl');
                        $smarty->display('selectbox_js.tpl');
                        $smarty->display('owner_status_value_assign_js.tpl');
                        $smarty->display('container_body_close.tpl');

                        $smarty->display('body_close.tpl');

                        $smarty->display('html_close.tpl');

                            if($obj->Update() == 1)
                            {
                                ?>
                                <script>
                                    var html = '<div class="alert alert-success">Owner Edited Success!!!</div>';
                                    $('#rescout').html(html);
                                </script>
                                <?php
                            }
                            else
                            {
                                ?>
                                <script>
                                    var html = '<div class="alert alert-danger">Owner Edited Failed!!!</div>';
                                    $('#rescout').html(html);
                                </script>
                                <?php
                            }


?>