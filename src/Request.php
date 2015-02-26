<?php
namespace Moxy\Request;

/**
 * HTTP Request
 *
 * @category   Request
 * @package    Moxy\Router
 * @author     Tom Morton <tom@errant.me.uk>
 * @copyright  2015 Tom Morton
 * @license    MIT
 */
class Request implements \Moxy\Interface\Request {

    protected $_uri;

    public function getURI()
    {
        return $this->_uri;
    }
    
    public function getMethod()
    {
        return $this->_uri;
    }
}