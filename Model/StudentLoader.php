<?php

class StudentLoader extends DbConnection
{
    public function __construct()
    {
        parent::__construct();
    }

    public static function getAllStudents(): array
    {
       //$this->connect->query('select * from student');
    }
}