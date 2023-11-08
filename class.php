<?php

class person{
    //properties
    public $description = "welcome home ";
    public $name;
    private $mark;

    // methods
    public function sayHello(){
        echo "Hello {$this->name}! {$this->description}";
    }

    //constructor method. automatically calls. It can take object props.
    public function __construct($name){
        //echo $name;
        $this->name = $name;
    }

    //Setter method for mark
    public function setmark($mark){
        if($mark < 0){
            throw new Exception("Negetive mark added!");
        }
        else{
            $percentageMark = ($mark/200)*100;
            $this->mark = $percentageMark;
        }
    }

    // getter method for mark
    public function getmark(){
        return $this->mark;
    }
}

$student = new person('shifa');
$student->description .= "shifa kv!!";
$student->setMark(50);
/*
this will not work since mark is private 
$student->mark=20;
*/
print_r($student->sayHello());
echo("<br/> Mark : ".$student->getmark()."%");

?>