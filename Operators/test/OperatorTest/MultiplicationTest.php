<?php


use PHPUnit_Framework_TestCase;


class MultiplicationTest extends PHPUnit_Framework_TestCase {

    public function testMultiplicationValid()
    {
        $nombrei = new NombreEntierPositif(3);
        $nombrej = new NombreEntierPositif(5);
        $multiplication = new Multiplication($nombrei, $nombrej);
        $res = $multiplication->compute();
        $this->assertEquals($res, 15);
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Nombre négatif!
     */
    public function testMultiplicationNegatif()
    {
        $nombrei = new NombreEntierPositif(-3);
        $nombrej = new NombreEntierPositif(5);
        $multiplication = new Multiplication($nombrei, $nombrej);
        $multiplication->compute();
    }

    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Nombre pas entier
     */
    public function testMultiplicationString()
    {
        $nombrei = new NombreEntierPositif('bonjour');
        $nombrej = new NombreEntierPositif(5);
        $multiplication = new Multiplication($nombrei, $nombrej);
        $multiplication->compute();
    }
} 