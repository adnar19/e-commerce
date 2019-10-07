<?php
include 'navbar.php';
include 'configg.php';

$sql="SELECT * FROM slider";
$qry= mysqli_query($conx,$sql);
$li='';
$i=0;
$div='';
while ($row= mysqli_fetch_array($qry)) {
if ($i==0) {
  $li .='  <li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"></li>';
  $div .='<div class="carousel-item active">
          <img src="images/'.$row["image"].'" width="100%"; height="400px;">
          <div class="carousel-caption"><h3>'.$row["titre"].'</h3>
          <p>'.$row['description'].'</p>
          </div>';
}

else{
  $li .= '<li data-target="#myCarousel" data-slide-to="'.$i.'" ></li>';
  $div .='<div class="carousel-item">
          <img src="images/'.$row["image"].'" width="100%"; height="400px;">
          <div class="carousel-caption"><h3>'.$row["titre"].'</h3>
          <p>'.$row['description'].'</p>
          </div>';
}
$div .='</div>';
$i++;

}



$sql2="SELECT * FROM stock";
$qry2= mysqli_query($conx,$sql2);

$img='';
$info='';
while ($row= mysqli_fetch_array($qry2)) {

$img .='<div class="row justify-content-center">
  <div class="col-md-4 col-sm-12">
    <div class="card shadow" style="width: 20rem;">
      <div class="inner">
         <img src="images/'.$row['photo'].'" class="card-img-top" alt="Card image cap">
         </div>
         <div class="card-body text-center">
        <h5 class="card-title">'.$row['titre'].'</h5>
         <p class="card-text">'.$row['description'].'</p>
       <a href="#" class="btn btn-success">voir plus</a>
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
    <title></title>
  </head>

  <body style="background-color:#eeeeee;">




<div class="container slider">
  <div class="row justify-content-center">
    <div class="col-md-12">

    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <?php echo $li; ?>
      </ul>
      <div class="carousel-inner">
         <?php echo $div; ?>

      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>

  </div>
</div>

</div>




<div class="container">

<?php echo $img; ?>



</div>





<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
  </body>
</html>
