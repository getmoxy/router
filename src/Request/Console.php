<?php
namespace Moxy\Request;

/**
 * Console Request
 *
 * @category   Request
 * @package    Moxy\Router
 * @author     Tom Morton <tom@errant.me.uk>
 * @copyright  2015 Tom Morton
 * @license    MIT
 */
class Console extends \Moxy\Request {

    protected $_method = 'CONSOLE';

    public function __construct()
    {
        $this->_uri = implode($argv);
    }
}