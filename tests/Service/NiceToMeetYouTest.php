<?php

namespace App\Service;

use PHPUnit\Framework\TestCase;

class NiceToMeetYouTest extends TestCase
{
    public function testGreet()
    {
        $greeter = new NiceToMeetYou();
        $this->assertEquals("Nice to meet you, Symfony", $greeter->greet('Symfony'));
    }
}
