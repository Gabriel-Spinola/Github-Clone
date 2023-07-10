<?php

const DATABASE_HOST = 'localhost:3306';
const DATABASE_USER = 'root';
const DATABASE_PASSWORD = '';
const DATABASE_NAME = 'db_shoppingcart';

function pdo_connect_mysql() {
    $pdo = null;

    if ($pdo == null) {
        // Custom error message for connection failure 
        // (also prevent from data leak)
        try {
            // Connect to the database
            $pdo = new PDO(
                'mysql:host='. DATABASE_HOST . ';dbname=' . DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD, 
                [
                    PDO :: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ]
            );

            // Set error mode
            $pdo -> setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            print "<h2>Error connecting to DataBase</h2>" . $e -> getMessage();
        }
    }
}

function header_template(string $title) { 
    ?> 

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title><?php print $title ?></title>

            <link href="style.css" rel="stylesheet" type="text/css">
            <link href="default.css" rel="stylesheet" type="text/css">
		    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        </head>

        <body>
            <header>
                <div class="content-wrapper">
                    <nav>
                        <a href="index.php">Home</a>
                        <a href="index.php?page=products">Products</a>
                    </nav>

                    <div class="link-icons">
                        <a href="index.php?page=cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </header>

            <main>

    <?php
}

function footer_template() {
    ?>
            </main>
            <footer>
                <div class="content-wrapper">
                    <p>&copy; 5555, Shopping cart</p>
                </div>
            </footer>
        </body>
    </html>
    <?php
}