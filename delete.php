<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM kriste WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: /crud");
}