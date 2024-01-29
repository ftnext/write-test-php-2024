<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../src/Math.php";
require_once __DIR__ . "/../src/MathUtil.php";

class MathUtilTest extends TestCase
{
    public function testSaturate(): void
    {
        $mathUtil = new MathUtil();
        $this->assertEquals(2, $mathUtil->saturate(2, 1, 3));
    }
}
