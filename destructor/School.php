<?php

class School{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function __destruct()
    {
        echo "My school name is {$this->name}";
    }

}

new SchoolClass("Narayan kandi High SchoolClass");