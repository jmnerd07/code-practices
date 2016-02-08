<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BinaryToDecimalSpec extends ObjectBehavior
{
    /*function it_is_initializable()
    {
        $this->shouldHaveType('BinaryToDecimal');
    }*/
    function it_should_show_1_for_1()
    {
        $this->convert('1')->shouldReturn(1);
    }
    function it_should_show_0_for_0()
    {
        $this->convert('0')->shouldReturn(0);
    }
    function it_should_show_2_for_10()
    {
        $this->convert('10')->shouldReturn(2);
    }
    function it_should_show_7_for_111()
    {
        $this->convert('111')->shouldReturn(7);
    }
    function it_should_show_29_for_11101()
    {
        $this->convert('11101')->shouldReturn(29);
    }
    function it_return_false_if_no_input()
    {
        $this->convert()->shouldReturn(FALSE);
    }
    function it_notifies_if_not_a_binary_digit()
    {
        $this->convert('99999')->shouldReturn('INVALID. Not a binary digit');
    }
}
