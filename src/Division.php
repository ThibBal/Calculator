<?php 

namespace Maths;

require_once 'Operation.php';
// class Maths\Division
final class Division extends Operation
{
	public function compute()
	{
		$this->checkNumber();

		$result = $this->getComputedNbA() / $this->getComputedNbB();
		return $result < 0 ? 0 : $result;
	}
}

