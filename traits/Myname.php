<?php

include 'MyTraits.php';

class Myname {

    use MyTraits;

}

$name = new Myname('Md Nazmul Hasan');
$name->getName();