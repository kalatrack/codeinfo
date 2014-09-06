<?php
	if(isset($_POST['submit'])){
		$id = $code_id;
		$menu = $_POST["menu"];
		$lang = $_POST["lang"];
		$desc = $_POST["desc"];
		$path = $_POST["path"];
		$fav  = $_POST["fav"];
$query = "update codes set name='{$menu}',language='{$lang}',description='{$desc}',path='{$path}',fav={$fav}";
		$query.= " where id={$id} limit 1 ";
		$result = mysqli_query($connection,$query);
		check_query($result);
		if($result && mysqli_affected_rows($connection) >= 0){
				header("Location: code.php");}
	}else{
		if(!$_GET['id']){
				echo "You have not submited form ";}
	}

?>