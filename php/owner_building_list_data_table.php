<?php
/**
 * Created by PhpStorm.
 * User: oom
 * Date: 10/24/2016
 * Time: 2:09 PM
 */
?>
<?php
session_start();
require_once( '../aiboc_admin/class/Owner.php');
require_once( '../aiboc_admin/class/ssp.class.php');

    $getlogdetails = unserialize($_SESSION['OWNER_LOGIN_DETAILS']);
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
    array( 'db' => 'location', 'dt' => 0),
    array( 'db' => 'building_id', 'dt' => 1),
    array( 'db' => 'location', 'dt' => 2 ),
    array( 'db' => 'place',  'dt' => 3 ),
    array( 'db' => 'state',   'dt' => 4 ),
    array( 'db' => 'pin',     'dt' => 5 ),
    array( 'db' => 'building_type',     'dt' => 6 ),
    array( 'db' => 'room_options',     'dt' => 7 ),
    array( 'db' => 'excepted_rent',     'dt' => 8 ),
    array( 'db' => 'status',     'dt' => 9, 'formatter' => function($d){
        if($d == "active")
        {
            return '<button id="active" class="btn btn-success btn-xs">Active</button>';
        }
        else
        {
            return '<button id="active" class="btn btn-danger btn-xs">Inactive</button>';
        }
    }),
    array( 'db' => 'status',     'dt' => 10, 'formatter' => function($d){
        return '<button id="Buildlistedit" class="btn btn-info btn-xs">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit</button>&nbsp;
                <button id="Buildlistdelete" class="btn btn-danger btn-xs">
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
$id = $getlogdetails->owner_id;
$where = "owner_id = '$id'";

echo json_encode(
    SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where)
);


