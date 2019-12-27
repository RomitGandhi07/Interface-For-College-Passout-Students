<?php include_once"header.php" ?>

<html>
	<head>
	
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">

<style>
.new_password{
	margin-top:10%;
	margin-left:25%;
}

.btn-new-submit
{
margin-left:80%;
margin-top:5%;	
}



.new_password_text
{
	text-align:center;
	
}


</style>
	
</head>
<body>
<div class="container">
	<div class="row">
	
		<div class="new_password col-lg-6">
			<h2 class="new_password_text">Enter Your New Password</h2><br/>
				<div class="form-group">
                    <legend for="npassword" class="col-sm-8 control-label">New Password</legend>
                    <div class="col-lg-12">
                        
						<input type="password"  name="npassword"  class="form-control" placeholder="Enter Your New Password">
   
                    </div>
                </div>
				
				
				<div class="form-group">
                    <legend for="cpassword" class="col-sm-8 control-label">Confirm Password</legend>
                    <div class="col-lg-12">
						
						<input type="password" name="cpassword" class="form-control" placeholder="Enter Your Password">
						
                    </div>
                </div>
				
				
				<div class="col-sm-6 controls">
                
				<a  href="#" class="btn btn-success btn-new-submit">Submit</a>
				</div>
				
	</div>