<?php

namespace Views;

/**
 * @namespace View
*/
class MainView {
    public function __construct(
        private $fileName,
        private $header = 'header',
        private $footer = 'footer',
    ) { }
    
    public function render(array $pageInfo = []): void {
        include 'Templates/' . $this -> header . '.php';
        include 'Pages/' . $this -> fileName . '.php';
        include 'Templates/' . $this -> footer . '.php';
    }
}