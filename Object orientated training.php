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
    public function sayhello (){
        return "hello my name is " . $this->firstname . " " . $this->lastname;
    }
    public function getgender(){
        return "Gender is: " . $this->gender;

    }



}



class EMPLOYEE extends PERSON {
    public $jobTitle;

        public function __construct($jobTitle,$firstname,$lastname,$gender = 'f'){
         $this->jobTitle = $jobTitle;

         parent::__construct($firstname,$lastname,$gender); //edits values on parent class

        }

        public function getJobTitle(){
        return $this->jobTitle;
        }




}



$tom = new PERSON ('tom','ben','m');
echo $tom->sayhello();
echo "<br />";
$jane = new PERSON('jane', 'featherstone','f');
echo $jane->sayhello() . " " . $jane->getgender();
echo "<br />";

// $emp = new EMPLOYEE('Backend Developer');
// echo $emp->getJobtitle();

echo "<br />";
echo "<br />";
$jane = new EMPLOYEE('Front End','jane','wigglesworth','f');
echo "<br />";
echo $jane->getJobTitle();
echo "<br />";
echo $jane->getgender();
