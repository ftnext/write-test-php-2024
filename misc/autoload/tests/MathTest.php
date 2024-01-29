<?php
use PHPUnit\Framework\TestCase;
use Math\Math;

require_once __DIR__ . "/../src/Math.php";

class MathTest extends TestCase
{
    public function testMinMax(): void
    {
        $math = new Math();
        $this->assertEquals(1, $math->min(1, 2));
    }
}
