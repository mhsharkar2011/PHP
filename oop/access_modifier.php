<?php 
class AccessModifier{
    public $name;
    private $age;
    protected $height;
}
$obj = new AccessModifier;
echo $obj->name = "Monir Hossain";


?>