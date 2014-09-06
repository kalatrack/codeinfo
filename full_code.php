<?php require_once("include/dbcon.php"); ?>
<?php require_once("include/function.php"); ?>
<title><?php $title = "Codes"; echo "Information of {$title}"; ?></title>
<?php include("include/header.php"); ?>
<?php 
	if($_GET['id']){
		$code_id = $_GET['id'];		
	}else{
		header("Location: code.php");
	}
 ?>
<?php $code = code_id($code_id); ?>
<div class="row"><h4><span class="lead text-inverse">Name Of Code: </span><span class="text-primary" ><?php echo ucfirst($code['name']); ?></span></h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="lead text-info">Time : <?php echo $code['time']; ?></span></div>
<div class="row"><h5><span class="lead text-inverse">Language: </span><span class="text-primary"><?php echo ucwords($code['language']); ?></span></h5></div>
<div class="row"><h5 class="lead">Contents: </h5></div>
<p>
	<?php echo $code['description']; ?>
</p>
<p><span class="lead text-primary">Path :</span><?php echo $code['path']; ?></p>

<?php include("include/footer.php");?>