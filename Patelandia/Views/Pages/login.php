<?php

use DbConnectionI;
use Models\LoginModel;

$loginModel = new LoginModel(new MySql);

if (isset($_COOKIE['remember'])) {
    $user = $_COOKIE['user'];
    $password = $_COOKIE['password'];
    $position = $_COOKIE['position'];

    $loginModel->rememberMe($user, $password, $position);
}

?>

<main class="text-center">
    <form method="post" class="form-signin">
        <img class="mb-4" id="pastelandia-logo" src="<?php echo INCLUDE_PATH ?>Assets/logo-pastelandia.jpg" alt="" width="128" height="128">
        <h1 class="h3 mb-3 font-weight-normal">Favor Faça Login</h1>

        <label for="username" class="sr-only">Nome de Usuário</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Usuário" required autofocus>

        <label for="password" class="sr-only">Senha</label>
        <input type="password" id="password" name="password" class="form-control mt-2" placeholder="Senha" required>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembre de mim
            </label>
        </div>

        <input type="submit" id="submit" name="submit" class="btn btn-lg btn-outline-danger btn-block" type="submit">
    </form>

    <?php if (isset($_POST['submit'])) : ?>
        <?php
            $username = $_POST['username'];
            $password = $_POST['password'];

            $users = $loginModel -> getUsers($username, $password);
        ?>

        <?php  if ($users -> rowCount() == 1): ?>
            <?php
                $info = $users -> fetch();
                $position = $info['position'];

                LoginModel :: initSession($username, $password, $position);

                if (isset($_POST['remember'])) {
                    setcookie('remember', true, time() + (pow(60, 2) * 24) * 7, '/');
                    setcookie('user', $user, time() + (pow(60, 2) * 24) * 7, '/');
                    setcookie('password', $password, time() + (pow(60, 2) * 24) * 7, '/');
                    setcookie('position', $position, time() + (pow(60, 2) * 24) * 7, '/');
                }

                header('Location: ' . INCLUDE_PATH);
                die; 
            ?>
        <?php else: ?>
            <script>alert("Incorrect username or password")</script>
        <?php endif ?>
    <?php endif ?>
</main>