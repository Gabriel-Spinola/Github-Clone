<?php

use Helpers\Response;

require '../Helpers/Response.php';

class RepoModel {
    public function __construct(private DbConnectionI $pdo) { }

    public function getRepos(): array {
        $query = $this -> pdo -> connect() -> prepare(
            "SELECT * FROM `repositories_tb` ORDER BY id DESC"
        );

        $query -> execute();
        
        return $query -> fetchAll();
    }

    /*public function searchRepo(string $id) {
        for$this->getRepos()

        $query -> execute();
        echo $id;
        echo $query -> fetchAll()[1];
        return $query -> fetchAll();
    }*/

    public function insertNewRepo(
        String $repoName, String $repoDescripton, int | string $owner,
        int $privacy, int $gitignore, int $license
    ): bool {
        $query = $this -> pdo -> connect() -> prepare(
            "INSERT INTO `repositories_tb`
            VALUES (null, ?, ?, CURRENT_TIMESTAMP, ?, ?, ?, ?, ?)"
        ); 
        
        return $query -> execute([
            $repoName, $repoDescripton, $owner,
            '0', $privacy, $gitignore, $license
        ]);
    }

    public function processForm() {
        if (isset($_POST['submit'])) {
            try {            
                $this -> insertNewRepo(
                    $_POST['repo-name'], $_POST['repo-description'], $_POST['owner'],
                    $_POST['privacy'], $_POST['gitignore'], $_POST['license']
                );

                header('Location: ' . INCLUDE_PATH . 'Pages/home.php');
                die;
            } catch (Exception $e) {
                Response::simpleResponse('error', 'Repository creation failed');
                echo $e -> getMessage();
            }
        }
    }
}