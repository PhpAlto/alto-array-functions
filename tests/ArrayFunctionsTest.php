<?php

namespace Alto\Functions\ArrayFunctions\Tests;

use Alto\Functions\ArrayFunctions\ArrayFunctions;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ArrayFunctions::class)]
class ArrayFunctionsTest extends TestCase
{
    public function testArrayFirst(): void
    {
        $this->assertEquals(1, array_first([1, 2, 3]));
        $this->assertSame(1, array_first(['a' => 1, 'b' => 2]));
        $this->assertNull(array_first([]));
    }

    public function testArrayLast(): void
    {
        $this->assertEquals(3, array_last([1, 2, 3]));
        $this->assertEquals(2, array_last(['a' => 1, 'b' => 2]));
        $this->assertNull(array_last([]));
    }
}
