<?php

namespace Zidan\test;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class testsdepedency{
    public function testFirst(): Counter{
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1,$counter->getCounter());
        return $counter;
    }

    //**@depends testFirst */

    public function testSecond(Counter $counter):void{
        $counter->increment();
        $this->assertEquals(2,$counter->getCounter());
    }
}