<?php

// ---------------------------------------------------------
// Contants
const INCLUDE_PATH = 'http://localhost:8080/ClinicaMedica/';

const HOST = 'localhost';
const DATABASE = 'githubproj_db'; 
const USER = 'root';
const PASSWORD = '';

// ---------------------------------------------------------
// Imports
// require "Database.php";

use Controllers\HomeController;
use Controllers\AgendamentoController;
use Controllers\MedsController;
use Controllers\ConsultsController;
use Controllers\PacientesController;

// ---------------------------------------------------------
// Autoload
$autoload = function(string $className): void {
    require $className . '.php';
};

spl_autoload_register($autoload);

// ---------------------------------------------------------
// Controllers
$homeController = new HomeController();
$pacientes = new PacientesController();
$meds = new MedsController();
$consults = new ConsultsController();
$agendar = new AgendamentoController();

// ---------------------------------------------------------
// Controllers
Helpers\Router :: get('/', function() use($homeController): void {
    $homeController -> execute();
});

Helpers\Router :: get('/pacientes', function() use($pacientes): void {
    $pacientes -> execute();
});

Helpers\Router :: get('/meds', function() use($meds): void {
    $meds -> execute();
});

Helpers\Router :: get('/consultas', function() use($consults): void {
    $consults -> execute();
});

Helpers\Router :: get('/agendamentos', function() use($agendar): void {
    $agendar -> execute();
});