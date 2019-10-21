<?php
/**
 * Created by PhpStorm.
 * User: Andhu
 * Date: 11/25/2016
 * Time: 1:31 PM
 */
?>
<?php
require_once ('../class/OomSSP.php');
//require_once ('../class/ssp.class.php');
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
$table = 'tenant_register';

// Table's primary key
$primaryKey = 'tenant_id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(

    array( 'db' => 'tenant_id', 'dt' => 0, 'formatter'=>function($d){
     return substr($d,0,15);
} ),
    array( 'db' => 'name',  'dt' => 1, 'formatter'=>function($d){
        return substr($d,0,15);
    }  ),
    array( 'db' => 'emailid','dt' => 2, 'formatter'=>function($d){
        return substr($d,0,15);
    }  ),
    array( 'db' => 'mobile','dt' => 3, 'formatter'=>function($d){
        return substr($d,0,13);
    }  ),
    array( 'db' => 'scale_grade','dt' => 4, 'formatter'=>function($d){
        return substr($d,0,10);
    }  ),
    array( 'db' => 'working_branch','dt' => 5, 'formatter'=>function($d){
        return substr($d,0,12);
    }  ),
    array( 'db' => 'transfered_banch','dt' => 6,'formatter'=>function($d){
        return substr($d,0,12);
    } ),
    array( 'db' => 'qeamount','dt' => 7 ),



    array( 'db' => 'status',     'dt' => 8, 'formatter' => function(){
        return '<button id="tenantview" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#formsuccess" title="View"><i class="fa fa-eye"></i> View</button>
            &nbsp;<button id="tenantedit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#formsuccess" title="Edit"><i class="fa fa-edit"></i> Edit</button>
            &nbsp;<button id="tenantdelete" class="btn btn-danger btn-xs"  title="Delete"><i class="fa fa-trash-o"></i> Delete</button>';
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

//$id = $getlogdetails->tenant_id;
//$joinQuery = "FROM `tenant_enquiry` AS `te` JOIN `buiding_register` AS `br` ON (`te`.`building_id` = `br`.`building_id`)";
$joinQuery="";
$extraWhere = "`status` = 'inactive'";



echo json_encode(
    OomSserverSideProcess::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere )
);



/*echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

*/

