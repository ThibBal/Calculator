<?php

use PHPUnit_Framework_TestCase;


class SoustractionTest extends PHPUnit_Framework_TestCase{

    public function testSoustractionValid()
    {
        $nombrei = new NombreEntierPositif(4);
        $nombrej = new NombreEntierPositif(2);
        $soustraction = new Soustraction($nombrei, $nombrej);
        $res = $soustraction->compute();
        $this->assertEquals($res, 2);
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Nombre négatif!
     */
    public function testSoustractionNegatif()
    {
        $nombrei = new NombreEntierPositif(-3);
        $nombrej = new NombreEntierPositif(5);
        $soustraction = new Soustraction($nombrei, $nombrej);
        $soustraction->compute();
    }

    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Nombre pas entier
     */
    public function testSoustractionString()
    {
        $nombrei = new NombreEntierPositif('bonjour');
        $nombrej = new NombreEntierPositif(5);
        $soustraction = new Soustraction($nombrei, $nombrej);
        $soustraction->compute();
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Résultat négatif!
     */
    public function testSoustractionResNegatif()
    {
        $nombrei = new NombreEntierPositif(3);
        $nombrej = new NombreEntierPositif(5);
        $soustraction = new Soustraction($nombrei, $nombrej);
        $soustraction->compute();
    }
} 