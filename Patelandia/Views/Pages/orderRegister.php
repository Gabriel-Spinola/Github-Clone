<main>
    <h2 class="center mb-4 mt-4">Registro de venda</h2>
    <hr class="center mb-4">

    <div class="order-row">
        <section class="order-register">
            <form action="" autocomplete="off" id="order-form">
                <div class="mb-3">
                    <label for="product-name" class="form-label">Nome do produto</label>
                    <input type="text" class="form-control" id="product-name" name="product-name" placeholder="Produto" required>
                </div>
                            
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">quantidade</label>
                    <input class="form-control" id="amount" name="amount" type="number" min="0" max="10000" step="1" placeholder='Preço do produto (R$)' required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detalhes da venda (opcional)</label>
                    <textarea class="form-control" id="details" name="detailss" rows="3" placeholder="Descrição"></textarea></textarea>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" name="submit" class="btn btn-outline-danger center">Enviar</button>
                </div>
            </form>
        </section>

        <div id="divisor"></div>

        <section class="orders">
            <table class="table" id="orders-table">
                <thead>
                    <th>Nome do produto</th>
                    <th>Quantidade</th>
                    <th>Detalhes</th>
                </thead>
            </table>    

            <h4>Valor Total: R$ 100.00</h4>
        </section>
    </div>
    
    <script src="<?php echo INCLUDE_PATH ?>Scripts/autoComplete.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>Scripts/orderForm.js"></script>

    <script>
        options = ["Café", "Coca", "Hamburguer", "Pastel"];

        autocomplete(document.getElementById("product-name"), options);
    </script>

    <style>
        .autocomplete-items {
            position: relative;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
                /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }

        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>

</main>