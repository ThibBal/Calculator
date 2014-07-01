<?php 

class CalculatorController
{
	public function isNumeric($a)
	{
		if(is_numeric($a)){
			return true; 
		}else{
			throw new InvalidArgumentException('The argument should be a number');
		}
	}

	
}
?>