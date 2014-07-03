<?php

namespace OperationTest;

use Maths\Multiplication;


class MultiplicationTest extends AbstractOperatorTest {

    public function testMultiplicationValid()
    {
        $nombrei = $this->getnombreMock(3);
        $nombrej = $this->getnombreMock(5);
        $multiplication = new Multiplication($nombrei, $nombrej);
        $res = $multiplication->compute();
        $this->assertEquals($res, 15);
    }

} 