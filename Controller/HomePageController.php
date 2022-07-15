<?php

class HomePageController
{
    public function render(){
        $teacherLoaderObj = new TeacherLoader();
        $teacherController = new TeacherController($teacherLoaderObj);
        $teacherController->render();
    }
}