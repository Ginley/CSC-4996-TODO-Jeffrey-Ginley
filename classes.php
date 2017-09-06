<?php
	class Person
	{
		var $name;
		var $phone;
	
		function __construct($name, $phone)
		{
			$this->name = $name;
			$this->phone = $phone;
		}
		
		function get_name()
		{
			return $this->name;
		}
		
		function get_phone()
		{
			return $this->phone;
		}
	}
	
	class Task
	{
		var $name;
		var $description;
		var $datecreated;
		
		function __construct($name, $description, $datecreated)
		{
			$this->name = $name;
			$this->description = $description;
			$this->datecreated = $datecreated;
		}
		
		function get_name()
		{
			return $this->name;
		}
		
		function get_desc()
		{
			return $this->description;
		}
		
		function get_datecreated()
		{
			return $this->datecreated;
		}
	}
?>