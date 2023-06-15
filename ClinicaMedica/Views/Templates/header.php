<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>

        <?php if (!is_null(@$pageInfo['css'])): ?>
            <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>Styles/<?php echo $pageInfo['css']?>">
        <?php endif ?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>Styles/style.css">
    </head>
    
    <body>
        <header class="border-bottom border-black text-center">
            <img src="./Assets/LOGO1.png" title="Hiper Saúde" class="logo">
           
            <nav>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>pacientes">Cadastrar Paciente</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>meds">Cadastrar Médico</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>agendar">Agendar Consulta</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>agendamentos">Agendamentos</a></li>
                </ul>
           </nav>
        </header>