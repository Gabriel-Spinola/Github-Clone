<main>
    <h2 class="center mb-4 mt-4">Registro de produtos</h2>
    <hr class="center mb-4">

    <section class="register center">
        <form method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome do produto</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Produto" required>
            </div>
                        
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Preço</label>
                <input class="form-control" type="number" min="0.00" max="10000.00" step="0.01" placeholder='Preço do produto (R$)' required>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Estoque</label>
                <input class="form-control" type="number" min="0" step={1} placeholder='quantidade no estoque' required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Categorias</option>
                    <option value="1">Salgado</option>
                    <option value="2">Bebida</option>
                    <option value="3">Combos</option>
                    <option value="4">Outros</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição do produto</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descrição" required></textarea></textarea>
            </div>

            <div class="mb-3 text-center">
                <input type="submit" name="submit" class="btn btn-outline-danger center">
            </div>
        </form>
    </section>
</main> 
