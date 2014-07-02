<?php 
namespace MathsTest;

require_once '../src/Substraction.php';

use Maths\Substraction as Substraction;

class SubstractionTest extends \PHPUnit_Framework_TestCase
{
	public function testSubstraction()
	{
		$substraction = new Substraction(5, 2);
		$this->assertEquals(3, $substraction->compute());
	}
}