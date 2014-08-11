<?php

namespace Trq\TimePeriod;

class Resolver
{
    protected $minutes;

    protected function toMinutes($amount, $type)
    {
        switch ($type) {
            case 'w':
                $expression = 60 * 24 * 7;
                break;
            case 'd':
                $expression = 60 * 24;
                break;
            case 'h':
                $expression = 60;
                break;
            case 'm':
                $expression = 1;
                break;
        }

        return $amount * $expression;
    }

    public function parse($periodFormat)
    {
        $periods = explode(' ', $periodFormat);

        foreach ($periods as $period) {
            if (preg_match('/([0-9]*)(w|d|h|m){1}/', $period, $matches)) {
                list(, $amount, $type) = $matches;
                $this->minutes += $this->toMinutes($amount, $type);
            }
        }
    }

    public function getMinutes()
    {
        return $this->minutes;
    }
}
