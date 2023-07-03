<?php

namespace Models;

use DbConnectionI;

class LoginModel
{
    public function __construct(private DbConnectionI $pdo)
    {
    }

    public static function isLoggedIn(): bool
    {
        return isset($_SESSION['isLogged']);
    }

    public static function logout(): void
    {
        session_destroy();
        setcookie('remember', 'true', time() - 1, '/');
        
        header('Location:' . INCLUDE_PATH);
        die;
    }

    public static function initSession(string $user, string $password, int $position): void
    {
        $_SESSION['isLogged'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['password'] = $password;
        $_SESSION['position'] = $position;
    }

    public function getUsers($user, $password)
    {
        $query = $this->pdo->connect()->prepare(
            "SELECT * FROM `users`
            WHERE user_name = ? AND `password` = ?;"
        );

        $query->execute([
            $user, $password
        ]);

        return $query;
    }

    public function rememberMe(string $user, string $password, int $position): void
    {
        $query = $this->pdo->connect()->prepare(
            "SELECT * FROM `tb_admin.users`
             WHERE user_name = ? AND `password` = ?;"
        );

        $query->execute([
            $user, $password
        ]);

        if ($query->rowCount() == 1) {
            self::initSession($user, $password, $position);
        }
    }
}