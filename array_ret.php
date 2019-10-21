<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/15/2016
 * Time: 1:25 PM
 */
$arr=array();
for ($i=0 ;$i<10; ++$i)
{
    array_push($arr,array("value"=>$i,"lable" => $i."lable"));
}
print_r(json_encode($arr));
?>