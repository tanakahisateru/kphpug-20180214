<?php

namespace App\Service;

class NiceToMeetYou extends AbstractGreeter
{
    private const MESSAGE_PREFIX = "Nice to meet you,";

    /**
     * @inheritdoc
     */
    protected function messagePrefix(): string
    {
        return self::MESSAGE_PREFIX;
    }
}
