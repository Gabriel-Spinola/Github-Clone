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

// ---------------------------------------------------------
// Controllers
Helpers\Router :: get('/', function() use($loginController): void {
    $loginController -> execute();
});

Helpers\Router :: get('/aa', function() use($homeController): void {
    $homeController -> execute();
});