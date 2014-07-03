<?php


namespace OperationTest;


use Maths\NombreEntierPositif;

class NombreEntierPositifTest extends \PHPUnit_Framework_TestCase{


    public function testDivisionZero()
    {
        $nbI = new NombreEntierPositif(3);
        $this->assertEquals(3, $nbI->getNombre());
    }

    /**
     * @expectedException RunTimeException
     * @expectedExceptionMessage Nombre négatif!
     */
    public function testExceptionNombreNegatif()
    {
        $nbI = new NombreEntierPositif(-2);
        $nbI->CheckPositifInteger();
    }

    /**
     * @expectedException DomainException
     * @expectedExceptionMessage Nombre pas entier
     */
    public function testExceptionString()
    {
        $nbI = new NombreEntierPositif('bonjour');
        $nbI->CheckInteger();

    }

} 