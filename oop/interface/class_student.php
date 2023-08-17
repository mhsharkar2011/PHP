<?php
 include_once "interface.php";
 include_once "class_teacher.php";
 include_once "class_guardian.php";
class Student implements School, College, Varsity
{
    public function __construct()
    {
        $this->mySchool();
        $this->myCollege();
        $this->myVarsity();
    }

    public function mySchool()
    {
        echo "I am a School Student <br>";
    }

    public function myCollege()
    {
        echo "I am a College Student <br>";
    }

    public function myVarsity()
    {
        echo "I am a varsity Student <hr>";
    }
}

$std = new Student();

$std = new Teacher();

$parent = new Guardian();



