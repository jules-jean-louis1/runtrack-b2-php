<?php
require_once 'class/Student.php';

$student = new Student(1,1,'email@email.com','Terry', new DateTime("1990-01-01"), "male");
$student2 = new Student();

var_dump($student, $student2);