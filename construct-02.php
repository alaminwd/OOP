<?php


class about{

    public $myName ;
    public $age ;
    public $address ;
    
    function __construct($nameValue, $ageValue, $addressValue)
    {
        $this->myName = $nameValue;
        $this->age = $ageValue;
        $this->address = $addressValue;
    }

    public function info(){
        echo "My Name is {$this->myName} My age {$this->age} I live in {$this->address} ";
    }

}

$obj = new about("Md.Al Amin", "22", "Tongi Gazipur");

$obj->info();