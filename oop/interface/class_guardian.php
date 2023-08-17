<?php

class Guardian implements School, College, Varsity
{
    public function __construct()
    {
        $this->mySchool();
        $this->myCollege();
        $this->myVarsity();
    }

    public function mySchool()
    {
        echo "I am a Parent of school Student <br>";
    }
    public function myCollege()
    {
        echo "I am a Parent of College Student <br>";
    }
    public function myVarsity()
    {
        echo "I am a Parent of Varsity Student <hr>";
    }
}
