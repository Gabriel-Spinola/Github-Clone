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
                
            }
        }
    }
}