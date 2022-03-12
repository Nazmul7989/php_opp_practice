<?php

include 'SchoolClass.php';

class Section extends SchoolClass {

    public function getSectionName()
    {
        echo 'I am from Section class';
    }

}

$section = new Section();

$section->getSectionName();
echo "<br>";
$section->getSchoolName();
