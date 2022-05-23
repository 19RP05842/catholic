<?php 

session_start();

session_unset();

session_destroy();

header("Location: index.php");
//<?php 
$uname = $row['Username'];
        $pass = $row['password'];
        $dbrole = $row['role'];
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user'])) {
 echo "log.php"
 ?>

<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<a href="logout.php">Logout</a>
<input type="submit" name="submit" value="Exit" class="login-button">
</body>
</html>
<?php 

}else{

     header("Location: log.php");

     exit();

}

 ?>