<?php

class Application {
    /**
     * Execute the program
     * - Get and format url
     * - Check if we have a controller to the url and run it.
    */
    public function execute(): void {
        // "page1/section1" returns "page1" 
        $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'home';
        $url = ucfirst($url);

        $url .= "Controller";

        if (file_exists('Controllers/' . $url . '.php')) {
            $className = 'Controllers\\' . $url;

            // $controller = new Controllers\$urlController.php
            $controller = new $className;
            $controller -> execute();
        } else {
          die("ERROR::APPLICATION | Controller doens't exists");  
        }
    }
}