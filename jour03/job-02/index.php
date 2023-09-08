<?php
require_once 'class/Student.php';
require_once 'class/Room.php';
require_once 'class/Floor.php';
require_once 'class/Grade.php';

$student = new Student(1,1,'email@email.com','Terry', new DateTime("1990-01-01"), "male");
$student2 = new Student();

$grade = new Grade(1,1,'B2', new DateTime("2020-01-01"));
$grade2 = new Grade();

$room = new Room(1,1,'A', 1);
$room2 = new Room();

$floor = new Floor(1,'A', 1);
$floor2 = new Floor();



