<?php

include 'Mobile.php';

class Samsung extends Mobile {

    public function getName()
    {
        echo "This is {$this->name} mobile";
    }

}

$samsung = new Samsung('Samsung');

$samsung->getName();