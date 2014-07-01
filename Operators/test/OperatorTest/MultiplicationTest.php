<?php


use PHPUnit_Framework_TestCase;
require '../../Multiplication.php';
require '../../NombreEntierPositif.php';

class MultiplicationTest extends PHPUnit_Framework_TestCase {

    public function testMultiplicationValid()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif(3);
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $multiplication = new \Operators\Multiplication($nombrei, $nombrej);
        $res = $multiplication->compute();
        $this->assertEquals($res, 15);
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Nombre négatif!
     */
    public function testMultiplicationNegatif()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif(-3);
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $multiplication = new \Calculator\Operators\Multiplication($nombrei, $nombrej);
        $multiplication->compute();
    }

    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Nombre pas entier
     */
    public function testMultiplicationString()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif('bonjour');
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $multiplication = new \Calculator\Operators\Multiplication($nombrei, $nombrej);
        $multiplication->compute();
    }
} 