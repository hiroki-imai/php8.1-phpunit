<?php

namespace Learning\Tests;

use Learning\Sample\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertSame(5, $result);
    }
}
