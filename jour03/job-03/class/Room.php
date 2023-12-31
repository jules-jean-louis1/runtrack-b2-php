<?php

class Room
{
    private ?int $id;
    private ?int $floor_id;
    private ?string $name;
    private ?int $capacity;

    /*public function __construct(?int $id = null, ?int $floor_id = null, ?string $name = null, ?int $capacity = null)
    {
        $this->id = $id;
        $this->floor_id = $floor_id;
        $this->name = $name;
        $this->capacity = $capacity;
    }*/
    public function __construct()
    {

    }
    /**
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
    public function getFloorId(): ?int
    {
        return $this->floor_id;
    }

    /**
     * @param int|null $floor_id
     */
    public function setFloorId(?int $floor_id): void
    {
        $this->floor_id = $floor_id;
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
     * @return int|null
     */
    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    /**
     * @param int|null $capacity
     */
    public function setCapacity(?int $capacity): void
    {
        $this->capacity = $capacity;
    }
}