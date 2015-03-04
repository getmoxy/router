<?
require '../vendor/autoload.php';

$routes = new \Moxy\Dispatcher\Static;
$routes->add('test',function($request, $response) { return $response; });

$router = new \Moxy\Router($routes);

// Handle 404 routes
$router->on('router.code.404',function() {
    $response = new \Moxy\Response\Static('views/error/404.html');
    $response->send();
})

$request = new \Moxy\Request\HTTP;
if($response = $router->dispatch($request)) {
    $response->send();
}




