<?php

namespace Nazububu\LaravelSum\Tests;

use PHPUnit\Framework\TestCase;

use Nazububu\LaravelSum\Sum;

/**
 * Class SumTest
 *
 * @package Nazububu\LaravelSum\Tests
 */
class SumTest extends TestCase
{
    /**
     * Test of adding two valid numbers
     *
     * @return void
     */
    public function testAddTwoNumbers(): void
    {
        $sum = new Sum;

        $this->assertEquals(2, $sum->calculate(1, 1));
    }
}
