<?php

class Student
{
    public ?int $id;
    public ?int $gradeId;
    public ?string $email;
    public ?string $fullname;
    public ?DateTime $birthdate;
    public ?string $gender;

    public function __construct(?int $id = null, ?int $gradeId = null, ?string $email = null, ?string $fullname = null, ?DateTime $birthdate = null, ?string $gender = null)
    {
        $this->id = $id;
        $this->gradeId = $gradeId;
        $this->email = $email;
        $this->fullname = $fullname;
        $this->birthdate = $birthdate;
        $this->gender = $gender;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getGradeId(): ?int
    {
        return $this->gradeId;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getFullname(): ?string
    {
        return $this->fullname;
    }

    /**
     * @return DateTime|null
     */
    public function getBirthdate(): ?DateTime
    {
        return $this->birthdate;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param int|null $gradeId
     */
    public function setGradeId(?int $gradeId): void
    {
        $this->gradeId = $gradeId;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string|null $fullname
     */
    public function setFullname(?string $fullname): void
    {
        $this->fullname = $fullname;
    }

    /**
     * @param DateTime|null $birthdate
     */
    public function setBirthdate(?DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @param string|null $gender
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

}