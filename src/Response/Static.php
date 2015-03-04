<?php
namespace Moxy\Response;

/**
 * Display a static page
 *
 * Guess its mimetype
 *
 * @category   Response
 * @package    Moxy\Router
 * @author     Tom Morton <tom@errant.me.uk>
 * @copyright  2015 Tom Morton
 * @license    MIT
 */
class Static implements \Moxy\Router\ResponseInterface {

    protected $_filepath;

    public function __construct($filepath) 
    {
        $this->_filepath = $filepath;
    }

    public function send()
    {
        echo file_get_contents($filepath);
    }
}
