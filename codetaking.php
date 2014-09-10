<?php require_once("include/dbcon.php"); ?>
<?php 
	if(isset($_POST["submit"])){

		$menu = $_POST["menu"];
		$lang = $_POST["lang"];
		$desc = $_POST["desc"];
		//$path = $_POST["path"];
		$fav  = $_POST["fav"];
		$tmp_file = $_FILES["file"]["tmp_name"];
		$target_file = basename($_FILES["file"]["name"]);
		$upload_dir = ("d:/mycodes");
		$path = $upload_dir."/".$target_file;
		
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
			
			move_uploaded_file($tmp_file, $upload_dir."/".$target_file);
			header("Location: code.php");
		}




	}else{
		$_SESSION = "Your Form does not submitted Please Check Fields and Try Again";
	}


 ?>