<?php


abstract class AbstractClass
{
    abstract protected function Test();
}

class childClass extends AbstractClass
{
    public function Test(){
        echo  "Hi ";
    }
    public function Test2(){
        echo "Hello";
    }
}

$method = ['Test','Test2'];
$obj = new childClass();


foreach($method as $value){
    print_r($obj->$value());

}

echo "<hr>";


// This is interface section
interface Gender
{
    public function male1();
    public function female();
}

interface Person12
{
    public function small();
    public function big();
}

class MorePeople implements Person12,Gender
{
    public function male1()
    {
        return "I am Male";
    }
    public function female()
    {
        return "I am Female";
    }

    public function small()
    {
        return "I am small";
    }

    public function big()
    {
        return "I am big";
    }
}

$people = new MorePeople();

echo $people->male1();
echo "<hr>";
echo $people->female();
echo "<hr>";
echo $people->small();
echo "<hr>";
echo $people->big();


echo "<hr>";

// Property, Method and Constant

class oop{
    public static $val;
     
    public static function init($var){
        static::$val=$var;
        return new static;      
    }
 
    public static function add($var){
        static::$val+=$var;
        return new static;
    }
 
    public static function sub($var){
        static::$val-=$var;
        return new static;
    }
 
    public static function out(){
        return static::$val;
    }
 
}
echo oop::add(5+7)->out();
echo "<hr>";


class constDest{

    private $name;
    public function __construct($val){
        echo "Welcome to PHP World! " . $this->name = $val;
    }
    
    public function __destruct(){
        echo "<br>I'm about to disappear - bye bye! " . $this->name;
    }
 
    public function say(){
        echo "Welcome to PHP World!<br>";
    }
    
   }
   $obj = new constDest("Monir");
    $obj->say();

    
  