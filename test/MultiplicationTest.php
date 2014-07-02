<?php 
namespace MathsTest;

require_once '../src/Multiplication.php';

use Maths\Multiplication as Multiplication;

class MultiplicationTest extends \PHPUnit_Framework_TestCase
{
	public function testMultiplication()
	{
		$product = new Multiplication(5, 6);
		$this->assertEquals(30, $product->compute());
	}
}