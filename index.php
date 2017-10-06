<?php
if(file_exists('webload.php')) {
    include_once 'webload.php';
}

require 'public/router/router.php';

$router = new Router;

$uri = str_replace('/hackathon/', '', $_SERVER['REQUEST_URI']);
echo $uri;
require $router->direct($uri);