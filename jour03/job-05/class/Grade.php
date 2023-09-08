<?php

class Grade
{
    private ?int $id;
    private ?int $room_id;
    private ?string $name;
    private ?DateTime $year;

    /*public function __construct(?int $id = null, ?int $room_id = null, ?string $name = null, ?DateTime $year = null)
    {
        $this->id = $id;
        $this->room_id = $room_id;
        $this->name = $name;
        $this->year = $year;
    }*/
    public function __construct()
    {

    }
    public function getStudents(): ?array
    {
        $pdo = new PDO("mysql:host=localhost;dbname=lp_official", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $pdo->prepare("SELECT * FROM student WHERE grade_id = :grade_id");
        $query->execute(["grade_id" => $this->id]);

        $students = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $student = new Student($row['id'], $row['grade_id'], $row['email'], $row['fullname'], new DateTime($row['birthdate']), $row['gender']);
            $students[] = $student;
        }
        return $students;
    }
    /**
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getRoomId(): ?int
    {
        return $this->room_id;
    }

    /**
     * @param int|null $room_id
     */
    public function setRoomId(?int $room_id): void
    {
        $this->room_id = $room_id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return DateTime|null
     */
    public function getYear(): ?DateTime
    {
        return $this->year;
    }

    /**
     * @param DateTime|null $year
     */
    public function setYear(?DateTime $year): void
    {
        $this->year = $year;
    }
}
