@echo off
set /p REPONAME="Repo Name: "

mkdir %REPONAME%

echo "">%REPONAME%\index.php

mkdir %REPONAME%\Assets
mkdir %REPONAME%\Controllers

echo "">%REPONAME%\Controllers\Controller.php

mkdir %REPONAME%\Helpers
echo "">%REPONAME%\Helpers\Router.php
mkdir %REPONAME%\Models
mkdir %REPONAME%\Styles

mkdir %REPONAME%\Views
echo "">%REPONAME%\Views\MainView.php
mkdir %REPONAME%\Views\Pages
mkdir %REPONAME%\Views\Templates
echo "">%REPONAME%\Views\Templates\header.php
echo "">%REPONAME%\Views\Templates\footer.php

mkdir %REPONAME%\Scripts
mkdir %REPONAME%\Database

pause
exit