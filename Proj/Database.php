<?php

interface DBConnectionI {
    public function connect(): PDO;
}

class MySql implements DBConnectionI {
    private $pdo;

    public function connect(): PDO {
        if ($this -> pdo) {
            // Custom err
            try {
                $this -> pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD, [
                    PDO :: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ]);

                // Set err mode
                $this -> pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (Exception $e) {
                print "<h2>Error Connecting to  Database</h2>";
            }
        }

        return $this -> pdo;
    }
}