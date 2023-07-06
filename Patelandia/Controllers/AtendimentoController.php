<?php 
namespace Controllers;

use Views\MainView;

class AtendimentoController extends Controller {
    public function execute(): void
    {
        $this->view = new MainView('atendimento');
        $this->view->render(['css' => 'sac.css']);
    }
}