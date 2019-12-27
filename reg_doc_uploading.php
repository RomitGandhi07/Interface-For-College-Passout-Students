<?php
if(!(isset($_SESSION['username'])))
{
	//header("location:login.php");
	session_start();
}
include_once"header.php" ?>

<?php
require_once('dbconnection.php'); 
if(isset($_POST["upload"])){
  
	if($_FILES["enrollmentproof"]["name"])
    {
        
		$enrollmentcheck = $_FILES['enrollmentproof']['size'];
		$idproofcheck = $_FILES['enrollmentproof']['size'];
 
		//$fileExtension = $_FILES['enrollmentproof']['name'];
		$enrollmentproofFileType = strtoupper(pathinfo($_FILES["enrollmentproof"]["name"],PATHINFO_EXTENSION));
		$IdproofFileType = strtoupper(pathinfo($_FILES["idproof"]["name"],PATHINFO_EXTENSION));
		
		$idproofFileType = strtoupper(pathinfo($_FILES["idproof"]["name"],PATHINFO_EXTENSION));
		
		if($enrollmentcheck !== false && $idproofcheck !== false)
		{
      
			$enrollmentproof = $_FILES['enrollmentproof']['tmp_name'];          
			$enrollmentimgContent = addslashes(file_get_contents($enrollmentproof)); 
			
			$idproof = $_FILES['idproof']['tmp_name'];          
			$idproofimgContent = addslashes(file_get_contents($idproof)); 


 
			if($enrollmentproofFileType != "PDF" ) 
			{
				echo " You have uploaded <b> " .$enrollmentproofFileType ."  </b>file.</br> Sorry, only PDF files are allowed!!";
			}
			else
			{
				//echo "update user_details set enrollment_no_proof='$imgContent'";
				echo $_SESSION['username'];
				$sql = "update user_details set enrollment_no_proof='$enrollmentimgContent',photo_id_proof='idproofimgContent' where user_id='".$_SESSION['username']."'";
				//echo $sql;
				$result = mysqli_query($con, $sql); 
				if($result)
				{
					//echo "File uploaded successfully.";
					header('location:index.php');
				}
				else
				{
					echo "File upload failed, please try again.";
				}      
			}
		}
		else
		{
			echo " You have uploaded <b> " .$enrollmentproofFileType ."  </b>file.</br> Sorry, only PDF files are allowed!!";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">
	
	<style>
	
	.btn_doc_upload
	{
		margin-left:40%;
		margin-top:3%;
	}
	
	.reg_doc_upload_text
	{
		margin-top:4%;
		font-size:18px;
	}
	</style>
</head>
<body>

<div class="container" style="margin-top:5%">
	<div class="row">
		<div class="form-group col-lg-12">
				
				<form action="" method="POST" enctype="multipart/form-data" >
	
          <legend for="enrollmentproof" class="col-sm-3 control-legend">Enrollment Proof</legend>
                    <div class="col-lg-6">
                        <input type="file" name="enrollmentproof"  class="form-control">
    
                    </div>
                </div>
			
		
			<div class="form-group col-lg-12">
                    <legend for="idproof" class="col-sm-3 control-legend">ID Proof</legend>
                    <div class="col-lg-6">
                        <input type="file" name="idproof"  class="form-control">
    
                    </div>
                </div>
		
		
			<div class="col-sm-6 ">
                
				<input type="submit" name="upload" value="Upload" class="btn btn-success btn_doc_upload">
				</div>
			</form>
			<div class="col-sm-12 controls">
                
				<p class="reg_doc_upload_text"><b>Note:</b> You Have To Compulsory Upload .pdf File.</p>
		  
				</div>
	 
	</div>
</div>

</body>
</html>