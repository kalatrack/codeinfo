<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="include/css/bootstrap.min.css" rel="stylesheet">
        <link href="include/css/cosmo-bootstrap.min.css" rel="stylesheet">
<style>div ul li a:hover{background-color:#b0b0b0;}</style>
        <title>Code Information</title>
    </head>
     <body>
       <div class="container"> <header class="page-header col-md-11">
            <nav class="navbar navbar-default navbar-fixed-top" style="margin-left: 10px; margin-right: 10px">
                <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="glyphicon glyphicon-ok" ></span></button>
                    <h4 class="text-primary ">Code Information</h4>
                </div>
                <div class="navbar-collapse collapse" >
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav" ><a href="index.php" >Home</a></li>
                        <li class="nav"><a href="code.php">Codes</a></li>
                        <li class="nav"><a href="fav.php">Favorite</a></li>
                        <li class="nav"><a href="Search.php">Search</a></li>
                        
                    </ul>
                </div> 
            </nav>

            <ol class="breadcrumb hidden-xs" style="margin-top: 40px">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="active"><a href="code.php">Codes</a></li>
                <li class="active"><a href="fav.php">Favorite</a></li>
            </ol>
            <?php 
          
                if(!$title == "Codes" || !$title == "search"){
             ?>
            <h3 class="text-success">This Site is usually made for Collecting Information About the Code that used frequently in Projects</h3>
            <?php } ?>
        </header>
           </div>
           <div class="container">