<?php

use PHPUnit_Framework_TestCase;
require '../../Division.php';
require '../../NombreEntierPositif.php';

class DivisionTest extends PHPUnit_Framework_TestCase {
    public function testDivisionValid()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif(4);
        $nombrej = new \Calculator\Operators\NombreEntierPositif(2);
        $division = new \Calculator\Operators\Division($nombrei, $nombrej);
        $res = $division->compute();
        $this->assertEquals($res, 2);
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Nombre négatif!
     */
    public function testDivisionNegatif()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif(-3);
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $division = new \Calculator\Operators\Division($nombrei, $nombrej);
        $division->compute();
    }

    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Nombre pas entier
     */
    public function testDivisionString()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif('bonjour');
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $division = new \Calculator\Operators\Division($nombrei, $nombrej);
        $division->compute();
    }

    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Division par 0 impossible
     */
    public function testDivisionZero()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif(3);
        $nombrej = new \Calculator\Operators\NombreEntierPositif(0);
        $division = new \Calculator\Operators\Division($nombrei, $nombrej);
        $division->compute();
    }
} 