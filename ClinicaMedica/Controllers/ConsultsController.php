<?php 

namespace Controllers;

use Views\MainView;

class ConsultsController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('consultas');
       $this -> view -> render(['css' => 'consultas.css']);
   }
}