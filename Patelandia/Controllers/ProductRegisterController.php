<?php 

namespace Controllers;

use Views\MainView;

class ProductRegisterController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('productRegister');
       $this -> view -> render(['css' => 'productRegister.css']);
   }
}