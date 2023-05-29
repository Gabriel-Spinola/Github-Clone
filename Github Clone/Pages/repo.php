<?php 

    require '../Database.php';
    require '../Models/RepoModel.php';

    $repoModel = new RepoModel(new MySql);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>GitHub Clone</title>

        <link rel="stylesheet" href="../Styles/addRepo.css">
        <link rel="stylesheet" href="../Styles/header.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>
        <?php foreach ($repoModel -> getRepos() as $key => $row):?>
            <?php if ($row['name'] == $_GET['id']): ?>
                <ul>
                    <li><b>Name:</b> <?php echo $row['name'] ?></li>
                    <li><b>Description:</b> <?php echo $row['description'] ?></li>
                    <li><b>Date:</b> <?php echo $row['date'] ?></li>
                    <li><b>Owner:</b> <?php echo $row['owner'] ?></li>
                    <li><b>Privacy:</b> <?php echo $row['privacy'] == 1 ? 'public' : 'private' ?></li>
                    <li><b>.gitignore:</b> <?php echo $row['gitignore'] ?></li>
                    <li><b>License:</b> <?php echo $row['license'] ?></li>
                </ul>
            <?php endif ?>
        <?php endforeach ?>

        <br>

        <a href="./home.php">Get back.</a>
    </body>
</html>