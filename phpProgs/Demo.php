<?php
/*
 * OOP1.php
 * 
 * Copyright 2012 shaon <shaon@shaon-desktop>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * 
 * 
 */
	class Demo{
		private $_name;
		public function sayHello(){
			print "Hello "; print $this->getName();print "!!";
		}
		public function getName(){
			return $this->_name;
			
		}
		public function setName($name)
		{
			$this->_name=$name;
		}
	}
?>

<html>

<head>
	<title>OOP1</title>
	
</head>

<body>
	
</body>

</html>
