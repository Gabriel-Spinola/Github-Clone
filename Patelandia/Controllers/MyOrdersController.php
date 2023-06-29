<?php 

namespace Controllers;

use Views\MainView;

class MyOrdersController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('meuspedidos');
       $this -> view -> render(['css' => 'meuspedidos.css']);
   }
}