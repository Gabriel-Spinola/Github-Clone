<?php

// ---------------------------------------------------------
// Contants
const INCLUDE_PATH = 'http://localhost:8080/Github%20Clone/';

const HOST = 'localhost';
const DATABASE = 'db_patelandia';
const USER = 'root';
const PASSWORD = '';

// ---------------------------------------------------------
// Imports
require "Database.php";

use Controllers\HomeController;

// ---------------------------------------------------------
// Autoload
$autoload = function(string $className): void {
    require $className . '.php';
};

spl_autoload_register($autoload);

// ---------------------------------------------------------
// Controllers
$homeController = new HomeController();

// ---------------------------------------------------------
// Controllers
Helpers\Router :: get('/', function() use($homeController): void {
    $homeController -> execute();
});