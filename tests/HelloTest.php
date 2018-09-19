<?php

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld ()
    {
        require_once('../hello.php');
        $this->expectOutputString('Hola mon');
    }

    public function testHelloWorld2 ()
    {
        require_once('../hello.php');
        $this->expectOutputString('Hola mon');
    }

    public function testMyFunction() {
//        include_once 'path/to/script.php';
//        $result = someFunction();
//
//        $this->assertEquals('expected result', $result);
    }
}
