<?php

use PHPUnit_Framework_TestCase;


class DivisionTest extends PHPUnit_Framework_TestCase {
    public function testDivisionValid()
    {
        $nombrei = new NombreEntierPositif(4);
        $nombrej = new NombreEntierPositif(2);
        $division = new Division($nombrei, $nombrej);
        $res = $division->compute();
        $this->assertEquals($res, 2);
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Nombre négatif!
     */
    public function testDivisionNegatif()
    {
        $nombrei = new NombreEntierPositif(-3);
        $nombrej = new NombreEntierPositif(5);
        $division = new Division($nombrei, $nombrej);
        $division->compute();
    }

    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Nombre pas entier
     */
    public function testDivisionString()
    {
        $nombrei = new NombreEntierPositif('bonjour');
        $nombrej = new NombreEntierPositif(5);
        $division = new Division($nombrei, $nombrej);
        $division->compute();
    }

    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Division par 0 impossible
     */
    public function testDivisionZero()
    {
        $nombrei = new NombreEntierPositif(3);
        $nombrej = new NombreEntierPositif(0);
        $division = new Division($nombrei, $nombrej);
        $division->compute();
    }
} 