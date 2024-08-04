<?php

// === Abstract keyword  


abstract class Father{

    public function print(){
        for($i = 0; $i < 20 ; $i++){
            echo $i."\n";
        }
    }

}


class Son extends Father{
    public function print(){
        for($i = 0; $i < 10 ; $i++){
            echo $i."\n";
        }
    }
}



$objSon = new Son();
$objSon->print();


// $objFather->print();
// $objFather = new Father();