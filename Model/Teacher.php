<?php

class Teacher
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $address;
    private int $classId;
    private array $students;
    private array $className;

    public function __construct($id,$firstname,$lastname,$email,$address,$classId,$students,$className)
    {
        $this->id = $id;
        $this->firstName = $firstname;
        $this->lastName = $lastname;
        $this->email = $email;
        $this->address = $address;
        $this->classId = $classId;
        $this->students = $students;
        $this->className = $className;
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
    public function getLastName(): string
    {
        return $this->lastName;
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

    /**
     * @return string
     */
    public function getClassName() :array
    {
        return $this->className;
    }

    /**
     * @return array
     */
    public function getStudents() :array
    {
        return $this->students;
    }

}