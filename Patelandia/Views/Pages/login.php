<main class="text-center">
    <form class="form-signin">
        <img class="mb-4" id="pastelandia-logo" src="<?php echo INCLUDE_PATH ?>Assets/logo-pastelandia.jpg" alt="" width="128" height="128">
        <h1 class="h3 mb-3 font-weight-normal">Favor Faça Login</h1>

        <label for="inputUser" class="sr-only">Nome de Usuário</label>
        <input type="text" id="inputUser" class="form-control" placeholder="Usuário" required autofocus>

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control mt-2" placeholder="Senha" required>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembre de mim
            </label>
        </div>

        <button class="btn btn-lg btn-outline-danger btn-block" type="submit">Entrar</button>
    </form> 
</main>