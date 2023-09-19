<?php

class Man{
    public $hands;
    public $eyes;

    public function work($legs){
        return 'Man can '. $legs;
    }

    function see(){
        return 'Eyes can see';
    }
}

class Women{
    public $legs;
    function work(){
        return 'Woman can walk';
    }
}

function walk($man = new Man){
    return $man->work('Walk');
}

echo walk();
echo "<br>";
echo walk(new Women);




echo "<br>";
echo "<br>";
function add($a,$b, $c, $d){
    return " Sum = " . $a+$b+$c+$d;
}
echo add(3,5,6,7);

echo "<br>";

echo "<br>";

function mult($a,$b){
    return "Multiplication = " . $a*$b;
}

echo mult(3,5);

echo "<br>";

function makeyogurt($flavour, $container = "bowl")
{
    return "Making a $container of $flavour yogurt.\n";
}
 
echo makeyogurt("cbfdh", $container="Rosbefghfghrry"); // "raspberry" is $container, not $flavour


echo "<br>";



 function foo($a,$b) {
    $sum = $a+$b;
    echo "Sum = $sum";
 } // Default not used; deprecated as of PHP 8.0.0

 echo foo(5,4);

//  function bar1($a, $b) {
//     return "Sum = " . $a+$b;
//  } // Still allowed; $a is required but nullable
//  echo bar1(3, 555);


//  function bar(?A $a, $b) {
//     echo $a+$b;
//  }       // Recommended

//  bar(25,36);

function foo1(){
    return "THe number of argument " . func_num_args();
}
echo foo1(1,3,4,5,9);