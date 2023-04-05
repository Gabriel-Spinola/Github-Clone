<?php 

namespace Views;

class MainView {
    public function __construct(
        private string $filename,
    ) { }

    public function render(array $pageInfo = []): void {
        include 'Pages/' . $this -> filename . '.php'; 
    }
}