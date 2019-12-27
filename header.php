<?php
if(!isset($_SESSION['username'])){session_start();}
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EDU Interface</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">

	<style>
	.website_name
	{
		color:white;
	}
	
	
	
		
	
		
	</style>
	
  </head>

  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color:#850019 !important;font-family:arial !important"> 
      <div class="container" >
        <a class="navbar-brand" href="#"><img src="../Hackathon/images/final_logo.png" height="45" width="45" style="margin-left:0% !important;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		<h4 class="website_name">EDU INTERFACE</h4>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="font-size:18px;font-weight:bold;margin-left:3% !important">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link" href="reg_doc_uploading.php">Document Upload</a>
            </li>
			
            <li class="nav-item">
              <a class="nav-link" href="request.php">Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="information.php">Information</a>
            </li>
            
			
			
			
			</ul>
			<div style="margin-left:3%">
			<table>
				<tr>
					<td style="color:white;">Welcome,<a href="profile.php" style="color:white !important"><?php echo $_SESSION['username'];?></a></td>
					<td><a href="login.php?status=logout">&nbsp;&nbsp;Logout</a></td>
				</tr>
			</table>
			</div>
        </div>
      </div>
    </nav>
</body>
</html>
<?php
//$con=mysqli_connect("localhost","root","","finaldatabae");
if(!(isset($_SESSION['username'])))
{
	header("location:login.php");
}
?>