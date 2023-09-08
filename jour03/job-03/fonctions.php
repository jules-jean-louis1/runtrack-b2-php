<?php

function findOneStudent(int $id): Student
{
    $pdo = new PDO("mysql:host=localhost;dbname=lp_official", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM student WHERE id = :id");
    $query->execute(["id" => $id]);
    $student = $query->fetchObject("Student");
    return $student;
}

function findOneGrade(int $id): Grade
{
    $pdo = new PDO("mysql:host=localhost;dbname=lp_official", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM grade WHERE id = :id");
    $query->execute(["id" => $id]);
    $grade = $query->fetchObject("Grade");
    return $grade;
}

function findOneFloor(int $id): Floor
{
    $pdo = new PDO("mysql:host=localhost;dbname=lp_official", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM floor WHERE id = :id");
    $query->execute(["id" => $id]);
    $floor = $query->fetchObject("Floor");
    return $floor;
}
function findOneRoom(int $id): Room
{
    $pdo = new PDO("mysql:host=localhost;dbname=lp_official", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM room WHERE id = :id");
    $query->execute(["id" => $id]);
    $room = $query->fetchObject("Room");
    return $room;
}
