<?php
require "../../dbase/db.php";
require "checkemail.php";
require "mailclass.php";

if(isset($_POST['email'])){
  // collecting the form fieled values
  $check_data = new security;
  $check_email = new security;
  $email = $_POST['email'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $password = $_POST['pass'];
  $agreement = $_POST['agree'];
// Checking to see if email exist
  $statement = $conn->prepare("SELECT email FROM users WHERE email = :email");
  $statement->execute(array(':email' => $email));
  $row = $statement->fetch();
  $db_email = $row['email'];

// Checking if the form field contain a value or not

  if($fname == "" || $lname == ""){
    echo "Please Enter your Name";
    exit();
  }else if($email == ""){
    echo "Please Enter your email";
    exit();
  }else if($check_email->checkmail($email)){
    echo "That email already exist";
    exit();
  }else if($password == ""){
    echo "Enter your password";
    exit();
  }else if($agreement == ""){
    echo "Please agree to the policies";
    exit();
  }else{
    $full_name = $fname." ".$lname;
    $active = 0;
    $hash_pass = md5($password);
    $sql = "INSERT INTO users (fullname,email,password,agreement,Active,reg_date) VALUES ('$full_name','$email','$hash_pass','$agreement','$active',now())";
    if($conn->exec($sql)){
      $last_id = $conn->lastInsertId();
      $to = $email;
      $subject = "Account Activation";
      $header = "From: noreply@gusyp.com";

      $message ='
        <section style="padding: 10px 10px; border-bottom: 1px solid midnightblue; height: 120px;">
          <div style="float: left; height: 80px;">
            <img src="http://localhost/gusyp/application/img/gusyp-logo.png" style="width: 50px; height: 50px; "/>
            <p style="font-size: 10px; font-family: Open Sans, sans-serif;">Gusyp.com</p>
          </div>

        </section>
        <section style="padding: 10px 10px; border-bottom: 1px solid midnightblue;">
        <p style="font-size: large; font-family: Open Sans, sans-serif; text-align: justify;">
        Dear '.$fname.',
        </p>
        <p style="font-size: large; font-family: Open Sans, sans-serif; text-align: justify;">
        We are very pleased to welcome you to the fastest growing social media platform most recently, Gusyp. We
        anticipate that your desires and expectations will become an asset our platform and will be fulfilled progressively. It is in the best interest of our team putting your privacy and security our top priority, we therefore are looking forward having you on-board in the near future.

        </p><br/>
        <p style="font-size: large; font-family: Open Sans, sans-serif; text-align: justify;">
        To be able to have your first encounter with the rest of the members in this platform, we will encourage you to click on the following link:
           <a href="http://localhost/gusyp/application/activation.php?id='.$last_id.'&u='.$full_name.'&e='.$email.'&p='.$hash_pass.'">Click here to activate your account now</a>.
          This link will automatically give you access to your account, which is default set you as an Anonymous User for your privacy. But if you would prefer to change these default settings you are most welcome to do so.
        </p><br/>
        <p style="font-size: large; font-family: Open Sans, sans-serif; text-align: justify;">
        You will also be given a tour on the Gusyp website to orientation and help you become familiarize with our features. We strongly value your ongoing opinion and feedback about our platform.
        </p>
        <p style="font-size: large; font-family: Open Sans, sans-serif; text-align: justify;">
        Sincerely Yours
          </p>
        <br/><img style="width: 190px; height: 80px; border: none; margin: 5px 0px;"/><br/>
        <p style="font-size: large; font-family: Open Sans, sans-serif; text-align: justify;">
          CEO
        </p>
        <p style="font-size: large; font-family: Open Sans, sans-serif; text-align: justify;">
        Edison N.
        </p>
        </section>
        <section>
        <div style="width: 26%; float: left; padding: 0px 5px; margin:5px; font-size: 10px; font-family: Open Sans, sans-serif; background: midnightblue; color: #fff;">
          <p>Gusyp co.Ltd</p>
          <p>Head Quarters: Houston Texas</p>
          <p>Organization Number: 909746543</p>
          <p>Clearings Number: 6945</p>
          <p>www.gusyp.com</p>
        </div>
        <div style="width: 20%; float: left; padding: 0px 5px; margin:5px;  font-size: 10px; font-family: Open Sans, sans-serif; background: midnightblue; color: #fff;">
          <p>Postal Address:</p>
          <p>4270 Kirkwood Road</p>
          <p>Houston Texas</p>
          <p>77072</p>
          <p>USA</p>
        </div>
        <div style="width: 24.5%; float: left; padding: 0px 5px; margin:5px;  font-size: 10px; font-family: Open Sans, sans-serif; background: midnightblue; color: #fff;">
          <p>Ministry Branches:</p>
          <p>Houston Texas: (235)745 85659</p>
          <p>New York: (235)745 85659</p>
          <p>Los Angeles: (235)745 85659</p>
          <p>Carlifornia: (235)745 85659</p>
        </div>
        <div style="width: 20%; float: right; padding: 0px 5px; margin:5px;  font-size: 10px; font-family: Open Sans, sans-serif; background: midnightblue; color: #fff;">
          <p>Account Numbers</p>
          <p>235745 85659</p>
          <p>235 745 85659</p>
          <p>235 745 85659</p>
          <p>235 745 85659</p>
        </div>
        </section>


        ';

        $header .= "MIME-Version: 1.0\n";
        $header .= "Content-type: text/html; charset=iso-8859-1\n";
      mail($to,$subject,$message,$header);
      echo "$full_name";
      $conn = null;
      exit();

    }else{
      echo "failed";
    }
  }
}
    // Checking emial
if(isset($_POST['e'])){
    $check_email = new security;
    $email = $_POST['e'];
    if($check_email->checkmail($email)){
      echo "Email already exist";
      exit();
    }
}


?>
