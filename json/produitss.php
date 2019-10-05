<?php
 $data = array();
include '../config.php';

$result_one = $file_db->query("SELECT * FROM stock ");
foreach($result_one as $row) {
 $data[]  = $row;
}


  $json = json_encode( $data);
header("Content-type: application/json");
exit(  $json );
  ?>


<!--

  <?php
  include 'config.php';
  $data[]=array();

  $sql = 'SELECT * FROM stock';
    mysql_select_db($db);
    $retval = mysql_query( $sql, $conx );

    if(! $retval ) {
       die('Could not get data: ' . mysql_error());
    }

    while($row = mysql_fetch_assoc($retval)) {
        console.log($row['description']),
    }

   ?> -->
