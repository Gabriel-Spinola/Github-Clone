<?php 

namespace Controllers;

use Views\MainView;

class AddRepoController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('addRepo');
       $this -> view -> render();
   }
}