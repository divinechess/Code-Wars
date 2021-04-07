<?php
class PERSON {
   public $firstname;
   public $lastname;
   public $gender;
 public function __construct($firstname,$lastname,$gender = 'f' ) {
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->gender = $gender;
 }
}

 public function sayhello (){
   return "hello my name is " . $this->firstname . " " . $this->lastname;
}


$tom = new PERSON ('tom','ben','m');
echo $tom->firstname;
echo "\n";





