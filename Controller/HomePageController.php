<?php

class HomePageController
{
    public function render() : void{

        if (isset($_GET['page'])){
            switch ($_GET['page']){
                case 'teacher':
                    $teacherLoader = new TeacherLoader();
                    $controller = new TeacherController($teacherLoader);
                    break;
                case 'student':
                    $studentLoader = new StudentLoader();
                    $controller = new StudentController($studentLoader);
                    break;
                case 'class':
                    $classRoomLoader = new ClassRoomLoader();
                    $controller = new ClassRoomController($classRoomLoader);
                    break;
                default:
                    $studentLoader = new StudentLoader();
                    $controller = new StudentController($studentLoader);
                    break;
            }
            $controller->render();
        }else{
            include_once 'View/homepageView.php.php';
        }
    }
}