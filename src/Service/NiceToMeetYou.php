<?php

namespace App\Service;

class NiceToMeetYou implements GreeterInterface
{
    /**
     * @param string $name
     * @return string
     */
    public function greet(string $name): string
    {
        return "Nice to meet you, " . $name;
    }
}
