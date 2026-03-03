<?php
/**
 * Tests for NodeVault
 */

use PHPUnit\Framework\TestCase;
use Nodevault\Nodevault;

class NodevaultTest extends TestCase {
    private Nodevault $instance;

    protected function setUp(): void {
        $this->instance = new Nodevault(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodevault::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
