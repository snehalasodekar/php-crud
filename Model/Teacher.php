<?php

class Teacher
{
    private int $id;
    private string $firstName;
    private string $lasName;
    private string $email;
    private string $address;
    private int $classId;

    public function __construct()
    {
        $this->firstName = $firstName;
        $this->lasName = $lastName;
        $this->email = $email;
        $this->address = $address;
        $this->classId = $classId;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLasName(): string
    {
        return $this->lasName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return int
     */
    public function getClassId(): int
    {
        return $this->classId;
    }


}