<?php

namespace App\Service;

abstract class AbstractGreeter implements GreeterInterface
{
    /**
     * @inheritdoc
     */
    public function greet(string $name): string
    {
        return $this->messagePrefix() . ' ' . $name;
    }

    /**
     * @return string
     */
    abstract protected function messagePrefix(): string;
}
