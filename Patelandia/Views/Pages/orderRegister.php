<?php
    $orders = [];
?>

<main>
    <h2 class="center mb-4 mt-4">Registro de venda</h2>
    <hr class="center mb-4">

    <div class="order-row">
        <section class="order-register">
            <form action="" autocomplete="off" method="post" id="order-form">
                <div class="mb-3">
                    <label for="product-name" class="form-label">Nome do produto</label>
                    <input type="text" class="form-control" id="product-name" name="product-name" placeholder="Produto" required>
                </div>
                            
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">quantidade</label>
                    <input class="form-control" type="number" min="0.00" max="10000.00" step="0.01" placeholder='Preço do produto (R$)' required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detalhes da venda (opcional)</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descrição"></textarea></textarea>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" name="submit" class="btn btn-outline-danger center" onclick="addRow()">Enviar</button>
                </div>
            </form>

            <?php

                if (isset($_POST['submit'])) {
                    array_push($orders, $_POST['product-name']);
                }

            ?>
        </section>

        <div id="divisor"></div>

        <section class="orders">
            <table class="table" id="orders-table">
                <tr>
                    <td>Row1 cell1</td>
                </tr>
                
                <?php for ($i = 0; $i < count($orders); $i++): ?>
                    <tr>
                        <td><?php echo $orders[$i] ?></td>
                    </tr>
                <?php endfor ?>
            </table>
        </section>
    </div>
    
    <script src="<?php echo INCLUDE_PATH ?>Scripts/autoComplete.js"></script>

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