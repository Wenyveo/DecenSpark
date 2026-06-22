<?php
/**
 * Tests for DecenSpark
 */

use PHPUnit\Framework\TestCase;
use Decenspark\Decenspark;

class DecensparkTest extends TestCase {
    private Decenspark $instance;

    protected function setUp(): void {
        $this->instance = new Decenspark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Decenspark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
