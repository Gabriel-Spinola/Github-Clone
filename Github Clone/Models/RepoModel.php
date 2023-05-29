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

    public function processForm() {
        if (isset($_POST['submit'])) {
            try {            
                $owner = $_POST['owner'];
                $repoName = $_POST['repo-name'];
                $repoDescripton = $_POST['repo-description'];
                $privacy = $_POST['privacy'];
                $gitignore = $_POST['gitignore'];
                $license = $_POST['license'];

                $query = $this -> pdo -> connect() -> prepare(
                    "INSERT INTO `repositories_tb`
                    VALUES (null, ?, ?, CURRENT_TIMESTAMP, ?, ?, ?, ?, ?)"
                ); 
                
                $query -> execute([
                    $repoName, $repoDescripton, $owner,
                    '0', $privacy, $gitignore, $license
                ]);

                header('Location: ' . INCLUDE_PATH . 'Pages/home.php');
                die;
            } catch (Exception $e) {
                Response::simpleResponse('error', 'Repository creation failed');
                echo $e -> getMessage();
            }
        }
    }

    public function insertNewRepo(

    ): array {
        $query = $this -> pdo -> connect() -> prepare(
            "INSERT INTO `repositories_tb` ORDER BY id DESC"
        );

        $query -> execute();
        
        return $query -> fetchAll();
    }
}