<?php

namespace App\Service;

interface GreeterInterface
{
    /**
     * @param string $name
     * @return string
     */
    public function greet(string $name): string;
}
