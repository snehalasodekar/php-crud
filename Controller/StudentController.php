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
        if (isset($_POST['detail'])){
            $id = (int) $_POST['detail']-1;
            $foundStudent = $studentArr[$id];
            include_once 'View/studentDetailView.php';
        }else{
            include_once 'View/studentView.php';
        }

    }

}