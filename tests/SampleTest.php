<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
    public function testAddition() {
        $this->assertEquals(4, 2 + 2);
    }

    public function testFailingExample() {
        $this->assertTrue(true); // Change to false to see failure
    }
}
