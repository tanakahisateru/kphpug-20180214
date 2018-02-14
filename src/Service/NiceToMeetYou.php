<?php

namespace App\Service;

class NiceToMeetYou extends AbstractGreeter
{
    /**
     * @inheritdoc
     */
    protected function messagePrefix(): string
    {
        return "Nice to meet you,";
    }
}
