<?php

namespace App\Service;

class HelloWorld
{
    /**
     * @param string $name
     * @return string
     */
    public function greet($name)
    {
        return "Hello " . $name;
    }

}
