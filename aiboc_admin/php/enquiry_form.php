<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 12/12/2016
 * Time: 5:54 PM
 */
require_once ("smartysettings.php");
require_once ("../class/Enquiry.php");
$enquiry_id=$_POST['id'];
$var=Enquiry::GetById($enquiry_id);




echo json_encode(["enquiry_id"=>$var->enquiry_id,"comment"=>$var->comments,"status"=>$var->status]);

/*$status=$var->status;

$smarty->assign("enquiry_id",$enquiry_id);
$smarty->assign("progress_status","'$status'");
$smarty->assign("comments",$var->comments);
$smarty->display("enquiry_form.tpl");
$smarty->display('ckeditor_js.tpl');
$smarty->display('datepicker_js.tpl');*/

?>