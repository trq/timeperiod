<?php

namespace Trq\TimePeriod;

class Resolver
{
    protected $minutes;

    public function parse($period)
    {
        $this->minutes = (int) substr($period, 0, -1);
    }

    public function getMinutes()
    {
        return $this->minutes;
    }
}
