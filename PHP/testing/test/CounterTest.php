<?php

namespace Zidan\test;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase{
    public function testCounter(){
        $counter = new Counter();

        $counter->increment();
        echo $counter->getCounter(). PHP_EOL;
    }

    /** @test*/ //annotation
    
    public function increment(){
        $counter = new Counter();
        $counter->increment();
        Assert::assertEquals(1, $counter->getCounter());
    }
}