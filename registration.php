<?php
   require 'db.php';
   
   $message = '';
   if (isset ($_POST['fname'])  && isset($_POST['lname']) && isset($_POST['regno']) && isset($_POST['departement']) && isset($_POST['aditioncatholic']) && isset($_POST['parishborned']) && isset($_POST['email'])) {
   
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $regno = $_POST['regno'];
     $departement = $_POST['departement'];
     $aditioncatholic = $_POST['aditioncatholic'];
     $parishborned = $_POST['parishborned'];
     $email = $_POST['email'];
     $sql = 'INSERT INTO kriste(fname,lname,regno,departement,aditioncatholic,parishborned, email) VALUES(:fname, :lname, :regno, :departement, :aditioncatholic, :parishborned, :email)';
     $statement = $connection->prepare($sql);
     if ($statement->execute([':fname' => $fname, ':lname' => $lname, ':regno' => $regno, ':departement' => $departement,':aditioncatholic' => $aditioncatholic, ':parishborned' => $parishborned,  ':email' => $email])) {
  
       header('Location:index.php');
     }
   
   
   
   }
   
?>
<!DOCTYPE html>
<html>
<head>
<style>
    fieldset {
      background-color: skyblue;
      display: block;
      margin-left: 2px;
      margin-right: 2px;
      padding-top: 0.35em;
      padding-bottom :0.6em;
      padding-left: 0.7em;
      padding-right: 0.7em;
      font-size: 12px;
      width: 500px;
      line-height: 1.8;

      border: 2px groove (internal value);
    }
    label:hover {
      cursor:hand;
    }
    legend {
      color: white;
      padding: -10px -10px;
    }
    input {
      margin: 0px;
    }
    </style>
    </head>

    <meta charset="utf-8"/>
    <title> Welcome To Registration Form</title>
    <link rel="stylesheet" href="style.css"/>

<body bgcolor="gray">
<center>
    <fieldset>
    

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <form class="form" action="" method="post">
        <h1 class="login-title">Welcome To Registration Form</h1>
        <form method="post">
        <div class="form-group">
          <label for="fname">  FirstName</label>
          <input type="text" name="fname" id="fname" class="form-control" required><br><br>
        </div>
        <form method="post">
        <div class="form-group">
          <label for="name"> LastName</label>
          <input type="text" name="lname" id="lname" class="form-control" required><br><br>
        </div>
        <form method="post">
        <div class="form-group">
          <label for="regno">  RegistrationNumber</label>
          <input type="text" name="regno" id="regno" class="form-control" required><br><br>
        </div>
        <form method="post">
        <div class="form-group">
          <label for="name">  Department</label>
          <input type="text" name="departement" id="departement" class="form-control" required><br><br>
        </div>
        <form method="post">
        <div class="form-group">
          <label for="name">  AditionCatholic </label>
          <input type="text" name="aditioncatholic" id="aditioncatholic" class="form-control" required><br><br>
        </div>
        <form method="post">
        <div class="form-group">
          <label for="name">  ParishBorned</label>
          <input type="text" name="parishborned" id="parishborned" class="form-control" required><br><br>
        </div>
        <div class="form-group">
          <label for="email">  Email</label>
          <input type="email" name="email" id="email" class="form-control" required><br><br>
        </div>
        <input type="submit" name="submit" value="Register" class="login-button">
        <a href="index.php">Exit</a>
        
    </form>
    
    
</fieldset>
</center>
</body>


</html>