<?php
 $data = array();
include 'config.php';


$sql="SELECT * FROM categorie";
$result=mysqli_query($conx,$sql);
foreach($result as $row) {
 $data[]  = $row;
}




  $json = json_encode( $data);

echo $json;

header("Content-type: application/json");
exit(  $json );
  ?>
