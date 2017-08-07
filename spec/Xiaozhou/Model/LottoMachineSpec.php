<?php

namespace spec\Xiaozhou\Model;

use Xiaozhou\Model\LottoMachine;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class LottoMachineSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(LottoMachine::class);
    }

}
