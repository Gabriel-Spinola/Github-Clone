<?php

use Models\MenuModel;

$menuModel = new MenuModel(new MySql);
?>

<style>
    .cardapioc {
        /* width: 90vw; */
        display: flex;
        /* justify-content: space-around; */
        max-width: 80vw;
        margin-left: 9vw;
        flex-wrap: wrap;
        flex-direction: row;
    }

    .opção {
        position: absolute;
        top: 33vh;
    }

    .produtoc {
        /* display: flex; */
        border: 2px solid white;
        background-color: whitesmoke;
        width: 20vw;
        height: 38vh;
        margin: 10px;
        text-align: center;
        padding: 10px;
        border-radius: 1vh;
        flex: 1;
    }
</style>

<main>
    <section class="layoutc">

        <img src="<?php echo INCLUDE_PATH ?>Assets/mascote.png" title="mascote">

        <h1>CARDÁPIO</h1>

        <img src="<?php echo INCLUDE_PATH ?>Assets/mascote.png" title="mascote">

    </section>

    <div class="opção">

        <button type="button">
            <h2>Salgados</h2>
        </button>

        <button type="button">
            <h2>Bebidas</h2>
        </button>

        <button type="button">
            <h2>Combos</h2>
        </button>

    </div>

    <section class="cardapio">
        <section class="cardapioc">
            <?php foreach ($menuModel->getMenu() as $key => $row) : ?>
                <div class="produtoc">

                    <img src="<?php echo INCLUDE_PATH ?>Assets/<?php echo $row['img_file_name'] ?>">

                    <div class="textc">

                        <h1 class="nomedoproduto"><?php echo $row['item_name'] ?></h1>

                        <p class="descriçãoproduto"><?php echo $row['description'] ?></p>

                        <h3 class="price"><a href="<?php echo INCLUDE_PATH ?>order">R$<?php echo $row['price'] ?></a></h3>

                    </div>
                </div>
            <?php endforeach ?>
        </section>
    </section>
</main>