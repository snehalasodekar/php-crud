<?php

class HomePageController
{
    public function render(){

        $classRoomLoader = new ClassRoomLoader();
        $controller = new ClassRoomController($classRoomLoader);
        $controller->renderClassRoom();
        //$classRoomLoader = new ClassRoomLoader();
        $classRoomArray = $classRoomLoader->getAllClassRooms();

        var_dump($classRoomArray);
    }
}