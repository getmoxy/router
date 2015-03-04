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
class HTTP extends \Moxy\Request {


    public function __construct($server)
    {
        $this->_uri = $server['REQUEST_URI'];
        $this->_method = $server['REQUEST_METHOD'];
    }
}