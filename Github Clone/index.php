<?php

// Configuration
const INCLUDE_PATH = 'http://localhost:8080/Github%20Clone/';

const HOST = 'localhost';
const DATABASE = 'githubproj_db';
const USER = 'root';
const PASSWORD = '';

require "Database.php";

use Controllers\HomeController;
use Controllers\AddRepoController;

// ---------------------------------------------------------
// Autoload
$autoload = function(string $className): void {
    require $className . '.php';
};

spl_autoload_register($autoload);

// ---------------------------------------------------------
// Controllers
$homeController = new HomeController();
$addRepoController = new AddRepoController();

// ---------------------------------------------------------
// Controllers
Helpers\Router :: get('/', function() use($homeController): void {
    $homeController -> execute();
});

Helpers\Router :: get('/addRepo', function() use($addRepoController): void {
    $addRepoController -> execute();
});