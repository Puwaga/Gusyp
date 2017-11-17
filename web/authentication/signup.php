<?php

require "signup_class.php";

   if(isset($_POST['reg'])){
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $email = $_POST['email'];
     $password = $_POST['pass1'];
     $confirm_password = $_POST['pass2'];

    if($fname == "" || $lname == "" || $email == "" || $password == "" || $confirm_password == ""){
      die("fill out the form data");
    }else if($pass1 !== $pass2){
        die("password do not match");
    }else{
      die ($fname);
    }


   }
?>
