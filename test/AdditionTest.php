<?php 
namespace MathsTest;

require_once '../src/Addition.php';

use Maths\Addition as Addition;

class AdditionTest extends \PHPUnit_Framework_TestCase
{
	public function testAddition()
	{
		$addition = new Addition(1, 2);
		$this->assertEquals(3, $addition->compute());
	}

}