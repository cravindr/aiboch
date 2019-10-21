<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/25/2016
 * Time: 1:31 PM
 */
?>
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
$table = 'owner_register';

// Table's primary key
$primaryKey = 'owner_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'owner_id', 'dt' => 0 ),
    array( 'db' => 'name',  'dt' => 1 ),
    array( 'db' => 'emailid',   'dt' => 2 ),
    array( 'db' => 'mobile',     'dt' => 3 ),
    array( 'db' => 'place',     'dt' => 4 ),
    array( 'db' => 'city',     'dt' => 5 ),
    array( 'db' => 'state',     'dt' => 6 ),

    array( 'db' => 'status',     'dt' => 7, 'formatter' => function($d){
        if($d == "active")
        {
            return '<button id="status" class="btn btn-success btn-xs">Active</button>';
        }
        else
        {
            return '<button id="status" class="btn btn-danger btn-xs">Inactive</button>';
        }
    } ),

    array( 'db' => 'status',     'dt' => 8, 'formatter' => function(){
        return '<button id="ownerview" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> View</button>
                <button id="buildinglist" class="btn btn-info btn-xs">Build List</button>
                <button id="owneredit" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-edit"></i> Edit</button>
                <button id="ownerdelete" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash-o"></i> Delete</button>';
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



echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);



