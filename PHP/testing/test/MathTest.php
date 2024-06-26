<?php

namespace Zidan\test;

use PHPUnit\Framework\TestCase;

class Mathtest extends TestCase
{
    public function testManual(){
        self::assertEquals(10, Math::sum([5,5]));
        self::assertEquals(20, Math::sum([4,4,4,4]));
        self::assertEquals(9, Math::sum([3,3,3]));
        self::assertEquals(0, Math::sum([]));
        self::assertEquals(2, Math::sum([2]));
    }

    // /**
    // * @dataProvider mathSumData
    // */

    // public function testDataProvider(){
    //     self::assertEquals($expected, Math::sum($values));
    // }
}
