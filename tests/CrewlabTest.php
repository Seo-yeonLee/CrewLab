<?php
/**
 * Tests for CrewLab
 */

use PHPUnit\Framework\TestCase;
use Crewlab\Crewlab;

class CrewlabTest extends TestCase {
    private Crewlab $instance;

    protected function setUp(): void {
        $this->instance = new Crewlab(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Crewlab::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
