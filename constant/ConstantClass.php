<?php

class ConstantClass {

    const name = "Md Nazmul Hasan";

    public function getName(){
        echo self::name;
    }

}

echo ConstantClass::name;
echo "<br>";
$name = new ConstantClass();
$name->getName();