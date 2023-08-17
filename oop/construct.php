<?php 

class Person{

    public $height;
    public $weight;
    public function __construct($height,$weight){
        //    echo $this->height = $value;
        //    echo $this->weight = $year;
        echo "Height $height Meter" ." = ". " Weight $weight Kg ";
    }
    // public function personName($name,$age){
    //     echo "The person`s name is $name . " . " He is $age years old <br>";
    //     echo "His height is $this->height Meter. " . " And his weight is $this->weight Kg";
    // }
}

$personOne = new Person("1.78",70);
// $personOne->personName("Monir Hossain",33);
?>