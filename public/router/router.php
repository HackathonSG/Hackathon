<?php

class Router {
    
    public $routes = array(
        '' => 'controllers/home.php'
        /*Plaats hier je pad (1e key is wat er na hackathon/ staat, key2 is naar welk bestand het verwijst)*/
    );
    
    public function direct($uri) {
        return $this->routes[$uri];
    }
}