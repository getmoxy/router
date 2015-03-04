<?php
/**
* @coversDefaultClass \Moxy\Request
*/
class RequestTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $this->request = new \Moxy\Request;
    }

    public function errorDataProvider()
    {
        return array(
            array(null),
            array(1),
            array(false),
            array(new stdClass)
        );
    }

    public function testSetURI()
    {
        $this->request->setURI('test');
        $this->assertEquals('test', $this->request->getURI());
    }

    public function testSetMethod()
    {
        $this->request->setMethod('GET');
        $this->assertEquals('GET', $this->request->getMethod());
    }

    /**
     * @dataProvider errorDataProvider
     * @expectedException Exception
     * @expectedExceptionMessage Request URI must be a string
     */
    public function testSetURIInvalid($uri)
    {
        $this->request->setURI($uri);
    }

    /**
     * @dataProvider errorDataProvider
     * @expectedException Exception
     * @expectedExceptionMessage Request Method must be a string
     */
    public function testSetMethodInvalid($method)
    {
        $this->request->setMethod($method);
    }

}