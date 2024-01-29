<?php
namespace Math;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../vendor/autoload.php";

class MathUtilTest extends TestCase
{
    public function testSaturate(): void
    {
        $mathUtil = new MathUtil();
        $this->assertEquals(2, $mathUtil->saturate(2, 1, 3));
    }
}
