
<?php

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<?php
require 'db.php';
$sql = 'SELECT * FROM kriste';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
//header('Location:index1.php')
 ?>
<?php require 'header1.php';    ?>
<image src=" IMG-20220411-WA0009.jpg" width="1040" height="800">
<?php require 'footer.php'; ?>








?>