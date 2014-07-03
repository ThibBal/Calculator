<?php

namespace OperationTest;

abstract class AbstractOperatorTest extends \PHPUnit_Framework_TestCase {

    protected function getNombreMock($value = null)
    {
        $mock = $this->getMockBuilder('Maths\NombreEntierPositif')
                     ->disableOriginalConstructor()
                     ->getMock();
        $mock->expects($this->once())
            ->method('CheckInteger');
        $mock->expects($this->once())
            ->method('CheckPositifInteger');
        if (!is_null($value)) {
            $mock->method('getNombre')
                 ->will($this->returnValue($value));
        }
        return $mock;
    }
}