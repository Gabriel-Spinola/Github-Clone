<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Github Clone</title>
        
        <?php if (!is_null(@$pageInfo['css'])): ?>
            <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>Styles/<?php echo $pageInfo['css']?>">
        <?php endif ?>

        <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>Styles/header.css">
        <link rel="stylesheet" href="<?php echo INCLUDE_PATH?>Styles/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>

    <body>
        <header>
            <nav class="topnav">
                <a id="github-logo"><i class="fa fa-github"></i></a>

                </i><input class="nav-searchbar border-default" placeholder="Search or jump to..."></input>

                <a href="#" class="navbar-item">Pull requests</a>
                <a href="#" class="navbar-item">Issues</a>
                <a href="#" class="navbar-item">Codespaces</a>
                <a href="#" class="navbar-item">Marketplace</a>
                <a href="#" class="navbar-item">Explore</a>

                <a href="#" class="navbar-item-r">@IP</a>
                <a href="#" class="navbar-item-r">@IP</a>
                <a href="#" class="navbar-item-r">@IP</a>
            </nav>
        </header>