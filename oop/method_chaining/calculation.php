<?php

spl_autoload_register(function($autoload){
    $classFile = $autoload . ".php";
    if(file_exists($classFile)){
        require_once $classFile;
    }
});

$cal = new Calculate;
echo " Multi = " . $cal->multiply(4,6)->multi();
echo "<br>Sum = " .$cal->add(8,4)->sum();