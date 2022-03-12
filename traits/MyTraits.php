<?php

trait MyTraits {

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(){
        echo "My name is {$this->name}";
    }

}