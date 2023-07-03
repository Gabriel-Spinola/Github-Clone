<?php

use Models\StockModel;

$stockModel = new StockModel(new MySql);

if (isset($_GET['delete'])) {
    $stockModel->deleteItem($_GET['delete']);
}
?>
<script src="<?php echo INCLUDE_PATH ?>Scripts/jquery-3.7.0.js"></script>
<script src="<?php echo INCLUDE_PATH ?>Scripts/changeLocation.js"></script>

<main>
    <section>
        <h1 id="table">Estoque</h1>

        <form class="form-inline my-2 my-lg-0 SearchBar">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>

        <table class="table">
            <thead class="table-dark">
                <tr> <!--table Head-->
                    <td>#Id</td>
                    <td>Produto</td>
                    <td>Preço</td>
                    <td>Qtd. em Estoque</td>
                    <td>Categoria</td>
                    <td>Editar</td>
                    <td>Excluir</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($stockModel->menuModel->getMenu() as $key => $row) : ?>
                    <tr class="table-success"> <!--Pastel de Flango-->
                        <td class="product-id"><?php print $row['id'] ?></td>
                        <td><?php print $row['item_name'] ?></td>
                        <td>R$ <?php print $row['price'] ?></td>
                        <td><?php print $row['amount'] ?></td>

                        <?php

                        switch ($row['category']) {
                            case CATEGORIES['SALGADO']:
                                print '<td>Salgado</td>';
                            break;

                            case CATEGORIES['BEBIDA']:
                                print '<td>Bebida</td>';
                            break;

                            case CATEGORIES['COMBO']:
                                print '<td>Combo</td>';
                            break;
                        }

                        ?>

                        <td>
                            <button onclick="edit(<?php print $row['id'] ?>)" type="button" class="btn edit-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg>
                            </button>
                        </td>

                        <td>
                            <button 
                                type="button" 
                                onclick="deleteItem(<?php print $row['id'] ?>)"
                                class="btn btn-danger delete-button">X
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </section>

    <script>
        function edit(id) {
            changeLocation(`productregister?id=${id}`, true)
        }

        function deleteItem(id) {
            changeLocation(`stock?delete=${id}`, true)
        }
    </script>
</main>