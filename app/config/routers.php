<?php 

use Phalcon\Mvc\Router;

// Create the router
$router = new Router();

// Define a route

$router->add('/', 
    array(
    'controller' => 'Index',
    'action' => 'index'
    )
);

return $router;

?>