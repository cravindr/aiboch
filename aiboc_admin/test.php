<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 1/5/2017
 * Time: 1:58 PM
 */
require_once ("class/Database.php");

$x=['name'=>"ravi",'address'=>"29,30 D.B Road",'Place'=>"Coimbatore"];
print_r($x);
echo "<br>";



foreach ($x as $arr=>$arr_value)
{
    echo "$arr  = $arr_value"."<br>";
}
echo "is array.". is_array($x);
$x="noarray";
echo "is array.". is_array($x);

$db=new Database();
echo $db->GetPrimaryKey("tenant_register");
echo "<br>";
echo "get single";
echo "<br>";
$ret= $db->GetSingle("tenant_register",1);
echo "<br>";
//echo $ret["name"];
print_r($ret);
echo "<br>new test <br>";
//print_r($db->GetTableData("tenant_register",['working_branch'=>"Coimbatore",'transfered_banch'=>"Tiruchengode"]));
$tabRows=$db->GetTableData("tenant_register",['working_branch'=>"Coimbatore",'transfered_banch'=>"Tiruchengode"]);
echo " Count ".count($tabRows)."<br>";

$tabRows=$db->GetTableData("tenant_register",['working_branch'=>"Coimbatore",'transfered_banch'=>"Tiruchengode"]);
foreach($tabRows as $tabRow )
{
    print_r($tabRow);
    print_r($tabRow->name);

}