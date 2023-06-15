<?php 

namespace Controllers;

use Views\MainView;

class HomeController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('agendamentos');
       $this -> view -> render(['css' => 'agendamentos.css']);
   }
}