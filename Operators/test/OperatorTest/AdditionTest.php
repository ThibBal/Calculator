<?php

use PHPUnit_Framework_TestCase;
require '../../Addition.php';
require '../../NombreEntierPositif.php';

class AdditionTest extends PHPUnit_Framework_TestCase {

    public function testAdditionValid()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif(3);
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $addition = new \Calculator\Operators\Addition($nombrei, $nombrej);
        $res = $addition->compute();
        $this->assertEquals($res, 8);
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Nombre négatif!
     */
    public function testAdditionNegatif()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif(-3);
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $addition = new \Calculator\Operators\Addition($nombrei, $nombrej);
        $addition->compute();
    }

    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Nombre pas entier
     */
    public function testAdditionString()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif('bonjour');
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $addition = new \Calculator\Operators\Addition($nombrei, $nombrej);
        $addition->compute();
    }
} 