<main>
    <section>
        <div class="fomr">
            <form action="" method="get">

                <h1 class="h3 mb-3 fw-normal title">Cadastre-Se</h1>

                <div class="form-floating mb-3">
                    <input type="email" required name="Email" id="email" placeholder="Email" class="form-control">
                    <label for="floatingInput"> Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="nome" required id="nome" placeholder="Nome" class="form-control"> 
                    <label for="name" class="form-label">Nome</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" required name="Senha" id="Senha" placeholder="Senha" class="form-control"> 
                    <label for="password" class="form-label">Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="tel" required name="Telefone" id="telefone" placeholder="Telefone" class="form-control" pattern="\+?\\[1-100]?\[1-100][0-9]" maxlength="15" type="number_format" minlength="09">
                    <label for="telefone" class="form-label">Telefone</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" required name="cpf" id="cpf" placeholder="CPF" class="form-control" pattern="\d{3}\.?\d{3}\.?\d{3}\-?\d{2}"> 
                    <label for="CPF" class="form-label"> CPF</label> 
                </div>

                <div class="form-floating mb-3">
                    <input type="search" required name="estado" id="estado" placeholder="Estado" class="form-control" list="Estado">
                    <datalist id="Estado">
                        <option value="MG"></option>
                    </datalist>
                    <label for="Estado" class="form-label">Estado</label> 
                </div>

                <input type="submit" value="Submit" class="btn btn-primary mb-3" id="submitbtn">
            </form>
        </div>
    </section>
</main> 