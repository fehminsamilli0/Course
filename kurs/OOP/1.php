<?php 
	
	class Student{
		public $Name;

		public function NameSet($name)
		{
			$this->Name=$name;
		}

		public function NameGet(){
			return $this->Name;
		} 

	}


 ?>