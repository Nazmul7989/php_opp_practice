<?php

include 'Mobile.php';

class Samsung implements Mobile {

    public function getName()
    {
        echo 'This is Samsung Mobile';
    }

}

$samsung = new Samsung();

$samsung->getName();