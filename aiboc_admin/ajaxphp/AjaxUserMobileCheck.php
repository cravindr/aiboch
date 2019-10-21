<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/21/2016
 * Time: 3:10 PM
 */
?>
<?php
require ('../class/Owner.php');

/* RECEIVE VALUE */
$validateValue=$_REQUEST['fieldValue'];
$validateId=$_REQUEST['fieldId'];

$validateError= "This Email ID is already taken";
$validateSuccess= "This Email ID is available";


$result = Owner::ValidateMobileNo($validateValue);

/* RETURN VALUE */
$arrayToJs = array();
$arrayToJs[0] = $validateId;


if($result ==0){		// validate??
    $arrayToJs[1] = true;			// RETURN TRUE
    echo json_encode($arrayToJs);			// RETURN ARRAY WITH success
}else{
    for($x=0;$x<1000000;$x++){
        if($x == 990000){
            $arrayToJs[1] = false;
            echo json_encode($arrayToJs);		// RETURN ARRAY WITH ERROR
        }
    }

}
?>
