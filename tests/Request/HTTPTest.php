<?php
/**
* @coversDefaultClass \Moxy\Request
*/
class RequestHTTPTest extends PHPUnit_Framework_TestCase
{

    

    public function errorDataProvider()
    {
        return array(
            array(null),
            array(1),
            array(false),
            array(new stdClass)
        );
    }

    public function testConstruct()
    {
        $request = new \Moxy\Request\HTTP(filter_var_array($_SERVER));

        $this->assertEquals('GET', $request->getMethod());
        $this->assertEquals('/test', $request->getURI());
    }

}