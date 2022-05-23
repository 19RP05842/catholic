<?php
require 'db.php';
$sql = 'SELECT * FROM kriste';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
//header('Location:index.php')

 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      
      <h2>All Christians</h2>
      <a href="registration.php">Go</a>
      <a href="index.php">Exit</a>
    </div>
    <div class="card-body">
      <table class=" table-bordered">
        <tr>
          <th>ID</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>RegNo</th>
          <th>Departement</th>
          <th>AditionCatholic</th>
          <th>ParishBorned</th>
          <th>Email</th>
          <th>Action</th>
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
              <a onclick="return confirm('Are you sure you want to Edit this entry?')" href="edit.php?id=<?= $person->id ?>" class="btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn-danger'>Delete</a>
              
            </td>
          </tr>
                </form>  
        <?php endforeach; ?>
      </table>
    
                </form>  
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
