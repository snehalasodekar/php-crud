<?php
declare(strict_types=1);


require('vendor/autoload.php');
require 'Controller/HomePageController.php';
require 'Controller/Cart.php';
require 'Model/DbConnection.php';
require 'Model/Customer.php';
require 'Model/CustomerGroups.php';
require 'Model/CustomerLoader.php';


session_start();
if (!isset($_SESSION)) {
    $_SESSION["cart"] = [];
}



$controller = new HomePageController();
$controller->render();

?>