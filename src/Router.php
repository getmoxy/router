<?php
namespace Moxy;

class Router extends \Moxy\Event\Emitter {

    public function __construct(Moxy\Interface\RouteDispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function dispatch(\Moxy\Interface\Request $request)
    {
        try {
            return $this->dispatcher->run($request);
        } catch(\Moxy\Exception\NoRoute $e) {
            $this->emit('router.code.404', array('request' => $request));
        }
    }

}