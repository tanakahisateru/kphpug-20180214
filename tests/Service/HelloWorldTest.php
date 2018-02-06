<?php

namespace App\Service;

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testGreet()
    {
        $hw = new HelloWorld();
        $this->assertEquals("Hello Symfony", $hw->greet('Symfony'));
    }
}
