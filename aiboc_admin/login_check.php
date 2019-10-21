<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10-Oct-16
 * Time: 1:13 PM
 */ ?>
<?php
require_once ('smartysettings.php');
require_once ('class/Admin.php');

$smarty->assign('titletxt','welcome');
$smarty->display('title.tpl');
$smarty->display('link_css.tpl');
$smarty->display('link_js.tpl');
$smarty->display('login.tpl');

    $username = $_POST['username'];
    $password = $_POST['password'];

        $getlogin = @Admin::LoginAdmin($username,$password);


                if($getlogin->database->rows == 1)
                {
                    $_SESSION['ADMIN_LOG_DETAILS'] = serialize($getlogin);
                    @Admin::DeleteOtp($getlogin->user_id);

                        ?>
                            <script>
                                var html = '<div class="alert alert-success"><center><strong>Success..!!!</strong><br>Login Successfull.</center></div>';
                                $('#resulttxt').html(html);
                                window.location.href = "dashboard.php";
                            </script>
                        <?php
                }
                else
                {
                        ?>
                            <script>
                                var html = '<div class="alert alert-danger"><center><strong>Login Failed...!!!</strong><br>Check your Username && Passowrd.</center></div>';
                                $('#resulttxt').html(html);
                            </script>
                        <?php
                }

?>
