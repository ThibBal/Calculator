<?php 
namespace MathsTest;

require_once 'Division.php';

use Maths\Division as Division;

class DivisionTest extends \PHPUnit_Framework_TestCase
{
	public function testDivision()
	{
		$division = new Division(10, 2);
		$this->assertEquals(5, $division->compute());
	}
}