<?php

include 'Mobile.php';

class Vivo implements Mobile {

    public function getName()
    {
     echo 'This is Vivo Mobile';
    }

}

$vivo = new Vivo();

$vivo->getName();