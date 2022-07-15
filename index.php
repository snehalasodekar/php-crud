<?php
declare(strict_types=1);

require 'Model/DbConnection.php';
require 'Model/ClassRoomLoader.php';
require 'Model/TeacherLoader.php';
require 'Model/Teacher.php';
require 'vendor/autoload.php';
require 'Controller/HomePageController.php';
require 'Controller/TeacherController.php';
require 'Controller/ClassRoomController.php';






$controller = new HomePageController();
$controller->render();

?>