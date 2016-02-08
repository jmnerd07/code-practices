<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NumberToWordsSpec extends ObjectBehavior
{
    function it_should_be_zero_for_0()
    {
        $this->convert(0)->shouldReturn('ZERO');
    }
    function it_should_be_six_for_6()
    {
        $this->convert(6)->shouldReturn('SIX');
    }
    function it_should_return_218_in_words()
    {
        $this->convert(218)->shouldReturn('TWO HUNDRED EIGHTEEN');
    }
    function it_should_return_120_in_words()
    {
        $this->convert(120)->shouldReturn('ONE HUNDRED TWENTY');
    }
    function it_should_return_10_in_words()
    {
        $this->convert(10)->shouldReturn('TEN');
    }
    function it_should_return_17_in_words()
    {
        $this->convert(17)->shouldReturn('SEVENTEEN');
    }
    function it_should_return_7_in_words()
    {
        $this->convert(7)->shouldReturn('SEVEN');
    }
    function it_should_return_37_in_words()
    {
        $this->convert(37)->shouldReturn('THIRTY SEVEN');
    }
    function it_should_return_80_in_words()
    {
        $this->convert(80)->shouldReturn('EIGHTY');
    }
    function it_should_return_88_in_words()
    {
        $this->convert(88)->shouldReturn('EIGHTY EIGHT');
    }
    function it_should_return_69_in_words()
    {
        $this->convert(69)->shouldReturn('SIXTY NINE');
    }
    function it_should_return_972_in_words()
    {
        $this->convert(972)->shouldReturn('NINE HUNDRED SEVENTY TWO');
    }
    function it_should_return_502_in_words()
    {
        $this->convert(502)->shouldReturn('FIVE HUNDRED TWO');
    }
    function it_should_return_712_in_words()
    {
        $this->convert(712)->shouldReturn('SEVEN HUNDRED TWELVE');
    }
    function it_should_return_890_in_words()
    {
        $this->convert(890)->shouldReturn('EIGHT HUNDRED NINETY');
    }
    function it_should_return_400_in_words()
    {
        $this->convert(400)->shouldReturn('FOUR HUNDRED');
    }
    function it_should_return_1000_in_words()
    {
        $this->convert(1000)->shouldReturn('ONE THOUSAND');
    }
    function it_should_return_6000_in_words()
    {
        $this->convert(6000)->shouldReturn('SIX THOUSAND');
    }
    function it_should_return_9100_in_words()
    {
        $this->convert(9100)->shouldReturn('NINE THOUSAND ONE HUNDRED');
    }
    function it_should_return_5502_in_words()
    {
        $this->convert(5502)->shouldReturn('FIVE THOUSAND FIVE HUNDRED TWO');
    }
    function it_should_return_6913_in_words()
    {
        $this->convert(6913)->shouldReturn('SIX THOUSAND NINE HUNDRED THIRTEEN');
    }

    function it_should_return_2759_in_words()
    {
        $this->convert(2759)->shouldReturn('TWO THOUSAND SEVEN HUNDRED FIFTY NINE');
    }

    function it_should_return_10000_in_words()
    {
        $this->convert(10000)->shouldReturn('TEN THOUSAND');
    }
    function it_should_return_10001_in_words()
    {
        $this->convert(10001)->shouldReturn('TEN THOUSAND ONE');
    }
    function it_should_return_20001_in_words()
    {
        $this->convert(20001)->shouldReturn('TWENTY THOUSAND ONE');
    }
    function it_should_return_35601_in_words()
    {
        $this->convert(35601)->shouldReturn('THIRTY FIVE THOUSAND SIX HUNDRED ONE');
    }
    function it_should_return_55992_in_words()
    {
        $this->convert(55992)->shouldReturn('FIFTY FIVE THOUSAND NINE HUNDRED NINETY TWO');
    }
    function it_should_return_77777_in_words()
    {
        $this->convert(77777)->shouldReturn('SEVENTY SEVEN THOUSAND SEVEN HUNDRED SEVENTY SEVEN');
    }
    function it_should_return_70007_in_words()
    {
        $this->convert(70007)->shouldReturn('SEVENTY THOUSAND SEVEN');
    }
    function it_should_return_700007_in_words()
    {
        $this->convert(700007)->shouldReturn('SEVEN HUNDRED THOUSAND SEVEN');
    }
}
