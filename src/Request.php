<?php
namespace Moxy;

/**
 * HTTP Request
 *
 * @category   Request
 * @package    Moxy\Router
 * @author     Tom Morton <tom@errant.me.uk>
 * @copyright  2015 Tom Morton
 * @license    MIT
 */
class Request implements \Moxy\Router\RequestInterface {

    protected $_uri;
    protected $_method;

    public function setURI($uri)
    {
        if(!is_string($uri)) {
            throw new \Exception('Request URI must be a string');
        }

        $this->_uri = $uri;
    }

    public function getURI()
    {
        return $this->_uri;
    }
    
    public function setMethod($method)
    {
        if(!is_string($method)) {
            throw new \Exception('Request Method must be a string');
        }

        $this->_method = $method;
    }

    public function getMethod()
    {
        return $this->_method;
    }
}