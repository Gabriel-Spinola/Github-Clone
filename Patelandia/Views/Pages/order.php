<?php

use Models\MenuModel;

$menuModel = new MenuModel(new MySql);
?>

<script src="<?php echo INCLUDE_PATH ?>Scripts/jquery-3.7.0.js"></script>

<style>
    .produtos {
        display: flex;
        width: 70vw;
        flex-flow: row;
        flex-wrap: wrap;
        justify-content: flex-start;
    }

    .choosen {
        position: fixed;
        right: 0;
        width: 23%; 
        height: 180vh;
        z-index: -4;                                  
        top: 12vh;
        text-align: center;
    }

</style>

<main id="mainpedir">
    <div class="containerp">
        <section class="produtos"> <!-- Works as new row because grazi boba -->
            <?php foreach ($menuModel->getMenu() as $key => $row) : ?>
                <div class="choose">
                    <img src="<?php echo INCLUDE_PATH ?>Assets/pastelfrango.jpg">
                    <h3><?php echo $row['item_name'] ?></h3>

                    <div class="preçoc">
                        <h2>R$<?php echo $row['price'] ?></h2>

                        <button onclick="click()" id="add-order">
                            <h1>+</h1>
                        </button>
                    </div>
                </div>
            <?php endforeach ?>
        </section>
    </div>

    <button type="button" onclick="click()">aaa</button>

    <aside class="choosen">
        <div class="finalização">
            <h1>PEDIDO</h1>

            <hr>

            <table class="tabelapedido" id="orders-table">
                <thead>
                    <th>Nome do produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                </thead>

                <tr>
                    <td><button>-</button> 1 <button class="add-order">+</button></td>
                    <td>Pastel de frango</td>
                    <td>2,00</td>
                </tr>

            </table>

            <br>
            <hr>
            <br>

            <a href="#">
                <button>
                    <h3>Finalizar</h3>
                </button>
            </a>
        </div>
    </aside>

    <div class="displayData"></div>

    <script>
        let count = 0;

        function addTable() {
            let name = document.getElementById("product-name");
            let amount = document.getElementById("amount");
            let details = document.getElementById("details");

            const addRow = () => {
                let tableRef = document.getElementById("orders-table")

                let newRow = tableRef.insertRow(-1);

                let nameCell = newRow.insertCell(0);
                let amountCell = newRow.insertCell(1);
                let detailsCell = newRow.insertCell(2);

                let nameText = document.createTextNode(name.value);
                let amountText = document.createTextNode(amount.value);
                let detailsText = document.createTextNode(details.value);

                nameCell.appendChild(nameText);
                amountCell.appendChild(amountText);
                detailsCell.appendChild(detailsText);
            }

            addRow();
        }

        $("#add-order").on("click", function(e) {
            e.stopImmediatePropagation();
            count++;

            // $("#add-order").children().find("h1").text(count);
            console.log(count - 2);
            $(".add-order").parent('td').innerHTML =`<h1>${count}</h1>`;
        });

        let confirmForm = $("add-order");

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
                    test: jsonString
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
    </script>

    <!-- <script src="<?php echo INCLUDE_PATH ?>Scripts/orderForm.js"></script> -->
</main>