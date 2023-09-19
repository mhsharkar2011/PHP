<?php 

class Person{

    public $height;
    public $weight;
    public function __construct($height,$weight){
           $this->height = $height;
           $this->weight = $weight;
        // echo "Height $height Meter" ." = ". " Weight $weight Kg <br>";
    }
    // public function personName($name,$age){
    //     echo "The person`s name is $name . " . " He is $age years old <br>";
    //     echo "His height is $this->height Meter. " . " And his weight is $this->weight Kg";
    // }
    public function __destruct()
    {
        unset($this->height);
        unset($this->weight);
    }

    public function personDetails(){
        echo "This is person details {$this->height} and {$this->weight} Kg";
    }
}

$personOne = new Person("1.78",70);
// unset($personOne);
$personOne->personDetails();
// $personOne->personName("Monir Hossain",33);
?>