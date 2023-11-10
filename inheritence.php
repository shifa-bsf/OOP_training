<?php
class marksheet{
    public $mark;
    public function getMark(){
        $percentageMark = ($this->mark/200)*100;
        return $percentageMark;
    }
    
}

class lkgMark extends marksheet{
    // extended class can override parent function
    public function getMark(){
        $percentageMark = ($this->mark/100)*100;
        return $percentageMark;
    }
}

$mark = new lkgMark();
$mark->mark = 25;
echo $mark->getMark();





//abstarct class
abstract class Name {
    public function printName($name){
        echo $name;
    }

}
class myName extends Name{
    
}
// class Name cannot be instatiated on its own
// $shape = new Name();
// echo $shape->printName();
$newName = new myName();
echo $newName->printName('shifa');
