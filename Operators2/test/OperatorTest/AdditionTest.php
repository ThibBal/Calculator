<?php

use PHPUnit_Framework_TestCase;


class AdditionTest extends PHPUnit_Framework_TestCase {

    public function testAdditionValid()
    {
        $nombrei = new NombreEntierPositif(3);
        $nombrej = new NombreEntierPositif(5);
        $addition = new Addition($nombrei, $nombrej);
        $res = $addition->compute();
        $this->assertEquals($res, 8);
    }

    public function testAdditionNegatif()
    {
        $nombrei = new NombreEntierPositif(-3);
        $nombrej = new NombreEntierPositif(5);
        $addition = new Addition($nombrei, $nombrej);
        $addition->compute();
    }

    public function testAdditionString()
    {
        $nombrei = new NombreEntierPositif('bonjour');
        $nombrej = new NombreEntierPositif(5);
        $addition = new Addition($nombrei, $nombrej);
        $addition->compute();
    }
} 