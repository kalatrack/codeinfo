<?php

	$dbuser = "root";
	$dbhost = "localhost";
	$dbname = "codeinfo";
	$dbpwd  = "";
	$connection = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbname);
if(mysqli_connect_errno()){
		die("Database Connection Fail: ". mysqli_connect_error() ."(".mysqli_connect_errno().")");
	}

?>