<?php 

namespace Controllers;

use Views\MainView;

class PacientesController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('pacientes');
       $this -> view -> render(['css' => 'pacientes.css']);
   }
}