<?php include_once"header.php"; 

$con=mysqli_connect("localhost","root","","finaldatabae");
if(!isset($_SESSION)) { session_start();}
if(isset($_SESSION['username']))
{
	//echo"session set";
}

If($con)
{
	
		/*$sql=mysqli_query($con, "select verification_status from user_details where user_id='".$_SESSION['username']."'"); 
		
		while($row=mysqli_fetch_array($sql))
		{
			$vs = $row[0];
		}
		if($vs==0)
		{
			
		}*/
		
//echo "select email_verification_status,verification_status from user_details where user_id='".$_SESSION['username']."'";
	if(isset($_SESSION['username']))
	{
		$check=mysqli_query($con,"select education_details.*,user_details.*,user_address.* from user_details inner join user_address on user_details.user_id=user_address.user_id inner join education_details on user_details.user_id = education_details.user_id where user_details.user_id='".$_SESSION['username']."'");
		
		//echo "select education_details.*,user_details.*,user_address.* from user_details inner join user_address on user_details.user_id=user_address.user_id inner join education_details on user_details.user_id = education_details.user_id where user_details.user_id='".$_SESSION['username']."'";
		$rows=0;
		while($rows=mysqli_fetch_array($check))
		{
			//echo $rows[0];
			$enrol=$rows['enrollment_no'];
			$uniname=$rows['university_name'];
			$clgname=$rows['college_name'];
			$passyr=$rows['passing_year'];
			$name=$rows['fname'];
			$mob=$rows['mobile_no'];
			$block=$rows['block_no'];
			$colony=$rows['colony'];
			$landmark=$rows['land_mark'];
			$city=$rows['city'];
			$state=$rows['state'];
			$pincode=$rows['pincode'];
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
	
	
	
	
	<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<style>
	
	.display_content
	{
		margin-top:2%;
	}
	
	.i1
	{
		height:40px;
		width:40px;
		float:left;
	}
	
	.text
	{
		
	margin-left:3%
	}
	
	.add_address_text
	{
		margin-left:27%;
		font-size:26px;
		font-weight:bold;
		text-decoration:underline;
	}
	
	.btn-new-add-submit
	{
		margin-left:80%;
	}
	

	.btn-pay-now
	{
		margin-top:3%;
		margin-left:7%;
	}
	
	.m_container
	{
		margin-left:3%;
		margin-top:2%;
	}
	
	
	</style>
</head>
<body >
<form method="POST" action="pay_receipt.php">
<div class="row">

	<div class="col-sm-4" style="margin-left:3%;margin-top:2%">
  
		<div><img  class="image-responsive i1"   src="../Hackathon/images/marksheet1.png" ></div>
		<div class="text"><h3>Marksheet</h3></div>
	</div>
</div>

<div class="m_container">

<br/><br/>

				
			<form action="pay_receipt.php" method="GET"> 	
				
				<div class="form-group">
                    <legend for="enrollmentNo" class="col-sm-3 control-legend">Enrollment No</legend>
                    <div class="col-sm-6">
                        <input type="Number" id="enrollmentNo"  class="form-control" value="<?php echo $enrol;?>" readonly>
    
                    </div>
                </div>
				
				
				
				
				<div class="form-group">
                    <legend for="fullName" class="col-sm-3 control-legend">Full Name</legend>
                    <div class="col-sm-6">
                        <input type="text" id="fullName"  class="form-control" value="<?php echo $name;?>"  readonly>
    
                    </div>
                </div>
				
				
				<div class="form-group">
                    <legend for="fullName" class="col-sm-3 control-legend">Mobile No</legend>
                    <div class="col-sm-6">
                        <input type="number" id="fullName"  class="form-control" value="<?php echo $mob;?>"  readonly>
    
                    </div>
                </div>
				
				
				<div class="form-group">
                    <legend for="universityName" class="col-sm-3 control-legend">University Name</legend>
                    <div class="col-sm-6">
                        <input type="text" id="universityName"  class="form-control" value="<?php echo $uniname;?>" readonly>
    
                    </div>
                </div>
				
				
				
				
				<div class="form-group">
                    <legend for="collegeName" class="col-sm-3 control-legend">College Name</legend>
                    <div class="col-sm-6">
                        <input type="text" id="collgeName"  class="form-control" value="<?php echo $clgname;?>" readonly>
    
                    </div>
                </div>

				
				<div class="form-group">
                    <legend for="passOutYear" class="col-sm-3 control-legend">Pass Out Year</legend>
                    <div class="col-sm-6">	
                        <input type="Number" id="passOutYear"  class="form-control" value="<?php echo $passyr;?>" readonly>
    
                    </div>
                </div>
				
				
				
					<div class="form-group">
                    <legend for="semester" class="col-sm-3 control-legend">Semester</legend>
                    <div class="col-sm-6">
                        <input type="text" maxlength="1" class="form-control" placeholder="Enter Semester" >
                    </div>
					
					
					
                </div>
				
				
				
				<div class="row" >
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group" style="margin-left:4%">
                        <legend for="addline1" class="col-lg-12 control-label">Address</legend>
						<input type="text" name="addline1" id="first_name" class="form-control input-lg" placeholder="Flat No.,Building Name" tabindex="1" readonly value="<?php echo $block;?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:4%">
					<div class="form-group" style="margin-left:4%">
					
						<input type="text" name="addline2" id="last_name" class="form-control input-lg" placeholder="Street,Colony" tabindex="2" value="<?php echo $colony;?>" readonly>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:1%">
					<div class="form-group" style="margin-left:4%">
                      
						<input type="text" name="landmark" id="first_name" class="form-control input-lg" placeholder="Landmark" tabindex="1"value="<?php echo $landmark;?>" readonly>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:1%">
					<div class="form-group" style="margin-left:4%">
					
						<input type="number" maxlength="6" name="pincode" id="last_name" class="form-control input-lg" placeholder="Pincode" tabindex="2" value="<?php echo $pincode;?>" readonly>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:1%">
					<div class="form-group" style="margin-left:4%">
                      
						<input type="text" name="city" id="first_name" class="form-control input-lg" placeholder="City" tabindex="1" value="<?php echo $city;?>" readonly>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:1%">
					<div class="form-group" style="margin-left:4%">
					
						<input type="text" name="state" id="last_name" class="form-control input-lg" placeholder="State" tabindex="2" value="<?php echo $state;?>" readonly>
					</div>
				</div>
				
				
				<div class="col-sm-6 controls" style="margin-left:57%">
                
				  <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Change</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-mm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body col-lg-12 col-sm-12 col-md-12 col-xs-12">
          
		  <div class="row add_address_text"><p>Add New Address</p></div>
		  <br/>
		  	<div class="row col-lg-12 col-sm-12 col-md-12 col-xs-12">
				
				<div class="form-group col-lg-6 col-sm-12 col-md-12 col-xs-12">
                        
						<input type="text" name="addline1"  class="form-control input-lg" placeholder="Flat No,Building Name" tabindex="1">
					</div>
			
				
					<div class="form-group col-lg-6 col-sm-12 col-md-12 col-xs-12">
						
						<input type="text" name="addline2"  class="form-control input-lg" placeholder="Street,Colony" tabindex="2">
					</div>
				
		</div>
			
			
		<div class="row col-lg-12 col-sm-12 col-md-12 col-xs-12">
				
					<div class="form-group col-lg-6 col-sm-12 col-md-12 col-xs-12">
                        
						<input type="text" name="landmark" class="form-control input-lg" placeholder="Landmark" tabindex="1">
					</div>
			
				
					<div class="form-group col-lg-6 col-sm-12 col-md-12 col-xs-12">
						
						<input type="number" maxlength="6" name="pincode"  class="form-control input-lg" placeholder="Pincode" tabindex="2">
					</div>
				
			</div>	
			
	

				<div class="row col-lg-12 col-sm-12 col-md-12 col-xs-12">
				
					<div class="form-group col-lg-6 col-sm-12 col-md-12 col-xs-12">
                        
						<input type="text" name="City"  class="form-control input-lg" placeholder="City" tabindex="1">
					</div>
			
				
					<div class="form-group col-lg-6 col-sm-12 col-md-12 col-xs-12">
						
						<input type="text" name="state" class="form-control input-lg" placeholder="State" tabindex="2">
					</div>
				
			</div>
			
			<br/>
			<div class="col-sm-6 controls">
                
				<a  href="#" class="btn btn-success btn-lg btn-new-add-submit">Submit</a>
				</div>
			
	
		
        </div>
        
      </div>
    </div>
  </div>
				</div>
				
				
				
			</div>
			
			
			<div class="form-group">
                    <legend for="amount" class="col-sm-3 control-legend">Amount</legend>
                    
                    </div>
                </div>
			
			
			<div class="row" style="margin-left:2%">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:1%">
					<div class="form-group" style="margin-left:4%">
						<h6>Marksheet Amount</h6>
						<input type="number" name="marksheet_charges" class="form-control input-lg"  tabindex="1" value="200" readonly>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:1%">
					<div class="form-group" style="margin-left:4%">
					<h6>Delivery Charges</h6>
						<input type="number"  name="delivery_charges"  class="form-control input-lg"  tabindex="2" value="100" readonly>
					</div>
				</div>
				<br>
				
			</div>
			
			
				<div class="form-group" style="margin-left:3%">
                    <legend for="total_charges" class="col-sm-3 control-legend">Total Charges</legend>
                    <div class="col-sm-4" >
                        <input type="text" name="total_charges" class="form-control" value="300" readonly>
                    </div>
					
					
					
                </div>
			
				
				
				
				
				<div class="col-sm-6 controls">
                
				<input type="submit" name="paynow" value="Proceed To Payment" class="btn btn-success btn-lg btn-pay-now"/>
				</div>
				
				
				
				
	
				</div>
						
<script>



   
  


</script>
</form>
<?php include_once"footer.php" ?>
</body>
</html>

