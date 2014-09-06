<?php require_once("include/dbcon.php"); ?>
<?php 
	if(isset($_POST["submit"])){

		$menu = $_POST["menu"];
		$lang = $_POST["lang"];
		$desc = $_POST["desc"];
		$path = $_POST["path"];
		$fav  = $_POST["fav"];
		$time = time();
		$current_time = strftime("%Y-%m-%d %H:%M:%S",$time);
		//Writing Query for Send Data into Database.
		$query = "insert into codes (name,language,description,path,fav,time) values  ";
		$query.= "('{$menu}','{$lang}','{$desc}','{$path}',{$fav},'{$current_time}')";
		// Perform Query for SQL
		$result = mysqli_query($connection,$query);
		if(!$result){
			die("Query Submittion Fail Due to Following Error: ".mysqli_error($connection));
		}else{
			header("Location: code.php");
		}




	}else{
		$_SESSION = "Your Form does not submitted Please Check Fields and Try Again";
	}


 ?>