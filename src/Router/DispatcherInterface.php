<?php
namespace Moxy\Router;

class DispatcherInterface {

    public function add($routeDefinition, $callback = null);
    public function run(\Moxy\Interface\Request $request);
}
