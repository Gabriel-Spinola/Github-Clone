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
        <?php $repoModel -> processForm() ?>

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

        <main class="center">
            <section class="title">
                <h2 class="title2">Create a new repositor</h2>
                <p>A repository contains all project files, including the revision history. Already have a project repository elsewhere?</p>
                <a href="#">Import a repository.</a>
            </section>
            
            <hr>

            <form method="post">
                <section class="repo-detail">
                    <fieldset>
                        <legend>Repository owner and name</legend>

                        <div class="owner-box">
                            <label for="owner">Owner *</label>
                            <select name="owner" id="owner">
                                <option value="Gabriel-Spinola" selected><img src="#"> Gabriel-Spinola ></option>
                                <option value="Test2"><img src="#"> Test2 ></option>
                            </select>
                        </div>

                        <span>/</span>

                        <div class="repo-name">
                            <label>Repository name *</label>
                            <input type="text" name="repo-name" id="repo-name-input">
                        </div>
                    </fieldset>

                    <p>Great repository names are short and memorable. Need inspiration? How about <a href="#">reimagined-telegram?</a></p>

                    <input type="text" name="repo-description" id="repo-description-input">
                </section>

                <hr>

                <section class="privacy">
                    <div class="privacy-box">
                        <label for="public">Public</label>
                        <input type="radio" id="public" name="privacy" value="1">

                        <span>Anyone on the internet can see this repository. You choose who can commit.</span>
                        <svg>P</svg>
                    </div>

                    <div class="privacy-box">
                        <label for="private">Private</label>
                        <input type="radio" id="private" name="privacy" value="0">

                        <span>You choose who can see and commit to this repository.</span>
                        <svg>P</svg>
                    </div>
                </section>

                <hr>

                <section class="repo-initialization">
                    <label for="readme">Initialize this repository with:</label>
                    <div class="readme-check-box">
                        <label for="readme">Add a README file</label>
                        <input type="checkbox" id="readme" name="readme" value="false">

                        <span>This is where you can write a long description for your project. <a href="#">Learn more about READMEs.</a></span>
                    </div>

                    <div class="gitignore-box">
                        <label for="gitignore">Add .gitignore</label>
                        <select name="gitignore" id="gitignore">
                            <option value="0">None</option>
                            <option value="1">AL</option>
                            <option value="999">...</option>
                        </select>

                        <span>Choose which files not to track from a list of templates. <a href="#">Learn more about ignoring files.</a></span>
                    </div>

                    <div class="license-box">
                        <label for="license">Add .gitignore</label>
                        <select name="license" id="license">
                            <option value="1">None</option>
                            <option value="2">GNU</option>
                            <option value="3">MIT</option>
                        </select>

                        <span>Choose which files not to track from a list of templates. <a href="#">Learn more about ignoring files.</a></span>
                    </div>
                </section>

                <hr>

                <section class="warning">
                    <span><svg>I</svg>You are creating a private repository in your personal account.</span>
                </section>

                <hr>

                <section class="submit-box">
                    <input type="submit" name="submit" value="Create Repository">
                </section>
            </form>
        </main>

        <hr>

        <footer>
            <div class="copyright-box">
                <a id="copyright" href="#"><i class="fa fa-github"></i>   © 2023 Github, Inc.</a>
            </div>

            <nav class="footer-links">
                <ul>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Security</a></li>
                    <li><a href="#">Status</a></li>
                    <li><a href="#">Docs</a></li>
                    <li><a href="#">Contact Github</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">API</a></li>
                    <li><a href="#">Training</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
        </footer>
    </body>
</html>