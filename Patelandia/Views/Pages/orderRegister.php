<?php

use Models\OrderRegisterModel;
use Models\StockModel;

$stockModel = new StockModel(new MySql);
?>

<script src="<?php echo INCLUDE_PATH ?>Scripts/jquery-3.7.0.js"></script>

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
            <form id="confirm-order" action="">
                <table class="table" id="orders-table">
                    <thead>
                        <th>Nome do produto</th>
                        <th>Quantidade</th>
                        <th>Detalhes</th>
                    </thead>
                </table>

                <h4>Valor Total: R$ 100.00</h4>

                <div class="mb-3 text-center">
                    <button type="submit" name="submit-order" class="btn btn-outline-danger">Confirmar</button>
                </div>

                <p id="info"></p>
            </form>
        </section>
    </div>

    <div class="displayData">

        <?php

        // $orderRegisterModel = new OrderRegisterModel(new MySql);


        // $orderRegisterModel->AtLeastUpdate();
        ?>

    </div>

    <script>
        $(document).ready(() => {
            let confirmForm = $("#confirm-order");

            confirmForm.click((e) => {
                e.preventDefault();

                document.getElementById('info').innerHTML = "";
                var myTab = document.getElementById('orders-table');

                // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
                myTab.rows.item(0).cells;
                var products = [];
                let productHtml = [];

                for (i = 1; i < myTab.rows.length; i++) {
                    var objCells = myTab.rows.item(i).cells;

                    products.push([objCells.item(0), objCells.item(1), objCells.item(2)]);

                    info.innerHTML = info.innerHTML + '<br />';
                }

                for (i = 0; i < products.length; i++) {
                    productHtml.push(products[i][0].innerHTML);
                    productHtml.push(products[i][1].innerHTML);
                    productHtml.push(products[i][2].innerHTML);
                }

                var jsonString = JSON.stringify(productHtml);

                $.ajax({
                    type: "POST",
                    url: "<?php echo INCLUDE_PATH ?>Models/OrderRegisterModel.php",
                    data: {
                        info: jsonString
                    },
                    cache: false,
                    success: function(data) {
                        $('.displayData').html(data);
                        console.log(data)
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });
            });
        })
    </script>

    <script src="<?php echo INCLUDE_PATH ?>Scripts/autoComplete.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>Scripts/orderForm.js"></script>

    <script>
        options = [
            <?php
            foreach ($stockModel->menuModel->getMenu() as $key => $row) :
                echo '"' . $row['item_name'] . '",';
            endforeach
            ?>
        ];

        autocomplete(document.getElementById("product-name"), document.getElementById("product-id"), options);
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