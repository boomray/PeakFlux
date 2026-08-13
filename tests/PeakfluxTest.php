<?php
/**
 * Tests for PeakFlux
 */

use PHPUnit\Framework\TestCase;
use Peakflux\Peakflux;

class PeakfluxTest extends TestCase {
    private Peakflux $instance;

    protected function setUp(): void {
        $this->instance = new Peakflux(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peakflux::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
