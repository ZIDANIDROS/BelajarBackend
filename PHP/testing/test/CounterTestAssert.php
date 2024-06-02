<?php

namespace Zidan\test;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTestAssert extends TestCase{
    public function testCounter(){
        $counter = new Counter();
        $counter->increment();

        //Assert::assertEquals(1,$counter->getCounter()); bisa ini
        $this->assertEquals(1,$counter->getCounter());// bisa ini
        //$self->assertEquals(1,$counter->getCounter()); bisa ini
    }
}

