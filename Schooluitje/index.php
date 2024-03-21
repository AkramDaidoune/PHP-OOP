<?php

require_once 'Studentlijst.php';

$schoolTripList = new SchoolTripList();
$schoolTripList->addStudent(new Student('Koningstein', '', '', ''));
$schoolTripList->addStudent(new Student('', 'Rohan', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Hamza', 'sod2a', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Azad', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Rohald', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Abdellah', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('Brugge', '', '', ''));
$schoolTripList->addStudent(new Student('', 'Ayoub', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Mohammed', 'sod2a', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Younes', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Hassan', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Rauf', 'sod2b', 'nee'));
$schoolTripList->addStudent(new Student('Drimmelen', '', '', ''));
$schoolTripList->addStudent(new Student('', 'Ali', 'sod2b', 'Nee'));
$schoolTripList->addStudent(new Student('', 'Mahmoud', 'sod2b', 'Ja'));
$schoolTripList->addStudent(new Student('', 'Hamoud', 'sod2b', 'nee'));
$schoolTripList->addStudent(new Student('', 'Yassir', 'sod2a', 'nee'));



$schoolTripList->render();