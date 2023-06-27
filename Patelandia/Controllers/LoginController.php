<?php 

namespace Controllers;

use Views\MainView;

class LoginController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('login');
       $this -> view -> render(['css' => 'login.css']);
   }
}