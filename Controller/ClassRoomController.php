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
        if(isset($_POST['info'])){
        $id = (int) $_POST['info'];
        $course = $allClassesArray[$id];
        include_once 'View/ClassesView.php';
        }else {
            include_once'View/ClassesView.php';
        }



}


}