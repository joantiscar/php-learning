<?php

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld ()
    {
        require_once('../hello.php');
        //$this->expectOutputString('Hola mon');
        $this->assertTrue($this->have('Hola Mon', ))

    }

