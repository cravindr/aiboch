<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/30/2016
 * Time: 10:29 AM
 */
?>
<?php
require_once ('smartysettings.php');
require_once ('class/Owner.php');
require_once ('authandicate.php');

date_default_timezone_set("Asia/Kolkata");
$date = date('Y-m-d H:i:s'); //Returns IST


$name = $_POST['oname'];
$email = $_POST['oemail'];
$mobile = $_POST['omobile'];
$pass = md5($_POST['opass']);
$address = $_POST['oaddress'];
$place = $_POST['oplace'];
$city = $_POST['ocity'];
$state = $_POST['ostate'];
$pin = $_POST['opin'];

    $obj = new Owner();

        $obj->name = $name;
        $obj->emailid = $email;
        $obj->mobile = $mobile;
        $obj->password = $pass;
        $obj->address = $address;
        $obj->place = $place;
        $obj->city = $city;
        $obj->state = $state;
        $obj->pin = $pin;
        $obj->cdate = $date;
        $obj->status = "active";

                $smarty->display('html_open.tpl');

                $smarty->display('head_open.tpl');
                $smarty->assign('titletxt','welcome');
                $smarty->display('title.tpl');
                $smarty->display('link_css.tpl');
                $smarty->display('selectbox_css.tpl');
                $smarty->display('validation_engine_css.tpl');
                $smarty->display('head_close.tpl');

                $smarty->display('body_open.tpl');

                $smarty->display('container_body_open.tpl');

                $smarty->display('main_container_open.tpl');
                $smarty->display('header_left.tpl');
                $smarty->display('top_navigation.tpl');

                $smarty->display('body_content_open.tpl');
                $smarty->display('top_tiles.tpl');
                $smarty->display('owner_register_form_admin.tpl');
                $smarty->display('body_content_close.tpl');

                $smarty->display('main_container_close.tpl');

                $smarty->display('link_js.tpl');
                $smarty->display('selectbox_js.tpl');
                $smarty->display('validation_engine_js.tpl');
                $smarty->display('owner_status_value_assign_js.tpl');
                $smarty->display('container_body_close.tpl');

                $smarty->display('body_close.tpl');

                $smarty->display('html_close.tpl');

                        if($obj->Save() == 1)
                        {
                            ?>
                            <script>
                                var html = '<div class="alert alert-success">Owner Registration Success!!!</div>';
                                $('.well').html(html);
                            </script>
                            <?php
                        }
                        else
                        {
                            ?>
                            <script>
                                var html = '<div class="alert alert-danger">Owner Registration Failed!!!</div>';
                                $('.well').html(html);
                            </script>
                            <?php
                        }
?>