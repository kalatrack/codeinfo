<?php require_once("include/dbcon.php"); ?>
<?php 
	
	$id = $_GET['id'];
	$query = "delete from codes where id = {$id} limit 1";
	$result = mysqli_query($connection, $query);

	if($result && mysqli_affected_rows($connection) ==1){
		header("Location: code.php");
	}

 ?>