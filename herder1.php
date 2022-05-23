
<?php
session_start();
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
  //echo $user;
} 
elseif(isset($_SESSION['admin'])) {
  $user = $_SESSION['admin'];
 // echo $user;
} else{
  echo "no user";
}


  if (isset($_SESSION['admin'])) {
    ?>

<!doctype html>
<html lang="en">
  <head>
    <title>CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css>
  </head>
  

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item active">
        <a class="nav-link" href="log.php"></span></a>
         
    </ul>
  </div>
</nav>
    <?php
  }
  ?>
  
