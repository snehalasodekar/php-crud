<?php
declare(strict_types=1);

class ClassRoomController{

    private DbConnection $classRoomLoader;

    public function __construct(DbConnection $con)
    {
        $this->classRoomLoader = $con;
    }
    public function render(){

        $allClassesArray = $this->classRoomLoader->retrieveAllClassRooms();
        if(isset($_POST['info'])) {
            $id = (int)$_POST['info'];
            $Students = $this->classRoomLoader->retrieveAllStudents($id);
            include_once 'View/classes/classesDetailView.php';

        }elseif(isset($_POST['edit']))
        {
            $id = (int)$_POST['edit'] - 1;
            //$newStudentFirstName = strtolower($_POST['newStudentFirstName']);
            //$newTeacherLastName = strtolower($_POST['newTeacherFirstName']);
            $allClassesArray = $this->classRoomLoader->retrieveAllClassRooms()[$id];
           $editing = $this->classRoomLoader->editClasses($id);
            include_once 'View/classes/classesEditForm.php';
        }
        elseif(isset($_POST['goback'])){
            include_once 'View/homepageView.php';
        }else{
            include_once 'View/ClassesView.php';
        }




}


}