<?php
class Person{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
}

class buisness{
    protected $staff;
    public function __construct(Staff $staff){
        $this->staff = $staff;
    }
    public function hire(Person $person){
        $this->staff->add($person);
    }
    public function getStaffs(){
        return $this->staff->getMembers();
    }
}

class Staff{
    protected $members=[];
    public function __construct($members=[]){
        $this->members = $members;
    }
    public function add(Person $person){
        $this->members[] = $person;
    }

    public function getMembers(){
        return $this->members;
    }
}

$shifa = new Person('shifa');
$staff = new staff([$shifa]);
$myshop = new buisness($staff); 
$myshop->hire(new Person('riya'));

print_r($myshop->getStaffs());