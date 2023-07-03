<?php

namespace Controllers;

use Views\MainView;

class MenuController extends Controller {
    public function execute(): void {
        $this->view = new MainView('menu');
        $this->view->render(['css' => 'defaultGrazi.css']);
    }
}
