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
    $message = 'data inserted successfully';
    //header('Location:index.php');
  }
}
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Create a person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="fname">FirstName</label>
          <input type="text" name="fname" id="fname" class="form-control" required>
        </div>
        <form method="post">
        <div class="form-group">
          <label for="name">LastName</label>
          <input type="text" name="lname" id="lname" class="form-control" required>
        </div>
        <form method="post">
        <div class="form-group">
          <label for="regno">RegistrationNumber</label>
          <input type="text" name="regno" id="regno" class="form-control" required>
        </div>
        <form method="post">
        <div class="form-group">
          <label for="name">Department</label>
          <input type="text" name="departement" id="departement" class="form-control" required>
        </div>
        <form method="post">
        <div class="form-group">
          <label for="name">AditionCatholic</label>
          <input type="text" name="aditioncatholic" id="aditioncatholic" class="form-control" required>
        </div>
        <form method="post">
        <div class="form-group">
          <label for="name">ParishBorned</label>
          <input type="text" name="parishborned" id="parishborned" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Create a person</button>

        </div>
        
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
