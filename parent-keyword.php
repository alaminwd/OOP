<?php


class father{
    function __construct()
    {   
        echo "Father Construct"."\n";
    }
}


class son extends father{

}

$father = new father();
$son = new son();


echo PHP_EOL;




class parent1{
    function __construct()
    {   
        echo "Father Construct"."\n";
    }
}


class child extends father{
    function __construct()
    {   
        parent::__construct();
        echo "Son Construct"."\n";
    }
}


$parent = new parent1();
$child = new child();



echo PHP_EOL;

class parent2{
    function Abba(){
        echo "Hello From Father";
    }
}


class child2 extends parent2{
    function demo(){
        parent::Abba();
    }
}




$child2 = new child2();

$child2->demo();
