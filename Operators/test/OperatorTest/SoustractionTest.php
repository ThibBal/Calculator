<?php

namespace OperationTest;

use Maths\Soustraction;


class SoustractionTest extends AbstractOperatorTest {

    public function testSoustractionValid()
    {
        $nombrei = $this->getnombreMock(4);
        $nombrej = $this->getnombreMock(2);
        $soustraction = new Soustraction($nombrei, $nombrej);
        $res = $soustraction->compute();
        $this->assertEquals($res, 2);
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Résultat négatif!
     */
    public function testSoustractionResNegatif()
    {
        $nombrei = $this->getnombreMock(3);
        $nombrej = $this->getnombreMock(5);
        $soustraction = new Soustraction($nombrei, $nombrej);
        $soustraction->compute();
    }
} 