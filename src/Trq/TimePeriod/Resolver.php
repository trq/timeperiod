<?php

namespace Trq\TimePeriod;

class Resolver
{
    /**
     * hoursInDay
     *
     * @var int
     */
    protected $hoursInDay = 24;

    /**
     * daysInWeek
     *
     * @var int
     */
    protected $daysInWeek = 7;

    /**
     * minutes
     *
     * @var mixed
     */
    protected $minutes;

    /**
     * toMinutes
     *
     * @param mixed $amount
     * @param mixed $type
     * @return void
     */
    protected function toMinutes($amount, $type)
    {
        switch ($type) {
            case 'w':
                $expression = 60 * $this->hoursInDay * $this->daysInWeek;
                break;
            case 'd':
                $expression = 60 * $this->hoursInDay;
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

    /**
     * parse
     *
     * @param mixed $periodFormat
     * @return void
     */
    public function parse($periodFormat)
    {
        $periods = explode(' ', $periodFormat);

        foreach ($periods as $period) {
            if (preg_match('/([0-9.]*)(w|d|h|m){1}/', $period, $matches)) {
                list(, $amount, $type) = $matches;
                $this->minutes += $this->toMinutes($amount, $type);
            }
        }
    }

    /**
     * getMinutes
     *
     * @return void
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * setHoursInDay
     *
     * @param mixed $hours
     * @return void
     */
    public function setHoursInDay($hours)
    {
        $this->hoursInDay = $hours;
    }

    /**
     * setDaysInWeek
     *
     * @param mixed $days
     * @return void
     */
    public function setDaysInWeek($days)
    {
        $this->daysInWeek = $days;
    }
}
