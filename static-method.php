<?php


    class Myclass{

        static  function Bubli(){
            echo " My Husband Name is Sakib Khan";
        }
    }

// $obj = new Myclass();
// $obj->Bubli();

Myclass::Bubli();




// ======= Static Variable or static properties 

echo PHP_EOL;

class sakibKhan{

    // public  $Hero = "Sakib Khan";        //without static method 
    public static $Hero = "Sakib Khan";     // use static method

    function chinema(){
        // echo "My Super Hero $this->Hero";

        echo "My Dream Hero ", self::$Hero;
    }
}

$sakib = new sakibKhan();

$sakib->chinema();