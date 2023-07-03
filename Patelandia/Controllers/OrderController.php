<?php 

namespace Controllers;

use Views\MainView;

class OrderController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('order');
       $this -> view -> render(['css' => 'defaultGrazi.css']);
   }
}