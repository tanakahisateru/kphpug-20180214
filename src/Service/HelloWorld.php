<?php

namespace App\Service;

class HelloWorld implements GreeterInterface
{
    /**
     * @param string $name
     * @return string
     */
    public function greet(string $name): string
    {
        return "Hello " . $name;
    }

}
