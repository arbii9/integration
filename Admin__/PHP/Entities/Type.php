<?php 

class Type
{
	private $Type;
	private $Salary;

	
	function __construct($type,$salary)
	{
		$this->Type = $type;
		$this->Salary = $salary;
		
	}

	function getType()
	{
		return $this->Type;
	}
	function setType($type)
	{
		$this->Type = $type;
	}

	function getSalary()
	{
		return $this->Salary;
	}
	function setSalary($salary)
	{
		$this->Salary = $salary;
	}

}

 ?>