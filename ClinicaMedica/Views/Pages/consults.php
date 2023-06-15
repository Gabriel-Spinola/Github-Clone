<main class="container-fluid row g-5">
    <div class="col-sm-7">
        <section class="title container mb-5">
            <div class="border row">
                <h2 class="title2 fs-1">Agende sua consulta!</h2>
                <p>Aqui você pode escolher o mais conveniente para você</p>
                <a href="#">Já marcou uma?</a>
            </div>
        </section>        

        <section id="formulary">
            <form method="post" class="consult-form">
                <div class="row mb-3">
                    <div class="mb-3">
                        <label for="client-name" class="form-label fs-5 fw-medium">Seu nome*</label>
                        <input type="text" class="form-control" id="client-name" placeholder="Nome Aqui">
                    </div>
                    
                    <label for="client-email" class="form-label fs-5 fw-medium">Seu email*</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="client-email" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>

                    <div class="mb-3">
                        <label for="treatment" class="form-label fs-5 fw-medium">Escolha o tipo de tratamento*</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Outro</option>
                            <option value="1">Odontológia</option>
                            <option value="2">Ortopedista</option>
                            <option value="3">Psicologia</option>
                            <option value="4">Fisioterapia</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label fs-5 fw-medium">Oque você está sentindo*</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="treatment" class="form-label fs-5 fw-medium">Escolha a sede*</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Outro</option>
                            <option value="1">BH</option>
                            <option value="2">Betim</option>
                            <option value="3">Contagem</option>
                        </select>
                    </div>

                    <div class="mb-3 text-center">
                        <button type="button" class="btn btn-primary" disabled>Confirmar Agendamento</button>
                    </div>
                </div><!--@Row -->
            </form>
        </section>
    </div>

    <div id="right" class="col-sm">
        <section class="image">
            <img src="./Assets/medicooo.jpg" height="" class="border img-fluid mb-5"></img>
            <img src="./Assets/teste22.jpg" height="10px" class="border img-fluid"></img>
        </section>
    </div>
</main>