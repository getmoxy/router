<?php
namespace Moxy\Router;

interface RequestInterface {

    public function setURI($uri);
    public function setMethod($method);

    public function getURI();
    public function getMethod();
}
