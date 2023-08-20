<?php 


class Php
{
    function baseClass(){
        echo "Base Class -> " . __CLASS__ . "<br>";
        echo "Base Class -> " . get_class($this). "<br>";
    }
}

class childClass extends Php
{
    function childMethod(){
        echo "Child Class -> " . __CLASS__ . "<br>";
        echo "Child Class -> " . get_class($this) . "<br>";
    }

    function ourMethod(){
        return $this->childMethod();
    }
}



$obj = new childClass;
echo $obj->baseClass();
echo "<hr>";
echo $obj->childMethod();
echo "<hr>";
echo $obj->ourMethod();
echo "<hr>";