<?php

class Serialize
{
    public $html;
    public $css;
    private $php;
    protected $java;

    function __construct()
    {
        $this->html = "This is HTML";
        $this->css = "This is CSS";
        $this->php = "This is PHP";
        $this->java = "This is JAVA";
    }
}

$pro = new Serialize();
$ser = serialize($pro);
file_put_contents('serialize.text',$ser);
echo $ser;