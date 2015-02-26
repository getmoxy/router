<?
require '../vendor/autoload.php';

$routes = new \Moxy\Dispatcher\Static;
$routes->add('test',function($request, $response) { return $response; });

$router = new \Moxy\Router($routes);

$request = new \Moxy\Request\HTTP;
$response = $router->dispatch($request);


