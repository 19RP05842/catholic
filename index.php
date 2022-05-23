<?php
require 'db.php';
$sql = 'SELECT * FROM kriste';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
//header('Location:Home.php')
 ?>
<?php require 'header.php'; ?>
<image src="  IMG-20220413-WA0000.jpg" width="1040" height="700">
<?php require 'footer.php'; ?>
