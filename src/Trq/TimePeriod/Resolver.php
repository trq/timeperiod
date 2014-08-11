<?php

namespace Trq\TimePeriod;

class Resolver
{
    protected $minutes;

    public function parse($period)
    {
        if (preg_match('/([0-9]*)(h|m){1}/', $period, $matches)) {
            list(, $amount, $type) = $matches;
            switch ($type) {
                case 'h':
                    $expression = 60;
                    break;
                case 'm':
                    $expression = 1;
                    break;
            }
            $this->minutes = $amount * $expression;
        }
    }

    public function getMinutes()
    {
        return $this->minutes;
    }
}
