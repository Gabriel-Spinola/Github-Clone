<?php 

namespace Controllers;

use Views\MainView;

class HomeController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('home');
       $this -> view -> render(['css' => 'home.css']);
   }
}