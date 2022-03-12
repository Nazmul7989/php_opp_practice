<?php


abstract class Mobile {

    public $name ;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function getName();

}