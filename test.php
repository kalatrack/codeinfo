<?php 
	//Abstract class is used when we do not want to instantitate a class directly by its own
	//a function does not do like previously do in parent cl
	echo "<h1>Object Oriented Programming in PHP</h1><br>";

	interface foo{
		const l = 'interface variable';
		public function foos();
	}
	class bar implements foo{
			
		public function fs(){

			return "<br>".bar::l;
		}
		public function foos(){
			return "hellow interface variable ".bar::l;
		}
	}
$a = new bar();
	echo bar::l;
	echo $a->fs();echo "<br>"; echo $a->foos();



 ?>
 