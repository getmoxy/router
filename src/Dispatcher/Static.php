<?php
namespace Moxy\Dispatcher;

/**
 * A Basic Static Route Dispatcher
 *
 * @category   Dispatcher
 * @package    Moxy\Router
 * @author     Tom Morton <tom@errant.me.uk>
 * @copyright  2015 Tom Morton
 * @license    MIT
 */
class Static implements \Moxy\Interface\Dispatcher {

    protected $_routes = array();
    protected $_response;

    public function add($staticRoute, $callback) 
    {
        if(!is_string($staticRoute)) {
            throw new \Moxy\Exception('Static Routes must be specified as string type, found type: ' . gettype($staticRoute));
        }

        if(!is_callable($callback)) {
            throw new \Moxy\Exception('Invalid callback for route ' . $staticRoute);
        }

        $this->_routes[$staticRoute] = $callback;
    }

    public function run($request)
    {
        $uri = $request->getURI();

        if(isset($this->_routes[$uri])) {
            return call_user_func($this->_routes[$uri],$request, $this->_response);
        }

        throw nee \Moxy\Exception\NoRoute('No route found for ' . $uri);
    }

}