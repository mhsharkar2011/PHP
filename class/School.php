<?php 

class School{
    function stdClass($name){
        return "This is class $name ";
    }
}

$school = new School;
$classes = $school->stdClass('One <br>');
 $classes = $school->stdClass('two<br>');
$classes = $school->stdClass('Three<br>');
 $classes = $school->stdClass('Four<br>');

