<?php

// include "classes/School.php";
// include "classes/College.php";
// include "classes/Varsity.php";

/* --------- Deprecate PHP 7.2 and up
function __autoload($class_name){
echo "$class_name";
$classFile = __DIR__ . '/classes/' . $className . '.php';
include $classFile;
// }
-------------------------------------- */
// spl_autoload_register(function($className){
//     $classFile = __DIR__ . "/classes/" . $className . ".php";
//     echo $className . "<br>"; 
//     include $classFile;
// });


function customAutoload($className) {
    $classFile = __DIR__ . '/classes/' . $className . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
}
spl_autoload_register('customAutoload');



$school = new School;
$college = new College();
$varsity = new Varsity();