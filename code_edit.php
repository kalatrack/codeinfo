<?php require_once("include/dbcon.php"); ?>
<?php require_once("include/function.php"); ?>
<title><?php $title = "Codes"; echo "Information of {$title}"; ?></title>
<?php include("include/header.php"); ?>
<?php  ?>
<?php 
	if($_GET['id'] ){ 
		$code_id = $_GET['id'];
	}else{ 
		$code_id="";
		
		}   ?>
<?php
	if(isset($_POST['submit'])){
		$id = $_GET['id'];
		$menu = $_POST["menu"];
		$lang = $_POST["lang"];
		$desc = $_POST["desc"];
		$path = $_POST["path"];
		$fav  = $_POST["fav"];
		$query = "update codes set name='{$menu}',language='{$lang}',description='{$desc}',path='{$path}',fav={$fav}";
		$query.= " where id={$id} limit 1";
		$result = mysqli_query($connection,$query);
		check_query($result);
		if($result && mysqli_affected_rows($connection) >= 0){
				header("Location: code.php");}
	}else{
		if(!$_GET['id']){
				echo "You have not submited form ";}
	}

?>
<?php $code = code_id($code_id); ?>
<div class="text-info"><span class="text-danger">EDIT</span> :  <?php echo strtoupper($code['name']); ?>&nbsp;&nbsp;&nbsp;&nbsp;
<span class="text-danger">Favorite: </span><span class="text-warning"><?php if($code['fav'] == 1){echo " YES";}else{echo " NO";} ?></span></div>
<div class="row">  
  <div class="col-md-10">
      <form class="form-horizontal text-primary lead" style="margin-top:10px;" method="POST" action="code_edit.php?id=<?php echo $code['id'];?>">
        <div class="form-group">
            <label for="menu" class="control-label col-md-2">Code Name</label>
            <div class="col-md-10">
            <input type="text" name="menu" class="form-control text-primary" value="<?php echo htmlentities($code['name']); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="lang" class="control-label col-md-2">Language</label>
            <div class="col-md-10">
			<textarea name="lang" cols="90" rows="3" class="form-control text-primary"><?php echo htmlentities($code['language']); ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="desc" class="control-label col-md-2">Description</label>
            <div class="col-md-10">
			<textarea name="desc" cols="90" rows="3" class="form-control text-primary"><?php echo htmlentities($code['description']); ?></textarea>
            </div>        
        </div>
        <div class="form-group">
            <label for="path" class="control-label col-md-2">Location</label>
            <div class="col-md-10">
			<textarea name="path" cols="90" rows="3" class="form-control text-primary"><?php echo htmlentities($code['path']); ?></textarea></div>
        </div>
         <div class="form-group">
            <label for="fav" class="control-label col-md-2">Favorite</label>
            <div class="col-md-10"><select name="fav" class="form-control text-primary">
                <option value="1"><?php if($code['fav'] == 1){ echo 1; }else{echo 1;} ?></option>
                <option value="0"><?php if($code['fav'] == 0){ echo 0; }else{ echo 0;} ?></option>
            </select><span class="text-warning"><?php if($code['fav'] == 1){echo " YES";}else{echo " NO";} ?></span></div>
        </div>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2"><input type="submit" class="btn btn-default text-primary" name="submit"></div>
        </div>
    </form>
  </div>  
</div>
	
<?php include("include/footer.php");?>
