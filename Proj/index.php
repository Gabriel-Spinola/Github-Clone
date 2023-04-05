<!--<!DOCTYPE html>
<html lang="pt-br">
	<head>
		
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    	<link href="Styles/style.css" rel="stylesheet">

		<title>Cafeteria</title>
		
	</head>	
	
	<body>
		<header>
			<nav class="navbar navbar-light bg-light">
				<div class="container fluid">
					<a class="navbar-brand" href="">
						<img class="d-inline-block align-text-top" alt="" src="assets/Coffee Shop Logo.png" width="50px" height="50px"> Café Caína
					</a>
				</div>

			</nav>
		</header>

		<main class="center">
			<h1>Wholesome</h1>
			<h1>goodness is here</h1>
		</main>

		<script src="Scripts/main.js"></script>
	</body>

</html>
-->

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

?>