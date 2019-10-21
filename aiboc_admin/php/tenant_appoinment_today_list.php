<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 2/3/2017
 * Time: 1:39 PM
 */ ?>
<?php
session_start();
require_once ('../class/ssp.class.php');
require_once ('../class/config.php');
require_once ('../class/Tenant.php');
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
$table = 'tenant_appoinment';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'tenant_id',  'dt' => 1),
    array( 'db' => 'tenant_id',  'dt' => 2, 'formatter' => function($d){
        $getown = @Tenant::GetTenantById($d);
        return $getown->name;
    }),
    array( 'db' => 'tenant_id',  'dt' => 3, 'formatter' => function($d){
        $getown = @Tenant::GetTenantById($d);
        return $getown->mobile;
    }),
    array( 'db' => 'app_date',     'dt' => 4 ),
    array( 'db' => 'app_time',     'dt' => 5 ),

    array( 'db' => 'description',     'dt' => 6, 'formatter' => function($d){
        return substr($d,0,20);
    }),

    array( 'db' => 'status',     'dt' => 7, 'formatter' => function($d){
        if($d == "processing")
        {
            return '<div class="label label-warning">Processing</div>';
        }
        elseif($d == "failed")
        {
            return '<div class="label label-danger">Failed</div>';
        }
        else
        {
            return '<div class="label label-success">Success</div>';
        }
    } ),

    array( 'db' => 'status',     'dt' => 8, 'formatter' => function(){
        return '<button id="tenantview" class="btn btn-warning btn-xs"><i class="fa fa-eye"></i> View</button>
                <button id="tenantedit" class="btn btn-primary btn-xs" title="Edit"><i class="fa fa-edit"></i> Edit</button>
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

if(isset($_SESSION['TENANT_DATE']))
{
    $fordate = $_SESSION['TENANT_DATE'];
    $where = "app_date ='$fordate'";
}
else
{
    date_default_timezone_set('Asia/Kolkata');
    $fordate =  date('Y-m-d');
    $where = "app_date ='$fordate'";
}



echo json_encode(
    SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, $where )
);
?>