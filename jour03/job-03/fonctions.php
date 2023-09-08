<?php

function findOneStudent(int $id): Student
{
    $pdo = new PDO("mysql:host=localhost;dbname=lp_official", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM student WHERE id = :id");
    $query->execute(["id" => $id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $year = null;
    if ($result['birthdate'] !== null) {
        $year = new DateTime($result['birthdate']);
    }
    $student = new Student();
    $student->setId($result['id']);
    $student->setGradeId($result['grade_id']);
    $student->setEmail($result['email']);
    $student->setFullname($result['fullname']);
    $student->setBirthdate($year);
    $student->setGender($result['gender']);
    return $student;
}

function findOneGrade(int $id): Grade
{
    $pdo = new PDO("mysql:host=localhost;dbname=lp_official", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $pdo->prepare("SELECT * FROM grade WHERE id = :id");
    $query->execute(["id" => $id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    $year = null;
    if ($result['year'] !== null) {
        $year = new DateTime($result['year']);
    }

    $grade = new Grade();
    $grade->setId($result['id']);
    $grade->setRoomId($result['room_id']);
    $grade->setName($result['name']);
    $grade->setYear($year);

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
