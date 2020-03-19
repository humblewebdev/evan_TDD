<?php
namespace PHPTest\Tests\Services;

use PHPTest\Services\CurrencyConversionService;
use PHPUnit\Framework\TestCase;

class CurrencyConversionServiceTest extends TestCase
{
    public function testConvertFromUSDToEUR() {
        $result = .901;
        self::assertIsFloat($result);
    }

    public function testConvertFromEURToJPY() {
        $result = 118.88;
        self::assertIsFloat($result);
    }

    public function testConvertUSDToJPY() {
        $result = 107.19;
        self::assertIsFloat($result);
    }
}
