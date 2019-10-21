<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/17/2016
 * Time: 3:48 PM
 */ ?>
<?php
require_once('smartysettings.php');
require_once('class/Admin.php');
require_once('renameImg.php');

$smarty->display('link_css.tpl');
$smarty->display('link_js.tpl');
$smarty->display('html_close.tpl');


    $logdetails = unserialize($_SESSION['ADMIN_LOG_DETAILS']);

        $img = $_FILES['profileimg']['name'];
        $path = "profile_images/";

        $rename = renameIMG($path,$img);
        //print_r($rename); exit;
        $storeimg = @Admin::ProfileImgSave($rename,$logdetails->user_id);

                if($storeimg == 1)
                {

                    $fullimg = $path.$rename;
                    $imgtmp = $_FILES['profileimg']['tmp_name'];

                   if(move_uploaded_file($imgtmp,$fullimg) == 1)
                   {
                       unlink($path.$logdetails->img_url);
                       $details= Admin::GetById($logdetails->user_id);
                       $_SESSION['ADMIN_LOG_DETAILS']= serialize($details);

                       ?>
                       <script>
                           // $('#uploadimg').modal('hide');
                           $('#uploadmsg').html('<div class="alert alert-success">Profile Image Uploaded.</div>');
                           $('#profileuploadmodal').modal('show');
                           $('button[type="button"]').click(function () {
                               window.location.href = "admin_own_profile_edit.php";
                           });
                       </script>
                       <?php

                   }
                   else
                   {
                       unlink($path.$logdetails->img_url);
                       $details= Admin::GetById($logdetails->user_id);
                       $_SESSION['ADMIN_LOG_DETAILS']= serialize($details);

                       if(@Admin::ProfileImgRemove($logdetails->user_id) == 1)
                       {
                           ?>
                           <script>
                               // $('#uploadimg').modal('hide');
                               $('#uploadmsg').html('<div class="alert alert-danger">Upload Failed.<br>Please Choose an Image.<br>Try again.</div>');
                               $('#profileuploadmodal').modal('show');
                               $('button[type="button"]').click(function () {
                                   window.location.href = "admin_own_profile_edit.php";
                               });
                           </script>
                           <?php
                       }
                   }
                }
                else
                {
                    ?>
                    <script>
                        // $('#uploadimg').modal('hide');
                        $('#uploadmsg').html('<div class="alert alert-danger">Profile Image Uploaded Failed.</div>');
                        $('#profileuploadmodal').modal('show');
                        $('button[type="button"]').click(function () {
                            window.location.href = "admin_own_profile_edit.php";
                        });
                    </script>
                    <?php
                }
?>