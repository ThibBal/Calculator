<?php 
namespace MathsTest;

require_once 'Operation.php';

use Maths\Operation as Operation;

class OperationTest extends \PHPUnit_Framework_TestCase
{
	protected $stub;

	public function setUp()
	{
		$this->stub = $this->getMockBuilder('Maths\Operation')
				 		   ->disableOriginalConstructor()
					 	   ->getMockForAbstractClass();
	}

	public function testConstructor()
	{
		$a = 1;
		$b = 2;
		$this->stub = $this->getMockBuilder('Maths\Operation')
				 		   ->setConstructorArgs(array($a, $b))
					 	   ->getMockForAbstractClass();

		$this->assertEquals($a, $this->stub->getNbA());
		$this->assertEquals($b, $this->stub->getNbB());
	}

	public function testOperation()
	{
		$a = 3;
		$b = 4;

		$this->stub->setNbA($a);
		$this->stub->setNbB($b);
		$this->assertEquals($a, $this->stub->getNbA());
		$this->assertEquals($b, $this->stub->getNbB());
		$this->assertEquals($a, $this->stub->getComputedNbA());
		$this->assertEquals($b, $this->stub->getComputedNbB());
	}

	public function testExceptionBadNumberA()
	{
		$a = 'toto';
		$this->stub->setNbA($a);
		$this->assertEquals($a, $this->stub->getNbA());

		$this->setExpectedException('InvalidArgumentException');
		$this->stub->getComputedNbA();
	}

	public function testExceptionBadNumberB()
	{
		$a = 3;
		$b = new \Datetime();
		$this->stub->setNbA($a);
		$this->stub->setNbB($b);
		$this->assertEquals($b, $this->stub->getNbB());

		$this->setExpectedException('InvalidArgumentException');
		$this->stub->getComputedNbB();
	}
}
?>