<?php 
session_start();
require 'db.php';
if(!empty($msg))
{
    ?>
    <span class="alert alert-sm alert-warning"><?=$msg;?></span>
    <?php
}
?>
<?php
$msg = ""; 
if(isset($_POST['login'])) {
    //print_r($_POST);
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  if($username != "" && $password != "") {
    try {
      $query = "SELECT * FROM `login` WHERE `username`=:username and `password`=:password";
      
      
            $stmt = $connection->prepare($query);
            $stmt->bindParam(":username",$username);
            $stmt->bindParam(":password",$password);
            $stmt->execute();
            $count = $stmt->rowCount();
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $uname = $row['Username'];
        $pass = $row['password'];
        $dbrole = $row['role'];
      
      
      if ($count > 0) {
        if ($username == $uname AND $password == $pass AND $role == $dbrole) {
          switch ($dbrole) {
              case 'president':
              $_SESSION['admin'] = $role;
              header('Location:index1.php');
               break;
              case 'secretary':
             $_SESSION['user'] = $role;
              header('Location:index.php');
              break;
            default:
            echo "default";
              break;
          }
        }
      } else {
        echo "Field not match";
      }
    }
    } catch (PDOException $e) {
      echo "Error : Incorrect UserName or Password!".$e->getMessage();
    }
  } else {
    $msg = "Both fields are required!";
  }
}
?>
<?php
if(isset($message))  
     {  
        echo '<label class="text-danger">'.$message.'</label>';  
      }  
 ?>  
<!DOCTYPE html>  
 <html>  
 
    <title>CRUD</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <body bg color="green">  
        
           <br />  
           <div class="container" style="width:500px;">
                
                <h3 align="">WELCOME TO THE LOGIN PAGE</h3><br />  
                <form action="" method="post">  
                    <select name = "role">
                        <option value="secretary"> Secretary </option>
                        <option value="president"> President </option>
                    </select>
            <br>
                     <label>Username</label>  
                     <input type="text" name="username" class="form-control" required/>  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" required/>  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                     
                </form>  
           </div>  
           <br />  
          
      </body>  
 </html>  
