<?php

namespace Models;

use DbConnectionI;
use Exception;
use Helpers\Response;

class RepoModel {
    public function __construct(private DbConnectionI $pdo) { }

    public function getRepos(): array {
        $query = $this -> pdo -> connect() -> prepare(
            "SELECT * FROM `repositories_tb` ORDER BY id DESC"
        );

        $query -> execute();
        
        return $query -> fetchAll();
    }

   /* public function searchRepo(string $id) {
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

    public function updateRepo(
        String $repoName, String $repoDescripton,
        int $privacy, int $gitignore, int $license, int $id
    ): bool {
        $query = $this -> pdo -> connect() -> prepare(
            "UPDATE `repositories_tb`
             SET `name`=?, `description`=?, `privacy`=?, `gitignore`=?, `license`=?
             WHERE `id` = ?"
        ); 
        
        return $query -> execute([
            $repoName, $repoDescripton,
            $privacy, $gitignore, $license,
            $id
        ]);
    }

    public function deleteRepo(int $id): bool {
        $query = $this -> pdo -> connect() -> prepare(
            "DELETE FROM `repositories_tb` WHERE `id`=?"
        );

        return $query -> execute([$id]);
    }

    public function processForm(int $id = -1): void {
        if (isset($_POST['submit'])) {
            try {
                if ($id != -1) {
                    $this -> updateRepo(
                        $_POST['repo-name'], $_POST['repo-description'], $_POST['privacy'],
                        $_POST['gitignore'], $_POST['license'], $id
                    );

                    header('Location: ' . INCLUDE_PATH . 'repo?id=' . $id);
                    die;
                }
                else {
                    $this -> insertNewRepo(
                        $_POST['repo-name'], $_POST['repo-description'], $_POST['owner'],
                        $_POST['privacy'], $_POST['gitignore'], $_POST['license']
                    );
                }

                header('Location: ' . INCLUDE_PATH);
                die;
            } catch (Exception $e) {
                Response::simpleResponse('error', 'Repository creation failed');
                echo $e -> getMessage();
            }
        }
    }
}