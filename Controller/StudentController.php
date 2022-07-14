<?php

class StudentController
{
    private DbConnection $studentLoader;
    public function __construct(DbConnection $conn)
    {
        $this->studentLoader = $conn;
    }

    public function render(){
        $studentArr = $this->studentLoader->getAllStudents();
        var_dump($studentArr);
        foreach ($studentArr as $student){
            var_dump($student->getTeachers());
        }

    }

}