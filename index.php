<?php
declare(strict_types=1);


require('vendor/autoload.php');
require 'Controller/HomePageController.php';
require 'Model/DbConnection.php';
require 'Model/StudentLoader.php';


$controller = new HomePageController();
$controller->render();

?>