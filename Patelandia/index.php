<?php
// ---------------------------------------------------------
// Session
session_start();

// ---------------------------------------------------------
// Constants
const INCLUDE_PATH = 'http://localhost:8080/Patelandia/';

const HOST = 'localhost:3306';
const DATABASE = 'db_patelandia';
const USER = 'root';
const PASSWORD = '';

const POSITIONS = [
    'USER' => 0,
    'ADMIN' => 1,
];
const POSITIONS_INT = [0, 1];

const CATEGORIES = [
    "SALGADO" => 0,
    "BEBIDA" => 1,
    "COMBO" => 2,
];

// ---------------------------------------------------------
// Imports
require "Database.php";

use Controllers\HomeController;
use Controllers\LoginController;
use Controllers\ProductRegisterController;
use Controllers\OrderRegisterController;
use Controllers\StockController;
use Controllers\MyOrdersController;
use Controllers\MenuController;
use Controllers\OrderController;

// ---------------------------------------------------------
// Autoload
$autoload = function (string $className): void {
    require $className . '.php';
};

spl_autoload_register($autoload);

// ---------------------------------------------------------
// Controllers
$homeController = new HomeController();
$loginController = new LoginController();
$productRegister = new ProductRegisterController();
$orderRegister = new OrderRegisterController();
$stockController = new StockController();
$myOrdersController = new MyOrdersController();
$menuController = new MenuController();
$orderController = new OrderController();

// ---------------------------------------------------------
// Router
Helpers\Router :: get('/', function() use($homeController): void {
    $homeController -> execute();
});

Helpers\Router :: get('/login', function() use($loginController): void {
    $loginController -> execute();
});

Helpers\Router :: get('/myorders', function() use($myOrdersController): void {
    $myOrdersController -> execute();
});

Helpers\Router :: get('/menu', function() use($menuController): void {
    $menuController -> execute();
});

Helpers\Router :: get('/order', function() use($orderController): void {
    $orderController -> execute();
});

if (isset($_SESSION['position']) && $_SESSION['position'] == POSITIONS["ADMIN"]) {
    Helpers\Router :: get('/productregister', function() use($productRegister): void {
        $productRegister -> execute();
    });

    Helpers\Router :: get('/orderregister', function() use($orderRegister): void {
        $orderRegister -> execute();
    });

    Helpers\Router :: get('/stock', function() use($stockController): void {
        $stockController -> execute();
    });
}