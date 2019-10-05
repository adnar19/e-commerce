<!-- <?php
$db="e_commerce";
$server ="localhost";
$user="root";
$password="";


$conx = mysqli_connect($server,$user,$password);
if(!$conx) die ("erreur de connexion".mysqli_connect_error());

echo "Connected successfully";
 ?> -->




<?php

$dbname =   __DIR__ . '/data/ecommerce.db';
$file_db = new PDO('sqlite:'.$dbname);
$file_db->exec("pragma synchronous = off;");


 ?>
