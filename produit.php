<?php
include 'navbar.php';


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/produit.css" >
    <title>produit</title>
  </head>



  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        </div>

       <div class="col md-7">
        <p class="newarrival text-center">New</p>
        <h2>description</h2>
        <h2>code produit : ABCD</h2>
        <img src="images/stars.png" class="stars">
        <p class="prix">prix 200DA</prix>
        <p><b>disponibilité:</b>oui</p>
        <label >Quantité:</label>
        <input type="text" name="" value="1">
        <button type="button" class="btn btn-default cart">ajouter</button>

       </div>
        </div>

      </div>
    </div>




    </div>
  </body>
    <script src="js/jquery-3.4.1.min.js"></script>
</html>
