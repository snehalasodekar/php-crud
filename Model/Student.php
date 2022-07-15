<?php

class Student
{
    private int $id;
    private string $name;
    private string $lastName;
    private string $email;
    private string $address;
    private string $className;
    private array $teachers;

    /**
     * @param int $id
     * @param string $name
     * @param string $lastName
     * @param string $email
     * @param string $address
     * @param string $className
     * @param array $teachers
     */
    public function __construct(int $id, string $name, string $lastName, string $email, string $address, string $className, array $teachers)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->address = $address;
        $this->className = $className;
        $this->teachers = $teachers;
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
    public function getName(): string
    {
        return $this->name;
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
     * @return string
     */
    public function getClassName(): string
    {
        return $this->className;
    }

    /**
     * @return array
     */
    public function getTeachers(): array
    {
        return $this->teachers;
    }




}