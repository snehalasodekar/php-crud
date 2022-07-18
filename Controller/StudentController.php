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
                include_once 'View/student/studentDetailView.php';
            }
        }elseif(isset($_POST['delete'])){
            $id = (int) $_POST['delete'];
            $this->studentLoader->deleteStudent($id);
            $studentArr = $this->studentLoader->getAllStudents();
            include_once 'View/student/deleteStudentSuccessfulView.php';
            include_once 'View/studentView.php';
        }elseif (isset($_POST['edit'])){
            $studentArr = $this->studentLoader->getAllStudents();
            if($_POST['edit'] === 'backToStudentView'){
                include_once 'View/studentView.php';
            }else{
                $id = (int) $_POST['edit'];
                $foundStudent = $studentArr[0];
                foreach ($studentArr as $student){
                    if ($student->getId()=== $id){
                        $foundStudent = $student;
                    }
                }
                $classes = $this->studentLoader->getClasses();
                include_once 'View/student/editStudentView.php';
            }
        }elseif (isset($_POST['editStudent'])){
            $name = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $id =(int) $_POST['editStudent'];
            $classId = (int) $_POST['selectClass'];
            $this->studentLoader->updateStudent($id , $name, $lastName, $email, $address, $classId);
            $studentArr = $this->studentLoader->getAllStudents();
            include_once 'View/studentView.php';
        }elseif (isset($_POST['addStudent'])){
            if ($_POST['addStudent'] === 'submit'){
                $name = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $classId = (int) $_POST['selectClass'];
                $this->studentLoader->addNewStudent($name, $lastName, $email, $address, $classId);
                $studentArr = $this->studentLoader->getAllStudents();
                include_once 'View/studentView.php';
            }elseif($_POST['addStudent'] === 'backToStudentView'){
                $studentArr = $this->studentLoader->getAllStudents();
                include_once 'View/studentView.php';
            }else{
                $classes = $this->studentLoader->getClasses();
                include_once 'View/student/addNewStudentView.php';
            }
        }elseif (isset($_POST['back'])){
            include_once 'View/homepageView.php';
        }
        else{
            $studentArr = $this->studentLoader->getAllStudents();
            include_once 'View/studentView.php';
        }

    }

}