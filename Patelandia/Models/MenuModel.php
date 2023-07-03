<?php

namespace Models;

use DbConnectionI;

class MenuModel {
    public function __construct(private DbConnectionI $pdo) {}

    public function getMenu(): array {
        $query = $this -> pdo -> connect() -> prepare(
            "SELECT * FROM `menu_item` ORDER BY id ASC"
        );

        $query -> execute();
        
        return $query -> fetchAll();
    }
}