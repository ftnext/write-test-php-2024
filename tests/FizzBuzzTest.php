<?php
namespace FizzBuzz;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . "/../vendor/autoload.php";

class FizzBuzzTest extends TestCase
{
  public function test_1を渡すと文字列1を返す(): void
  {
    $fizzBuzz = new FizzBuzz();
  }
}
