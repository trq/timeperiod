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
}
