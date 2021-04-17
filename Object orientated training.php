<?php

// public :
// private
// protected

class PERSON {
    public $firstname;
    public $lastname;
    public $gender;
    public function __construct($firstname,$lastname,$gender = 'f' ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->gender = $gender;
    }

    public function getgender(){
        return "Gender is: " . $this->gender;

    }



}

class EMPLOYEE extends PERSON {
    private $jobTitle;

        public function __construct($jobTitle,$firstname,$lastname,$gender = 'f'){
         $this->jobTitle = $jobTitle;

         parent::__construct($firstname,$lastname,$gender); //edits values on parent class

        }

        public function __set($name, $value){
         $this->$name = $value;

        }

        public function __get($name){
         return $this->$name;

        }

        public function sayhello (){
        $message =  "hello my name is " . $this->firstname . " " . $this->lastname . "<br />";
        $message .= "My job title is: " . $this->jobTitle;
        return $message;
       }




}



// $tom = new PERSON ('tom','ben','m');
// echo $tom->sayhello();
// echo "<br />";
// $jane = new PERSON('jane', 'featherstone','f');
// echo $jane->sayhello() . " " . $jane->getgender();
// echo "<br />";

// $emp = new EMPLOYEE('Backend Developer');
// echo $emp->getJobtitle();

// echo "<br />";
// echo "<br />";
$jane = new EMPLOYEE('front End','jane','wigglesworth','f');
// echo $jane->firstname;
//$jane->setJobTitle('back End');
$jane->jobTitle = 'Dev/Test';
echo $jane->jobTitle;
// echo "<br />";s
// echo $jane->getJobTitle();
// echo "<br />";
// echo $jane->getgender();
