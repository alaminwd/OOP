<?php


class Father{

    public function print(){
        for($i = 0; $i < 20 ; $i++){
            echo $i."\n";
        }
    }

}


class Son extends Father{

}

$obj = new Son();

$obj->print();