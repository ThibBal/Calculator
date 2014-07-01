<?php

use PHPUnit_Framework_TestCase;
require '../../Soustraction.php';
require '../../NombreEntierPositif.php';

class SoustractionTest extends PHPUnit_Framework_TestCase{

    public function testSoustractionValid()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif(4);
        $nombrej = new \Calculator\Operators\NombreEntierPositif(2);
        $soustraction = new \Calculator\Operators\Soustraction($nombrei, $nombrej);
        $res = $soustraction->compute();
        $this->assertEquals($res, 2);
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Nombre négatif!
     */
    public function testSoustractionNegatif()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif(-3);
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $soustraction = new \Calculator\Operators\Soustraction($nombrei, $nombrej);
        $soustraction->compute();
    }

    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Nombre pas entier
     */
    public function testSoustractionString()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif('bonjour');
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $soustraction = new \Calculator\Operators\Soustraction($nombrei, $nombrej);
        $soustraction->compute();
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Résultat négatif!
     */
    public function testSoustractionResNegatif()
    {
        $nombrei = new \Calculator\Operators\NombreEntierPositif(3);
        $nombrej = new \Calculator\Operators\NombreEntierPositif(5);
        $soustraction = new \Calculator\Operators\Soustraction($nombrei, $nombrej);
        $soustraction->compute();
    }
} 