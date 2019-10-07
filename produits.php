
<?php
include 'navbar.php';
include 'configg.php';

$condition='';

$sql2="SELECT * FROM stock $condition";
$qry2= mysqli_query($conx,$sql2);

$img='';

while ($row= mysqli_fetch_array($qry2)) {

$img .='<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card shadow" style="width: 20rem;">
      <div class="inner">
         <img src="images/'.$row['photo'].'" class="card-img-top" alt="Card image cap">
         </div>
         <div class="card-body text-center">
        <h5 class="card-title">'.$row['titre'].'</h5>
         <p class="card-text">'.$row['description'].'</p>
       <a href="produit.php" class="btn btn-success">voir plus</a>
       </div>
       </div>
         </div>
       </div>
         ';

}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/index.css">
    <title>produits</title>
  </head>



    <body style="background-color:#eeeeee;">

<h1 style="text-align:center">nom categorie</h1>

<div class="container">

<?php echo $img; ?>



</div>









<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
  </body>
</html>
