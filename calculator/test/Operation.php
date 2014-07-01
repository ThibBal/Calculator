<?php

namespace Maths;
require_once 'ComputeInterface.php';
// class Maths\Operation
abstract class Operation implements ComputableInterface
{
	/**
	 * @var integer|ComputableInterface
	 */
	protected $nbA;

	/**
	 * @var integer|ComputableInterface
	 */
	protected $nbB;


	public function __construct($nbA, $nbB)
	{
		$this->setNbA($nbA);
		$this->setNbB($nbB);
	}

	protected function isNumberValid($num) {
		if (is_int($num) && $num > 0) {
			return true;
		}
		if ($num instanceof ComputableInterface) {
			return true;
		}
		return false;
	}

	protected function checkNumber()
	{
		if (! $this->isNumberValid($this->nbA)) {
			throw new \InvalidArgumentException(sprintf(
				'%s expect $this->nbA to be a positive number; received %s',
				__METHOD__,
				(is_object($this->getNbA()) ? get_class($this->getNbA()) : $this->getNbA())
			));
		}
		if (! $this->isNumberValid($this->nbB)) {
			throw new \InvalidArgumentException(sprintf(
				'%s expect $this->nbB to be a positive number; received %s',
				__METHOD__,
				(is_object($this->getNbB()) ? get_class($this->getNbB()) : $this->getNbB())
			));
		}
	}

	public function setNbA($num)
	{
		$this->nbA = $num;
		return $this;
	}

	public function getNbA()
	{
		return $this->nbA;
	}

	public function setNbB($num)
	{
		$this->nbB = $num;
		return $this;
	}

	public function getNbB()
	{
		return $this->nbB;
	}

	private function getComputedNb($num)
	{
		$this->checkNumber();
		if ($num instanceof ComputableInterface) {
			return $num->compute();
		}
		return $num;	
	}

	public function getComputedNbA()
	{
		return $this->getComputedNb($this->nbA);
	}

	public function getComputedNbB()
	{
		return $this->getComputedNb($this->nbB);
	}
}