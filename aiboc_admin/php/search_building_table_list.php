<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 12/1/2016
 * Time: 1:30 PM
 */
?>
<?php
//require_once ('../class/ssp.class.php');
require_once ('../class/OomSSP.php');
require_once ('../class/config.php');
if(isset($_GET['state']))
{
    $state=$_GET['state'];
    $city=$_GET['city'];
    $area=$_GET['area'];
    $area=fnGetSqlFormat($area);

    $bedroom=$_GET['bedroom'];
    $bedroom=fnGetSqlFormat($bedroom);

    $toilet=$_GET['toilet'];
    $toilet=fnGetSqlFormat($toilet);

    $parking=$_GET['parking'];
    $parking=fnGetSqlFormat($parking);

    $buildingtype=$_GET['buildingtype'];
    $buildingtype=fnGetSqlFormat($buildingtype);
}
else
{
    $state="";
    $city="";
    $area="";
    $bedroom="";
    $toilet="";
    $parking="";
    $buildingtype="";
}


/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'buiding_register';

// Table's primary key
$primaryKey = 'building_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'building_id', 'dt' => 0 ),
    array( 'db' => 'owner_id',  'dt' => 1 ),
    array( 'db' => 'building_type',   'dt' => 2 ),
    array( 'db' => 'room_options',   'dt' => 3 ),
    array( 'db' => 'no_of_toilets',   'dt' => 4 ),
    array( 'db' => 'parking_area',   'dt' => 5 ),
    array( 'db' => 'location',     'dt' => 6 ),
    array( 'db' => 'place',     'dt' => 7 ),
    array( 'db' => 'state',     'dt' => 8 ),

    array( 'db' => 'status',     'dt' => 9, 'formatter' => function($d){
        if($d == "active")
        {
            return '<button id="status" class="btn btn-success btn-xs">Active</button>';
        }
        else
        {
            return '<button id="status" class="btn btn-danger btn-xs">Inactive</button>';
        }
    } ),

    array( 'db' => 'status',     'dt' => 10, 'formatter' => function(){
        return '<button id="btnview" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> View</button>
                <button id="btnedit" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-edit"></i> Edit</button>
                <button id="btndelete" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o"></i> Delete</button>';
    })
);

// SQL server connection information
$sql_details = array(
    'user' => USERNAME,
    'pass' => PASSWORD,
    'db'   => DATABASE,
    'host' => HOST
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */


$joinQuery="";
//$extraWhere = "`status` = 'active' AND `state`='$state' AND `place`='$city'";
$extraWhere = "`status` = 'active'";
$extraWhere.= ($state!="")? " AND `state`='$state'" : "" ;
$extraWhere.= ($city!="")? " AND `place`='$city'" : "" ;
$extraWhere.= ($area!="")? " AND `location` in($area)" : "" ;
$extraWhere.= ($bedroom!="")? " AND `room_options`in($bedroom)" : "" ;
$extraWhere.= ($toilet!="")? " AND `no_of_toilets`in($toilet)" : "" ;
$extraWhere.= ($parking!="")? " AND `parking_area`in($parking)" : "" ;
$extraWhere.= ($buildingtype!="")? " AND `building_type`in($buildingtype)" : "" ;

/*$extraWhere.= ($bedroom!="'null'")? " AND `room_options`in($bedroom)" : "" ;
$extraWhere.= ($toilet!="'null'")? " AND `no_of_toilets`in($toilet)" : "" ;
$extraWhere.= ($parking!="'null'")? " AND `parking_area`in($parking)" : "" ;*/



/*$extraWhere.= ($bedroom!="")? " AND `room_options`='$bedroom'" : "" ;
$extraWhere.= ($toilet!="")? " AND `no_of_toilets`='$toilet'" : "" ;
$extraWhere.= ($parking!="")? " AND `parking_area`='$parking'" : "" ;*/




echo json_encode(
    OomSserverSideProcess::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere )
);



/*
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);*/


function fnGetSqlFormat($string)
{
    if(is_null($string) or $string=="null" )
    {
        return "";
        exit;
    }
    $strarr=explode(",",$string);
    $retstr="";
    for ($i=0;$i<count($strarr);$i++)
    {
        $from1="'$strarr[$i]'";
        $from2=",'$strarr[$i]'";
        $retstr.= ($retstr=="")? $from1 : $from2;
    }
    return $retstr;
}
