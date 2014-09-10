<?php require_once("include/dbcon.php"); ?>
<?php require_once("include/function.php"); ?>

<title><?php $title = "Codes"; echo "Information of {$title}"; ?></title>

<?php include("include/header.php"); ?>

<div class="container">
	<div class="row"><div class="col-md-12 "><div class="table-responsive"><table class="table table-striped table-bordered table-condensed table-hover">
					<thead class="jumbotron">
						<tr>
							<th class="btn btn-success btn-lg col-md-1">Sr.#</th>
							<th class="col-md-2">Code Title</th>
							<th class="col-md-2">Language</th>
							<th class="col-md-2">Description</th>
							<th class="col-md-2">Path</th>
							<th char="col-md-1">Time</th>
							<th class="col-md-2">Action <span class="glyphicon glyphicon-edit btn btn-success"> </span>
							<span class="glyphicon glyphicon-remove-circle btn btn-danger" ></span></th>
						</tr>
					</thead>
					
					<?php 
						$a = 1;
						$code_list = all_code();
						while ($code = mysqli_fetch_assoc($code_list)) { ?>
					<tr>
						<td><?php echo $a++; ?></td>
						<td><?php echo "<h5>{$code['name']}</h5>"; ?></td>
						<td><?php echo substr($code['language'],0,20); ?></td>
						<td><?php echo substr($code['description'],0,20); ?>
						<a href="full_code.php?id=<?php echo $code['id'];?>"><span class="btn btn-primary">Read More</span></a></td>
						<td><?php echo $code['path']; ?></td>
						<td><?php echo $code['time']; ?></td>
						<td><a href="code_edit.php?id=<?php echo "{$code['id']}"; ?>">
						<span class="glyphicon glyphicon-edit btn btn-success"></span></a>
						<a href="code_delete.php?id=<?php echo "{$code['id']}"; ?>" onclick="return confirm('Are You Sure?');">
						<span class="glyphicon glyphicon-remove-circle btn btn-danger"></span></a>
						</td>
					</tr>
		             <?php 
		            	}
					 ?>
										
				</table></div></div></div>
</div>
<?php include("include/footer.php");?>