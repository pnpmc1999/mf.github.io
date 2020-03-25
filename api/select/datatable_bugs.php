<?php
  $position = $_POST['position'];
  $status = $_POST['status'];


/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
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
$table = 'bugs';

// Table's primary key
$primaryKey = 'BUG_ID';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
if($position == "Programmer" && $status =="User" || $position == "Tester" && $status == "User"){
  $columns = array(
    array(
        'db' => 'BUG_ID',
        'dt' => 0 ,
        'formatter' => function($d , $row){
            return '<button class="btn orange  white-text btn modal-trigger" style="margin-left:5px;" data-target="modal2" onclick="EditRow('.$d.')">Edit</button>';
          }
        ),
      array( 'db' => 'BUG_ID', 'dt' => 1 ),
      array( 'db' => 'BUG_DATE',  'dt' => 2 ),
      array( 'db' => 'BUG_TITLE',   'dt' => 3 ),
      array( 'db' => 'BUG_BODY',     'dt' => 4 ),
      array( 'db' => 'BUG_TYPE', 'dt' => 5 ),
      array( 'db' => 'BUG_CHECK1',  'dt' => 6 ),
      array( 'db' => 'BUG_CHECK2',   'dt' => 7 ),

  );
}else{
  $columns = array(
    array(
        'db' => 'BUG_ID',
        'dt' => 0 ,
        'formatter' => function($d , $row){
            return '<button class="btn red white-text" onclick="DeleteRow('.$d.')">Delete</button> <button class="btn orange  white-text btn-small modal-trigger" style="margin-left:5px;" data-target="modal2" onclick="EditRow('.$d.')">Edit</button>';
          }
        ),
      array( 'db' => 'BUG_ID', 'dt' => 1 ),
      array( 'db' => 'BUG_DATE',  'dt' => 2 ),
      array( 'db' => 'BUG_TITLE',   'dt' => 3 ),
      array( 'db' => 'BUG_BODY',     'dt' => 4 ),
      array( 'db' => 'BUG_TYPE', 'dt' => 5 ),
      array( 'db' => 'BUG_CHECK1',  'dt' => 6 ),
      array( 'db' => 'BUG_CHECK2',   'dt' => 7 ),

  );
}


// SQL server connection information
$sql_details = array(
    'user' => 'mf-dbteam',
    'pass' => 'dbteam2019',
    'db'   => 'mf',
    'host' => '178.62.35.51'
);



/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( '../../vender/DataTables-1.10.20/examples/server_side/scripts/ssp.class.php' );

echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
