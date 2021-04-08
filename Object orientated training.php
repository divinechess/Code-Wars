<?php

// public :
// private
// protected

class PERSON {
    protected $firstname;
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
         $this->setJobTitle($jobTitle);

         parent::__construct($firstname,$lastname,$gender); //edits values on parent class

        }


        public function setJobTitle ($jobTitle){
        $this->jobTitle = ucfirst($jobTitle);

        }

        public function getJobTitle(){
        return $this->jobTitle;
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
echo $jane->firstname;
// echo "<br />";
// echo $jane->getJobTitle();
// echo "<br />";
// echo $jane->getgender();
