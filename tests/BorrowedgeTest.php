<?php
/**
 * Tests for BorrowEdge
 */

use PHPUnit\Framework\TestCase;
use Borrowedge\Borrowedge;

class BorrowedgeTest extends TestCase {
    private Borrowedge $instance;

    protected function setUp(): void {
        $this->instance = new Borrowedge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Borrowedge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
