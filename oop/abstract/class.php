<?php 

abstract class Student
{
    public $name ;
    public $age;

    abstract public function studentDetails();
}

class Teacher extends Student
{
    public $sex;
    public $email;

    public function details(){
        echo "<span style='font-size:18px;font-weight:bold'>Gender:</span> " . $this->sex="Male <br>";
        echo "<span style='font-size:18px;font-weight:bold'>Email:</span> " . $this->email="abc@gmail.com <br>";
    }

    // why I have override abstract method here that is working normaly
    public function studentDetails()
    {
        echo "I am abstract method that is override";
    }
}

$t = new Teacher();
echo "<hr>";
echo $t->details();
echo $t->studentDetails();