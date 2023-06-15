<?php 

namespace Controllers;

use Views\MainView;

class MedsController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('meds');
       $this -> view -> render(['css' => 'meds.css']);
   }
}