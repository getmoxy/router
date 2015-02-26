<?php
namespace Moxy;

class Router {

    public function __construct(\Moxy\Interface\RouteDispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function dispatch(\Moxy\Interface\Request $request)
    {
        try {
            return $this->dispatcher->run($request);
        } catch(\Moxy\Exception\NoRoute $e) {
            // Special 404 Route (TODO)
        }
    }

}