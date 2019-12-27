<?php include_once"header_loggout.php" ?>
<?php 
if(!isset($_SESSION)) { session_start();}
if(isset($_GET['status']))
{
	$_SESSION['username']="";
	session_destroy();
}
?>
<html>
	<head>
	
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">

<style>
.login{
	margin-top:10%;
	margin-left:25%;
}

.btn-login
{
margin-left:80%;
margin-top:5%;	
}


.forgot_password
{
	margin-left:75%;
}

.register_text
{
	margin-top:7%;
	margin-left:55%;
}

.login_text
{
	text-align:center;
	
}


</style>
	
</head>
<body>
<div class="container">
	<div class="row">
	
		<div class="login col-lg-6">
		<form method="POST" action="logh1.php">

		<h2 class="login_text">Login</h2>
				<div class="form-group">
                    <legend for="fullName" class="col-sm-3 control-label">E-mail</legend>
                    <div class="col-lg-12">
                        
						<input type="email"  name="email"  class="form-control" placeholder="Enter Your Registered E-mail Address" autofocus required>
    
                    </div>
                </div>
				
				
				<div class="form-group">
                    <legend for="enrollmentNo" class="col-sm-3 control-label">Password</legend>
                    <div class="col-lg-12">
						
						<input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
						
                    </div>
                </div>
				
				
				<div class="form-group">
                    <div class="col-lg-12">
						
						<a href="#" class="forgot_password">Forgot Password?</a>
                    </div>
                </div>

				
				<div class="col-sm-6 controls">
                
				<input type="submit" name="Login" value="Login" class="">
				</div>
		  
				
	
	
				<div class="col-sm-12 controls">
                
				<p class="register_text">Don't Have an Account?<a href="registration1.php">Register</a></p>
		  
				</div>
				
	
				
				</form>
		</div>
	
	</div>
</div>

</body>
</html>