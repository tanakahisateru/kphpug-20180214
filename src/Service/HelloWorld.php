<?php

namespace App\Service;

class HelloWorld extends AbstractGreeter
{
    private const MESSAGE_PREFIX = "Hello";

    /**
     * @inheritdoc
     */
    protected function messagePrefix(): string
    {
        return self::MESSAGE_PREFIX;
    }
}
