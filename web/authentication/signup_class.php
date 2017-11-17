<?php

class signup{

  public $result;
  public $success_message;
  public $failed_message;

  public function signup_val($fn,$ln,$e,$p,$p1){

         if($fn == "" || $ln == "" || $e == "" || $p == "" || $p1 == ""){
           $this->result = "fill out the form data";
         }else if($p != $p1){
           $this->result = "Your password does not match";
         }else{
           $this->success_message = "sign up failed";
         }

  }
}

?>
