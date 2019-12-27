<?php 
if(!isset($_SESSION)) { session_start();}
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
include_once"header.php" 
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Full Width Pics - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">


	
	<style>
	
	.requst_container
	{
		margin-left:22%;
		margin-top:3%;
	}

	.content{
	display:inline-block;
	height:80px;
	width:300px;
	
	margin-top:20%;
	}
	
		
	.i1
	{
		height:70px;
		width:70px;
		float:left;
	}
	
	.text
	{
	margin-top:2%;
	}
	
	
	
	</style>
	
	
  </head>
<body>

<div class="container requst_container">
  
  <div class="row">
    <div class="col-sm-4">
        <a href="#">
         <div class="content">
       <div> <img  class="image-responsive i1"   src="../Hackathon/images/transcript.png" ></div>
		<div class="text"><h3>Transcript</h3></div>
   </div>
</a>
    </div>
	
	
	
    <div class="col-sm-4">
        <a href="#">
         <div class="content">
       <div> <img  class="image-responsive i1"   src="../Hackathon/images/migrate.png" ></div>
		<div class="text"><h3>Migration</h3></div>
   </div>
</a>
    </div>
  </div>
  
  
  
  <div class="row">
    <div class="col-sm-4">
        
		<a href="#">
         <div class="content">
       <div> <img  class="image-responsive i1"   src="../Hackathon/images/marksheet1.png" ></div>
		<div class="text"><a href="marksheet.php"><h3>Marksheet</h3></a></div>
   </div>
		</a>
</div>
	
	
	
    <div class="col-sm-4">
        <a href="#">
         <div class="content" >
       <div> <img  class="image-responsive i1"   src="../Hackathon/images/provisional_certi.jpg" ></div>
		<div class="text"><h3>Provisional Certificate</h3></div>
   </div>
</a>
    </div>
  </div>
  
  <div class="row">
    <div class="col-sm-4">
        <a href="#">
         <div class="content">
       <div> <img  class="image-responsive i1"   src="../Hackathon/images/authentication.png" ></div>
		<div class="text"><h3>Authentication</h3></div>
   </div>
</a>
    </div>
	
	
	
    <div class="col-sm-4">
        <a href="#">
         <div class="content">
		 <div> <img  class="image-responsive i1"   src="../Hackathon/images/rank_certi1.jpg" ></div>
		<div class="text"><h3>Rank Certificate</h3></div>
   </div>
</a>
    </div>
  </div>
  
  
  
  
</div>
</body>
</html>
<?php include_once"footer.php" ?>