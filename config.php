<?php
$db="e_commerce";
$server ="localhost";
$user="root";
$password="";


$conx = @mysqli_connect($server,$user,$password,$db);
if(!$conx) die ("erreur de connexion".mysqli_connect_error());


 ?>
