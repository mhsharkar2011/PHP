<?php

class Teacher implements School, College, Varsity
{
    public function __construct()
    {
        $this->mySchool();
        $this->myCollege();
        $this->myVarsity();
    }
    public function mySchool()
    {
        echo "I am a School Teacher <br>";
    }
    public function myCollege()
    {
        echo "I am a College Teacher <br>";
    }
    public function myVarsity()
    {
        echo "I am a varsity Teacher <hr>";
    }
}

