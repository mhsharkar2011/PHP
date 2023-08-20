<?php
class School
{
    public $name;
    public $address;

    public function __construct()
    {
        echo $this->name = "Progati High School <br> ";
        echo $this->address = "Mirpur, Dhaka <br> <hr> ";

    }
}