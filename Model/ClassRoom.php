<?php

class ClassRoom
{
    private int $id;
    private string $name;
    private string $location;
    private string $teachers;
    private string $students;

    public function __construct(array $row){
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->location = $row['location'];
        $this->teachers = $row['coachfirstname'];
        $this->students = $row['studentname'];
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
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getStudents(): string
    {
        return $this->students;
    }

    /**
     * @return string
     */
    public function getTeachers(): string
    {
        return $this->teachers;
    }
}