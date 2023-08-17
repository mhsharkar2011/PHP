<?php 

class Employee{
    public $name;
    public $age;

    public function __construct(){
        echo "Construct created successfully<br><br>";
    }
    public function employeeName($firstName,$lastName){
        echo "The name is:".$this->name = $firstName . $lastName;
    }
    public function employeeAge($age){
        echo "The person age is:" . $this->age = $age;
    }
   
}

$personOne = new Employee;
$personOne->employeeName("Monir ","Hossain");
echo "<br>";
$personOne->employeeAge(33);

echo "<br>";
echo "<br>";

$personOne = new Employee;
$personOne->employeeName("Al ","Amin");
echo "<br>";
$personOne->employeeAge(31);


?>