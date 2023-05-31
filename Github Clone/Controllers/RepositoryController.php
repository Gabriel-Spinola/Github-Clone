<?php 

namespace Controllers;

use Views\MainView;

class RepositoryController extends Controller {
   public function execute(): void {
       $this -> view = new MainView('repo');
       $this -> view -> render();
   }
}