<?php

namespace App\Service;

class HelloWorld extends AbstractGreeter
{
    /**
     * @inheritdoc
     */
    protected function messagePrefix(): string
    {
        return "Hello";
    }
}
