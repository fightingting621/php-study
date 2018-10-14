<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 2018/10/13
 * Time: 14:40
 */

class Car
{
    var $color;
    function Car($color="red"){
        $this->color=$color;

    }
    function wao(){
        return $this->color;
    }
    function pru(){
        echo $this->color;
    }
}

//$c=new Car();
$c1=new Car();
$c1->pru();
//echo $c1->wao();
//echo $c->wao();
