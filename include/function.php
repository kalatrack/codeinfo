<?php 
	function check_query($string){
		global $connection;
		if(!$string){
			die("Mysql Does not allow to perform Query See Error in Query. : ".mysqli_error($connection));
		}
	}

	function all_code(){
		global $connection;
		$query = "select * from codes ";
		$result = mysqli_query($connection,$query);
		check_query($result);
		return $result;
	}

	function code_id($id){

		global $connection;
		$query = "select * from codes where id = {$id} limit 1 ";
		$result = mysqli_query($connection,$query);
		check_query($result); if($id_code = mysqli_fetch_assoc($result)){
			return $id_code;
		}else{  
		return null;
	    }
	}



 ?>