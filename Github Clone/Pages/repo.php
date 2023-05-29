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
                <span><?php echo $row['name'] ?></span>
                <span><?php echo $row['description'] ?></span>
                <span><?php echo $row['date'] ?></span>
                <span><?php echo $row['owner'] ?></span>
                <span><?php echo $row['privacy'] == 1 ? 'public' : 'private' ?></span>
                <span><?php echo $row['gitignore'] ?></span>
                <span><?php echo $row['license'] ?></span>
            <?php endif ?>
        <?php endforeach ?>

        <h1>Hello, World</h1>
    </body>
</html>