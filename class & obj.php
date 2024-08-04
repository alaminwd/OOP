<?php

    // class Encapsulation প্রোপার্টি গুলো কে এক সাথে রেখে দেয়া 

    class ostad{


        function addTowNumber($num1, $num2){
            echo $num1+$num2."\n";
        }   


       public $name = "al amin";
        
       function demo(){
            echo $this->name;
       }
    };


    $obj = new ostad();

    $obj->addTowNumber(10, 10);
    $obj->demo();