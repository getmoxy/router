<?php
namespace Moxy\Dispatcher;

/**
 * A Group Dispatcher
 *
 * @category   Dispatcher
 * @package    Moxy\Router
 * @author     Tom Morton <tom@errant.me.uk>
 * @copyright  2015 Tom Morton
 * @license    MIT
 */
class Static implements \Moxy\Router\DispatcherInterface {

    protected $_routes = array();
    protected $_response;

    public function add($staticRoute, $callback) 
    {
        if(!is_string($staticRoute)) {
            throw new \Moxy\Exception('Static Routes must be specified as string type, found type: ' . gettype($staticRoute));
        } 

        $this->_routes[] = $callback;
    }

    public function run($request)
    {
        foreach($this->_routes as $dispatcher) {
            try {
                $response = $dispatcher->run($request);
                if($response) {
                    return $response;
                }
            } catch(\Moxy\Exception\NoRoute $e) {
                // Do nothing for now; we'll handle this later
            }
        }

        throw new \Moxy\Exception\NoRoute('No route found for ' . $uri);
    }

}