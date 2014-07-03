<?php

namespace OperationTest;

use Maths\Addition;

class AdditionTest extends AbstractOperatorTest {

    public function testAdditionValid()
    {
        $nombrei = $this->getnombreMock(3);
        $nombrej = $this->getnombreMock(5);

        $addition = new Addition($nombrei, $nombrej);
        $this->assertEquals(8, $addition->compute());
    }

    public function testExceptionComputeBdNumber()
    {
        $nombrei = $this->getnombreMock(3);
        $nombrej = $this->getnombreMock();
        $nombrej->expects($this->once())
                ->method('getNombre')
                ->willThrowException(new \Exception());

        $addition = new Addition($nombrei, $nombrej);
        $this->assertEmpty($addition->compute());
    }
} 