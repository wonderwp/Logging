<?php

declare(strict_types=1);

namespace WonderWp\Component\Logging\Tests\Unit;

use PHPUnit\Framework\TestCase;
use WonderWp\Component\Logging\VoidLogger;

final class VoidLoggerTest extends TestCase
{
    public function testLogReturnsFormattedLine(): void
    {
        $logger = new VoidLogger();
        $line = $logger->log('info', 'hello');
        $this->assertStringContainsString('[INFO]', $line);
        $this->assertStringContainsString('hello', $line);
    }
}
