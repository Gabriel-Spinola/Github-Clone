<?php

namespace Controllers;

use Views\MainView;
use Models\LoginModel;

class LoginController extends Controller
{
    public function execute(): void
    {
        $this->view = new MainView('login');

        if (isset($_GET['logout'])) {
            LoginModel::logout();
        }

        $this->view->render([
            'css' => 'login.css',
        ]);
        
    }
}
