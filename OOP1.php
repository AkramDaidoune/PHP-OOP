<?php

class flower{
    // attributes
    public $color;
    public $name;

    public function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;
    }


   



}




$flower1 = new Flower("zonnebloem", "paars-geel");
$flower2 = new Flower("paardenbloem", "roze");


var_dump($flower1);
echo("</br>");

var_dump($flower2);
echo("</br>");

$flower1->color = "yellow";