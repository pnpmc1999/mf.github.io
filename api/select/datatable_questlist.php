<?php

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
$table = 'mf_questlist';

// Table's primary key
$primaryKey = 'QUEST_ID';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
  array(
      'db' => 'QUEST_ID',
      'dt' => 0 ,
      'formatter' => function($d , $row){
          return '<button class="btn red white-text" onclick="DeleteRow('.$d.')">Delete</button>  <button class="btn orange  white-text btn-small modal-trigger" style="margin-left:5px;" data-target="modal2" onclick="EditRow('.$d.')">Edit</button>';
        }
      ),
    array( 'db' => 'QUEST_ID', 'dt' => 1 ),
    array( 'db' => 'QUEST_MINLEVEL',  'dt' => 2 ),
    array( 'db' => 'QUEST_NAME',   'dt' => 3 ),
    array( 'db' => 'QUEST_ACTIVE',     'dt' => 4 ),
    array( 'db' => 'QUEST_STEP1', 'dt' => 5 ),
    array( 'db' => 'QUEST_STEP2',  'dt' => 6 ),
    array( 'db' => 'QUEST_STEP3',   'dt' => 7 ),
    array( 'db' => 'QUEST_STEP4',     'dt' => 8 ),
    array( 'db' => 'QUEST_ACCEPTNPC', 'dt' => 9 ),
    array( 'db' => 'QUEST_ACCEPTTALK',  'dt' => 10 ),
    array( 'db' => 'QUEST_PRE',   'dt' => 11 ),
    array( 'db' => 'QUEST_REWARD1',     'dt' => 12 ),
    array( 'db' => 'QUEST_REWARD1NUM', 'dt' => 13 ),
    array( 'db' => 'QUEST_REWARD2',  'dt' => 14 ),
    array( 'db' => 'QUEST_REWARD2NUM', 'dt' => 15 ),
    array( 'db' => 'QUEST_REWARD3',  'dt' => 16 ),
    array( 'db' => 'QUEST_REWaRD3NUM',   'dt' => 17 ),
    array( 'db' => 'QUEST_STEPNUM',     'dt' => 18 ),
    array( 'db' => 'QUEST_WORKNUM', 'dt' => 19 ),
    array( 'db' => 'QUEST_WORKSTEP',  'dt' => 20 ),
    array( 'db' => 'QUEST_FINISHTEXT',   'dt' => 21 ),
    array( 'db' => 'QUEST_FINISHREWARD',     'dt' => 22 ),
    array( 'db' => 'QUEST_RELATEITEM', 'dt' => 23 ),

);

// SQL server connection information
$sql_details = array(
    'user' => 'mf-dbteam',
    'pass' => 'dbteam2019',
    'db'   => 'mf_test',
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
