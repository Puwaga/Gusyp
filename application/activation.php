<?php
require "../dbase/db.php";
// checking to see if isset the value
if(isset($_GET['id']) && isset($_GET['u']) && isset($_GET['e']) && isset($_GET['p'])){
  $userid = $_GET['id'];
  $username = $_GET['u'];
  $email = $_GET['e'];
  $password = $_GET['p'];

// Get the value from the database
  $statement = $conn->prepare("SELECT id,fullname,email,password FROM users WHERE id = :id");
  $statement->execute(array(':id' => $userid));
  $row = $statement->fetch();
  $db_id = $row['id'];
    $db_user = $row['fullname'];
      $db_email = $row['email'];
        $db_pass = $row['password'];

        if($userid == $db_id && $db_user == $username && $db_email == $email && $db_pass == $password){
          $sql = "UPDATE users SET Active = 1";
          $conn->exec($sql);
          $message = "Welcome to gusyp";
          header("LOCATION: setup.php?message=$message");
        }
}else{
  header("LOCATION: activate.php");
}

?>
