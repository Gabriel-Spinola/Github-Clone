<?php

namespace Views;

/**
 * @namespace View
*/
class MainView {
    const _title_ = 'MVC Project';

    public array $menuItems = [
        'Home', 'Extra',
        'Contact',
    ];

    public function __construct(
        private $fileName,
        private $header = 'header',
        private $footer = 'footer',
    ) { }

    /**
     *### **Render the target ($this->fileName) Page**
     * 
     * @return StructuredPage
     * 
     * - Include the header (custom or default)
     * - Include the target Page
     * - Include the footer (custom or default)
    */
    public function render(array $pageInfo = []): void {
        include 'Pages/Templates/' . $this -> header . '.php';
        include 'Pages/' . $this -> fileName . '.php';
        include 'Pages/Templates/' . $this -> footer . '.php';
    }
}