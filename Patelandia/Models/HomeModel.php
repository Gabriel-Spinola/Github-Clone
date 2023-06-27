<?php 

namespace Models;

use DbConnectionI;

class HomeModel {
    public function __construct(private DbConnectionI $pdo) {}
}