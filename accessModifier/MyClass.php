<?php

class MyClass{

    public $name;
    protected $schoolName;
    private $villageName;

    public function setName($name){
        $this->name = $name;
    }

    public function setSchoolName($n){
        $this->schoolName = $n;
    }

    public function setVillageName($n){
        $this->villageName = $n;
    }

}

$newObject = new MyClass();

$newObject->setName('Nazmul Hasan');
$newObject->setSchoolName('Narayan kandi High School');
$newObject->setVillageName('Narayan kandi');
echo $newObject->name;
//echo $newObject->schoolName; // error-> because protected access modifier can not be accessed outside this class and its inheritance;
//echo $newObject->villageName; //error-> because protected access modifier can not be accessed outside this class