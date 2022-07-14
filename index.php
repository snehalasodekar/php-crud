<?php
declare(strict_types=1);

require 'Model/DbConnection.php';
require 'Model/ClassRoomLoader.php';
require ('vendor/autoload.php');
require 'Controller/HomePageController.php';
require 'Model/DbConnection.php';
require 'Model/StudentLoader.php';
require 'Controller/ClassRoomController.php';

$controller = new HomePageController();
$controller->render();

?>