<?php 

class Verification
{

	public function isInteger()
	{
		if($this->is_int()){
			return true; 
		}else{
			throw new InvalidArgumentException('The argument should be a number');
		}
	}

	public function isPositive()
	{
		if($this>=0){
			return true;
		}else{
			throw new DomainException('The number should be positive');
		}

	}

	public function isResultValid()
	{
		if($this>=0){
			return $this;
		}else{
			return 0;
		}

	}


}	

		?>