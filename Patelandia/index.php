<?php

// ---------------------------------------------------------
// Contants
const INCLUDE_PATH = 'http://localhost:8080/Patelandia/';

const HOST = 'localhost';
const DATABASE = 'db_patelandia';
const USER = 'root';
const PASSWORD = '';

// ---------------------------------------------------------
// Imports
require "Database.php";

use Controllers\HomeController;
use Controllers\LoginController;
use Controllers\ProductRegisterController;
use Controllers\OrderRegisterController;

// ---------------------------------------------------------
// Autoload
$autoload = function(string $className): void {
    require $className . '.php';
};

spl_autoload_register($autoload);

// ---------------------------------------------------------
// Controllers
$homeController = new HomeController();
$loginController = new LoginController();
$productRegister = new ProductRegisterController();
$orderRegister = new OrderRegisterController();

// ---------------------------------------------------------
// Controllers
Helpers\Router :: get('/', function() use($homeController): void {
    $homeController -> execute();
});

Helpers\Router :: get('/login', function() use($loginController): void {
    $loginController -> execute();
});

Helpers\Router :: get('/productregister', function() use($productRegister): void {
    $productRegister -> execute();
});

Helpers\Router :: get('/orderregister', function() use($orderRegister): void {
    $orderRegister -> execute();
});