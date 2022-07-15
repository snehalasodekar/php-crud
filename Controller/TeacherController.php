<?php

class TeacherController
{
        private DbConnection $DbConTeacherLoader;
        public function __construct(DbConnection $con)
        {
            $this->DbConTeacherLoader = $con;
        }
        public function render():void {
           $teacherDataArr = $this->DbConTeacherLoader->getAllTeachers();
           if(isset($_POST['detail'])){
                $teacherId = (int)$_POST['detail'];
                $teachrDetails = $teacherDataArr[$teacherId-1];
                include 'View/teacherDetailView.php';
           }else{
               if(isset($_POST['detailReturn']) && $_POST['detailReturn'] =='fromdetailpage'){
                   include 'View/teacherView.php';
               } else{
                   include 'View/teacherView.php';
               }
            }
        }
}