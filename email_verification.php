
<?php
session_start();
include_once"header_loggout.php" ?>
<html>
	<head>
	
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">


<style>

.btn-otp-submit
{
	margin-top:5%;
	margin-left:270%;
}


.content
{
	margin-left:36%;
	margin-top:2%;
}


.email_verification_text
{
	margin-top:18%;
	font-size:18px;
	margin-left:29%;
}

.btn-otp-submit
{
	margin-left:310%;
}

</style>
</head>
<body>
<?php


$mail = $_SESSION['username'];

?>
<div class="container">
<form method="GET" action="">
<div class="row">	


	<div class="col-sm-12 controls">
                
				<p class="email_verification_text"><b>Note:</b> An OTP is sent to your registered E-Mail Address</p>
		  
				</div>
</div>	
	
	<div class="row">
	
	

	<div class="form-group col-lg-6 content" >
                    <legend for="email_otp" maxlength="4" class="col-sm-3 control-label">Enter OTP</legend>
                    <div class="col-lg-6">
						
						<input type="password" maxlength="4" name="email_otp" class="form-control" placeholder="Enter OTP">
						
                    </div>
                </div>
				
				
		
				
	</div>
	
	<div class="row">
	<div class="col-lg-2 controls">
                
				<input type="submit" name="verify" value="Verify" class="btn btn-success btn-otp-submit"/>
				</div>
				</div>
				</form>
</div>
</body>
</html>
<?php
require_once('dbconnection.php');
if(isset($_GET['verify']))
{
	
	$fetch=mysqli_query($con,"select otp from otp where email='".$_SESSION['username']."'");
	echo "select otp from otp where email='".$_SESSION['username']."'";
	$row=0;
	while($row=mysqli_fetch_array($fetch))
	{
		$c = $row[0];
	}
	if($_GET['email_otp']==$c)
	{
		header('location:email_verified.php');
	}
	else
	{
		echo "<script>alert('Invalid OTP')</script>";
	}
}
include_once"footer.php" ?>
?>