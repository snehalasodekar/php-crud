<?php

class StudentController
{
    private StudentLoader $studentLoader;
    public function __construct(DbConnection $conn)
    {
        $this->studentLoader = $conn;
    }

    public function render(): void{

        if (isset($_POST['detail'])){
            $studentArr = $this->studentLoader->getAllStudents();
            if($_POST['detail'] === 'backToStudentView'){
                include_once 'View/studentView.php';
            }else{
                $id = (int) $_POST['detail'];
                $foundStudent = $studentArr[0];
                foreach ($studentArr as $student){
                    if ($student->getId()=== $id){
                        $foundStudent = $student;
                    }
                }
                include_once 'View/studentDetailView.php';
            }
        }elseif(isset($_POST['delete'])){
            $id = (int) $_POST['delete'];
            $this->studentLoader->deleteStudent($id);
            $studentArr = $this->studentLoader->getAllStudents();
            include_once 'View/deleteStudentSuccessfulView.php';
            include_once 'View/studentView.php';
        }elseif (isset($_POST['edit'])){
            $studentArr = $this->studentLoader->getAllStudents();
            $id = (int) $_POST['edit'];
            $foundStudent = $studentArr[0];
            foreach ($studentArr as $student){
                if ($student->getId()=== $id){
                    $foundStudent = $student;
                }
            }
            $classes = $this->studentLoader->getClasses();
            $teachers = $this->studentLoader->getTeachers();
            /*var_dump($classes);exit;*/
            include_once 'View/editStudentView.php';
        }
        else{
            $studentArr = $this->studentLoader->getAllStudents();
            include_once 'View/studentView.php';
        }

    }

}