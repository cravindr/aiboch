<?php
/**
 * Created by PhpStorm.
 * User: Ravindran
 * Date: 11/3/2016
 * Time: 1:39 PM
 */

session_start();
require_once( '../aiboc_admin/class/Tenant.php');
//require_once( '../aiboc_admin/class/ssp.class.php');
require_once ('../aiboc_admin/class/OomSSP.php');

$getlogdetails = unserialize($_SESSION['TENANT_LOGIN_DETAILS']);
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
$table = 'tenant_enquiry';

// Table's primary key
$primaryKey = 'enquiry_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => '`te`.`enquiry_id`', 'dt' => 0, 'field' => 'enquiry_id'),            // this id is byepassed for serial number
    array( 'db' => '`te`.`enquiry_id`', 'dt' => 1, 'field' => 'enquiry_id'),            // this id is hided and used for button ation
    array( 'db' => '`te`.`building_id`', 'dt' => 2, 'field' => 'building_id'),           // this id is hided and used for button action
    array( 'db' => '`te`.`building_detail`', 'dt' => 3, 'field' => 'building_detail' ),
    array( 'db' => '`te`.`comments`',  'dt' => 4, 'field' => 'comments', 'formatter' => function($d){
        $str=strip_tags($d);
       return $str25=substr($str,0,25);


        }),


    /*array( 'db' => '`br`.`location`',  'dt' => 4, 'field' => 'location' ),*/              // used for two table...

    array( 'db' => '`te`.`status`',     'dt' => 5,'field' => 'status', 'formatter' => function($d){
        if($d == "processing")
        {
            return "<span class='label label-info'>Processing... </span> <i class='fa fa-cog fa-spin  fa-fw fa-2x'></i>";
        }
        elseif($d == "success")
        {
            return "<span class='label label-success'>Success..........</span> <i class='fa fa-thumbs-o-up fa-2x' aria-hidden='true'></i>";
        }

        elseif($d == "failed")
        {
            return "<span class='label label-danger'>Failed................</span> <i class='fa  fa-thumbs-o-down fa-2x' aria-hidden='true'></i>";
        }
    }),

    array( 'db' => '`te`.`status`',     'dt' => 6, 'field' => 'status','formatter' => function($d){
        return '<button id="Enquiryedit" class="btn btn-info btn-xs">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Enquiry</button>&nbsp;
                <button id="Enquirydelete" class="btn btn-danger btn-xs">
                <i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete</button>';
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

$id = $getlogdetails->tenant_id;
$joinQuery = "FROM `tenant_enquiry` AS `te` JOIN `buiding_register` AS `br` ON (`te`.`building_id` = `br`.`building_id`)";
$extraWhere = "`te`.`tenant_id` = '$id'";



echo json_encode(
    OomSserverSideProcess::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere )
);


