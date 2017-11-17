<?php

class sendmail{
  // setting up the mail system
  // creating the properties

  public $to;
  public $subject;
  public $header;

// creating the message;

  // creating the mail Method
  public function mail($e,$s,$h,$a){
    $this->to = $e;
    $this->subject = $s;
    $this->header = $h;
    $this->message =   'Welcome to looptrue click on the link below to activate
     
    ';
    mail($this->to,$this->subject,$this->message,$this->header);
  }

}

?>
