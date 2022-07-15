<?php
declare(strict_types=1);

require ('vendor/autoload.php');
require 'Model/DbConnection.php';
require 'Model/ClassRoomLoader.php';
require 'Model/ClassRoom.php';
require 'Model/StudentLoader.php';
require 'Model/Student.php';
require 'Controller/HomePageController.php';
require 'Controller/ClassRoomController.php';
require 'Controller/StudentController.php';


require 'View/header.php';

$controller = new HomePageController();
$controller->render();

require 'View/footer.php';



