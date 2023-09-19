<?php
$cars = ['name1'=>'Toyota','name2'=>'X-Carala'];


rsort($cars);

foreach($cars as $key=>$value)
{
    echo $key . " = " . $value;
    echo "<br>";
}

?>