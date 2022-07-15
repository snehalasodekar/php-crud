<?php

class TeacherController
{
    private DbConnection $DbConTeacherLoader;

    public function __construct(DbConnection $con)
    {
        $this->DbConTeacherLoader = $con;
    }

    public function render(): void
    {
        $teacherDataArr = $this->DbConTeacherLoader->getAllTeachers();
        if (isset($_POST['detail'])) {
            $teacherId = (int)$_POST['detail'];
            $teacherDetails = $teacherDataArr[$teacherId - 1];
            include 'View/teacherDetailView.php';
        } else {
            if (isset($_POST['detailReturn'])) {
                $page = $_POST['detailReturn'];
                switch ($page) {
                    case 'fromdetailpage':
                        include 'View/teacherView.php';
                        break;
                    case 'updateTeacher' :
                        include 'View/teacherUpdateView.php';
                        break;
                }
            } else {
                include 'View/teacherView.php';
            }
        }
    }
}