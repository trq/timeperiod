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
        $this->parse('10m');
        $this->getMinutes()->shouldReturn(10);
    }

    function it_should_parse_a_string_representing_hours()
    {
        $this->parse('10h');
        $this->getMinutes()->shouldReturn(600);
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
        $this->parse('10h 20m');
        $this->getMinutes()->shouldReturn(620);
    }
}
