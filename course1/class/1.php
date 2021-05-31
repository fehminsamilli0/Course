<?php 

Class Hello{
	public $NameSurname;
	public function Set($pr)

	{
		$this->NameSurname =$pr;

	}
	public function Get()
	{
		return $this->NameSurname;
	}

	function __construct()
	{
		echo '<h1>Class Basladi</h1>';
	}
	function __destruct()
	{
		echo '<h1>Class Bitdi</h1>';

     }

}

 ?>