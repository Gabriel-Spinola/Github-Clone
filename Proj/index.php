<?php 

/**
 * ==== MVC ====
 * 
 * M: MODEL
 * V: VIEW
 * C: CONTROLLER
 * 
 * ================
 * 
 * /Contact Page
 *  Contact Controller => General Controller Class. (Execute the model and the view).
 *  Contact View => Render the page.
 *  Contact Model => Store the required function
*/

// ===========================
// Configuration
const INCLUDE_PATH = 'http://localhost:8080/Proj/';
const INCLUDE_PATH_VIEW = INCLUDE_PATH . 'Views/Pages/';

// ===========================
// Autoload

// Include class bases on their name
$autoload = function(string $class): void {
	include $class . '.php';
};

spl_autoload_register($autoload);

// ===========================
// Load Application
$app = new Application();
$app -> execute();

?>