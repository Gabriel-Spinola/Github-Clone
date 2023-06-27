<?php

// ---------------------------------------------------------
// Contants
const INCLUDE_PATH = 'http://localhost:8080/MVC/';

const HOST = 'localhost:3306';
const DATABASE = 'db_mvc';
const USER = 'root';
const PASSWORD = '';

// ---------------------------------------------------------
// Imports
require "Database/Database.php";
$connect = new MySql();
$connect -> connect();


// ---------------------------------------------------------
// Autoload
$autoload = function(string $className): void {
    require $className . '.php';
};

spl_autoload_register($autoload);

// ---------------------------------------------------------
// Controllers


// ---------------------------------------------------------
// Controllers
