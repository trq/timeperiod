<?php

namespace spec\Trq\TimePeriod;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ResolverSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Trq\TimePeriod\Resolver');
    }

    function it_should_parse_a_string_representing_minutes()
    {
        $this->parse('1m');
        $this->getMinutes()->shouldReturn(1);
    }

    function it_should_parse_a_string_representing_hours()
    {
        $this->parse('1h');
        $this->getMinutes()->shouldReturn(60);
    }

    function it_should_parse_a_string_representing_days()
    {
        $this->parse('1d');
        $this->getMinutes()->shouldReturn(1440);
    }

    function it_should_parse_a_string_representing_weeks()
    {
        $this->parse('1w');
        $this->getMinutes()->shouldReturn(10080);
    }

    function it_should_parse_a_string_representing_hours_and_minutes()
    {
        $this->parse('1h 1m');
        $this->getMinutes()->shouldReturn(61);
    }

    function it_should_parse_a_string_representing_complex_times()
    {
        $this->parse('1w 1d 1h 1m');
        $this->getMinutes()->shouldReturn(11581);
    }

    function it_should_simply_ignore_invalid()
    {
        $this->parse('1w 1d 4x 1h 1m');
        $this->getMinutes()->shouldReturn(11581);
    }

    function it_should_provide_the_ability_to_configure_hours_in_day()
    {
        $this->setHoursInDay(8);
        $this->parse('1d');
        $this->getMinutes()->shouldReturn(480);
    }

    function it_should_provide_the_ability_to_configure_days_in_week()
    {
        $this->setDaysInWeek(5);
        $this->parse('1w');
        $this->getMinutes()->shouldReturn(7200);
    }
}
