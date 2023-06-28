<?php 

namespace Controllers;

use Views\MainView;

class OrderRegisterController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('orderRegister');
       $this -> view -> render(['css' => 'orderRegister.css']);
   }
}