<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<?php
require 'db.php';
$sql = 'SELECT * FROM kriste';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
//header('Location:index1.php')
 ?>
<?php require 'header1.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      
      <h2>All Christians that are compose Communaute</h2>
      <a href="index1.php">Go</a>
    </div>
    <div class="card-body">
      <table class=" table-bordered">
        <tr>
          <th>ID</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>RegNo</th>
          <th>Department</th>
          <th>AditionCatholic</th>
          <th>ParishBorned</th>
          <th>Email</th>
          
        </r>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->fname; ?></td>
            <td><?= $person->lname; ?></td>
            <td><?= $person->regno; ?></td>
            <td><?= $person->departement; ?></td>
            <td><?= $person->aditioncatholic; ?></td>
            <td><?= $person->parishborned; ?></td>
            <td><?= $person->email; ?></td>
            <td>
               
                </form>  
            </td>
          </tr>
        <?php endforeach; ?>
        
      </table>
    </div>
  </div>
</div>

<?php require 'footer.php'; ?>
