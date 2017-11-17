<?php

class security{

 // check mail Method
  public function checkmail($e){
    require "../../dbase/db.php";
    $statement = $conn->prepare("SELECT email FROM users WHERE email = :email");
    $statement->execute(array(':email' => $e));
    $row = $statement->fetch();
    $db_email = $row['email'];
    if($e == $db_email){
      return true;
    }else{
      return false;
    }
  }

 // sanitize value Method
  public function sanitize($data){
    $clean = trim($data);
  }

}


 ?>
