<?php 

use Phalcon\Mvc\Router;

// Create the router
$router = new Router();

// Define a route

$router->add('/', 
    array(
    'controller' => 'index',
    'action' => 'index'
    )
);




return $router;

?>