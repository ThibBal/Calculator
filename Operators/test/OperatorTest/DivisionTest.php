<?php

namespace OperationTest;

use Maths\Division;


class DivisionTest extends AbstractOperatorTest {
    public function testDivisionValid()
    {
        $nombrei = $this->getnombreMock(4);
        $nombrej = $this->getnombreMock(2);

        $division = new Division($nombrei, $nombrej);
        $res = $division->compute();
        $this->assertEquals($res, 2);
    }
    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Division par 0 impossible
     */
    public function testDivisionZero()
    {
        $nombrei = $this->getnombreMock(4);
        $nombrej = $this->getnombreMock(0);
        $division = new Division($nombrei, $nombrej);
        $division->compute();
    }
} 