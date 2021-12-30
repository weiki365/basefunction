<?php

/*
 *--------------------------------------------------------------------------
 * @Class IsTest
 *
 *--------------------------------------------------------------------------
 *
 * @author    weiki
 * @email     happy_gzg@126.com
 * @Licensed  ( http://www.apache.org/licenses/LICENSE-2.0 )
 *--------------------------------------------------------------------------
 */

use PHPUnit\Framework\TestCase;

class IsTest extends TestCase
{
    public function testIsBetween()
    {
        $this->assertTrue(isBetween(1, 1, 100));
        $this->assertTrue(isBetween(100, 1, 100));
        $this->assertTrue(isBetween('C', 'B', 'D'));
        $this->assertFalse(isBetween('a', 'B', 'Z'));
        $this->assertFalse(isBetween('A', 'B', 'Z'));
        $this->assertFalse(isBetween('A', 'b', 'z'));
        $this->assertTrue(isBetween('2021-01-01', '2020-01-01', '2022-01-01'));
        $this->assertTrue(isBetween('2021-01-01', '2020-01-01 00:00:00', '2022-01-01 00:00:00'));
    }

    public function testIsDate()
    {
        $this->assertTrue(isDate('1970-08-00 00:00:00'));
        $this->assertTrue(isDate('2020-01-01 00:00:00'));
        $this->assertTrue(isDate('Thu Dec 30 2021 21:01:52 GMT+0800'));
        $this->assertFalse(isDate(0));
    }

    public function testIsImplementsInterface()
    {
        $this->assertTrue(isImplementsInterface(\Error::class, \Throwable::class));
    }
}
