<?php
class Foo{
    function bar($a, $b){
        echo "This is function of foo " . $a+$b ."<hr>";
    }
}

class Bar extends Foo{
    function foo($a,$b){
        echo "This is Bar class " . $a*$b . "<br>";
    }
}

function recursion($a){
    if($a<20){
        echo "$a\n" . "<hr>";
        recursion($a+2);
    }
}

function circle($r){
    echo "Circle: " .pi()*$r*$r ;
}

function takes_array($input)
{
    echo "$input[0] + $input[1] = ", $input[0]+$input[1];
}


$obj = new Foo;
$obj = new Bar;
$obj->bar(3,4);
$obj->foo(4,5);

recursion(1);

circle(3);
echo "<hr>";
takes_array(4);


?>