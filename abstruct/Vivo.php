<?php

include 'Mobile.php';

class Vivo extends Mobile {

    public function getName()
    {
        echo "This is {$this->name} mobile";
    }

}

$vivo = new Vivo('Vivo');

$vivo->getName();