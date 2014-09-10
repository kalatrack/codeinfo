<?php require_once("include/dbcon.php"); ?>
<?php require_once("include/function.php"); ?>
<title><?php $title = "Codes"; echo "Information of {$title}"; ?></title>
<link rel="stylesheet" type="text/css" href="prism.css">
<script type="text/javascript" src="//use.typekit.net/swf2wld.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<style type="text/css">
	body{
		font-size: 1.2em;color:#ff09ff ;font-family: /*brush script MT*/ acuta /*David*/ /*algerian*/;font-style:bold;
	}
	</style>
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
<div class="container row"><p><span class="lead text-primary">Path :</span><?php echo $code['path']; ?></p>

<div class="well"><pre class="line-numbers"><code class="language-php language-markup"><?php
$file = $code['path'];
$counter = 0;
	if($file){
		if($handle = fopen($file, "r")){
			while(!feof($handle)){
					echo "<b>";echo $counter++;echo ": </b> ";
					$content =fgets($handle);
					echo "&nbsp;";echo htmlentities($content);
				}
			fclose($handle);
		} 
	}else{
		echo "<p>File does not find.</p>";
	}
 ?>	</code></pre></div>
</div>


<script type="text/javascript" src="prism.js"></script>
<?php include("include/footer.php");?>