<?php 

namespace Controllers;

use Views\MainView;

class HomeController extends Controller {
    public function __construct() {
        $this -> view = new MainView('home');
    }

    public function execute(): void {
        $this -> view -> render([
            'title' => 'Home'
        ]);
    }
}