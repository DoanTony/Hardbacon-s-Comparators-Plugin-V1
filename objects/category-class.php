<?php 

class category
{

	private $name,$tooltip;

	 function __construct($Name, $Tooltip)
	{
		$this -> name = $Name;
		$this -> tooltip = $Tooltip;
	}


	function get_name()
	{
		return $this -> name;
	}

	function set_name($Name)
	{	
		$this -> name = $Name;
	}

	function get_tooltip()
	{
		return $this -> tooltip;
	}

	function set_tooltip($Tooltip)
	{
		$this -> tooltip = $Tooltip;
	}

}
?>