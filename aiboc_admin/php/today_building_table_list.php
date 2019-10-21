<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 1/4/2017
 * Time: 2:16 PM
 */ ?>
<?php
require_once ('../class/ssp.class.php');
require_once ('../class/config.php');
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
    array( 'db' => 'building_type',   'dt' => 2, 'formatter' => function($d){
        return substr($d,0,15);
    }),
    array( 'db' => 'room_options',   'dt' => 3 ),
    array( 'db' => 'location',     'dt' => 4, 'formatter' => function($d){
        return substr($d,0,15);
    }),

    array( 'db' => 'status',     'dt' => 5, 'formatter' => function($d){
        if($d == "active")
        {
            return '<button id="status" class="btn btn-success btn-xs">Active</button>';
        }
        else
        {
            return '<button id="status" class="btn btn-danger btn-xs">Inactive</button>';
        }
    } ),

    array( 'db' => 'status',     'dt' => 6, 'formatter' => function(){
        return '<button id="btnview" class="btn btn-warning btn-xs" title="View"><i class="fa fa-eye"></i></button>
                <button id="btnedit" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-edit"></i></button>
                <button id="btndelete" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o"></i></button>';
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


date_default_timezone_set('Asia/Kolkata');
$today =  date('Y-m-d');

$where = "cdate LIKE '$today%'";

echo json_encode(
    SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where)
);

?>





