<?php

class HomePageController
{
    public function render(){

        /*$classRoomLoader = new ClassRoomLoader();
        $controller = new ClassRoomController($classRoomLoader);
        $controller->renderClassRoom();
        $classRoomArray = $classRoomLoader->getAllClassRooms();*/

        $studentLoader = new StudentLoader();
        $controller = new StudentController($studentLoader);


        $controller->render();
    }
}