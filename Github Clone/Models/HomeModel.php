<?php 

class HomeModel {
    public function __construct(private DbConnectionI $pdo) {}

    public function getRepos(): array {
        $query = $this -> pdo -> connect() -> prepare(
            "SELECT * FROM `repositories_tb` ORDER BY id DESC"
        );

        $query -> execute();
        
        return $query -> fetchAll();
    }
}