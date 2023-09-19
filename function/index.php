<?php

class DefaultCoffeeMaker{
    function brew(){
        return "Making Coffee. ";
    }
}

class FancyCoffeeMaker{
    function brew(){
        return "Crafting a beautiful coffee just for you"; 
    }
}

function makeCoffee($coffeeMaker = new DefaultCoffeeMaker){
    return $coffeeMaker->brew();

}

echo makeCoffee();
echo "<br>";
echo makeCoffee(new FancyCoffeeMaker);

echo "<br>";
echo "<br>";
echo "<br>";

class Pant{
    function fabric(){
        return "Made by 90% cotton and 10% poly";
    }
}

class Shirt{
    function fabric(){
        return "Make by 100% Cotton";
    }
}

function makeDress($quality = new Pant){
    return $quality->fabric();
}

echo makeDress();
echo "<br>";
echo makeDress(new Shirt);

echo "<br>";

function makeyou($flavour = "Come",$container = "Noee"){
    return "Making a $container of $flavour"; 
}
echo makeyou(flavour:444);