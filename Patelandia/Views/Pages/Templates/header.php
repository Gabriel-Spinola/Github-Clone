<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Pastelandia</title>

        <?php if (!is_null(@$pageInfo['css'])): ?>
            <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>Styles/<?php echo $pageInfo['css']?>">
        <?php endif ?>

        <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>Styles/header.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>Styles/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <header>
            <nav class="navcliente">
                <img id="logo-img" src="<?php echo INCLUDE_PATH ?>Assets/pastelandia/logopng.png" width="120" height="80" title="pastelândia">

                <ul class="navlist">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="cardapio.html">Cardápio</a></li>
                    <li><a href="./meuspedidos.html">Meus pedidos</a></li>
                    <li><button><a href="./pedir.html">Fazer pedido</a></button></li>
                </ul>
            </nav>
        </header>