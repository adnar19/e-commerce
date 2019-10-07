
<?php
include 'navbar.php';
include 'config.php';


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>connexion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">


  </head>
  <body>





       <div class="container-fluid bg">









          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
               <div class="col-md-4 col-sm-4 col-xs-12" >

                   <form class="form-container" >
                     <div class="form-group">
                       <h2>contact us </h2>
                       <label for="name">Name</label>
                       <input type="text" class="form-control" id="name" placeholder="Name">

                     </div>
                     <div class="form-group">
                       <label for="email">email</label>
                       <input type="emailHelp" class="form-control" id="password" placeholder="email">
                       <label for="validationTextarea">Message</label>
         <textarea class="form-control is-invalid" id="msg" placeholder="message" required></textarea>
                     </div>


                     <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                   </form>

               </div>

          </div>






        </div>



  </body>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js">  </script>
    <script href="js/bootstrap.min.js"></script>

</html>
