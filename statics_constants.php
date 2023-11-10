<?php
class Math{
    public static function add(...$nums){
        return array_sum($nums);
    }
}

class myBank {
    public static $tax = 10;
    public const TAX = 50;
}







echo Math::add(1,2,5);
myBank::$tax = 20;
echo '--'.myBank::$tax.'--'.myBank::TAX

//  CONSTANTS - defined using the define() function or the const keyword. It can't be changed.
//  STATIC variables are defined using the static keyword inside a class. 
?>