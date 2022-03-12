<?php


class StaticClass {

    public static $name = "Nazmul";

    public static function getName()
    {
        echo self::$name;
    }

    public static function getVillage()
    {
        echo 'I live in Narayan kandi';
    }


}

echo StaticClass::$name;
echo '<br>';
StaticClass::getName();
echo '<br>';
StaticClass::getVillage();