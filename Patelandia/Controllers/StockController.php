<?php 

namespace Controllers;

use Views\MainView;

class StockController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('stock');
       $this -> view -> render(['css' => 'stock.css']);
   }
}