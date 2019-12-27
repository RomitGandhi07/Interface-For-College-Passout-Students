<?php include_once"header.php" ?>



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
	.container2
	{
		margin-top:2%;
		margin-left:2%;
		height:100%;
		width:45%;
		float:left;
	}
	
	
	.container3
	{
		margin-top:2%;
		margin-left:2%;
		height:100%;
		width:49%;
		float:left;
	}
	
	.btn_save_changes
	{
		margin-left:40%;
		margin-top:3%;
	}
	
	.information_text
	{
		margin-left:30%;
		text-decoration:underline;
	}
	
	.request_text
	{
		text-decoration:underline;
		margin-left:35%;
	}
	</style>
	</head>
	<body>
	

	<div class="container2">
	
	<h3 class="information_text">Your Personal Information</h3>
	
	<div class="row">

				
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
					<div class="form-group ">
					<legend for="enrollmentno" class="col-lg-12 control-label">Enrollment No</legend>
                        <input type="number" maxlength="12" name="enrollmentno"  class="form-control input-lg" placeholder="Enrollment No" tabindex="1">
					</div>
				</div>
			</div>	
				
				<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
                        <legend for="firstname" class="col-lg-12 control-label">First Name</legend>
						<input type="text" name="firstname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
						<legend for="lastame" class="col-lg-12 control-label">Last Name</legend>
						<input type="text" name="lastname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
			</div>
		
		
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
                        <legend for="dob" class="col-lg-12 control-label">Date Of Birth</legend>
						<input type="date" name="dob"  class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				
				
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
                        <legend for="mobileno" class="col-lg-12 control-label">Mobile No</legend>
						<input type="number" name="mobileno"  class="form-control input-lg" placeholder="Mobile No" tabindex="1">
					</div>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="form-group">
                        <legend for="addline1" class="col-lg-12 control-label">Address</legend>
						<input type="text" name="addline1" id="first_name" class="form-control input-lg" placeholder="Flat No.,Building Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-top:6.3%">
					<div class="form-group">
					
						<input type="text" name="addline2" id="last_name" class="form-control input-lg" placeholder="Street,Colony" tabindex="2">
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-top:1%">
					<div class="form-group">
                      
						<input type="text" name="landmark" id="first_name" class="form-control input-lg" placeholder="Landmark" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-top:1%">
					<div class="form-group">
					
						<input type="number" maxlength="6" name="pincode" id="last_name" class="form-control input-lg" placeholder="Pincode" tabindex="2">
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-top:1%">
					<div class="form-group">
                      
						<input type="text" name="city" id="first_name" class="form-control input-lg" placeholder="City" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-top:1%">
					<div class="form-group">
					
						<input type="text" name="state" id="last_name" class="form-control input-lg" placeholder="State" tabindex="2">
					</div>
				</div>
			</div>
			
			
			
			
			<div class="col-sm-6 btn_save_changes">
                
				<a  href="#" class="btn btn-success btn-signup">Save Changes</a>
				</div>
		  
			
			
				
				
					
	
	
	
	
	</div>
	

	<div class="container3">

	<h3 class="request_text">Your Requests</h3>
	<table class="table-bordered" width="100%" height="80%" style="margin-top:5%;">
     <thead>
     <tr>
                                            <td class="bold">Sr. No</td>
											<td class="bold">Application Id</td>
                                           <td class="bold">Application Type</td>
                                            <td class="bold">Fees in Rs.</td>
                                            <td class="bold">Date</td>
											 <td class="bold">Status</td> 
											
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="padding-left:2%">1</td>
                                            <td><label name="applicationid">001174551</label></td>
                                            <td>
                                                <label name="applicationname">Transcript</label>
                                            </td>
                                            <td><label name="applicationfees">Rs. 200/-</label> </td>
                                            <td><label name="applicationdate">03/10/2018</label></td>
											<td><label name="applicationstatus"><a  href="#" onclick="approvedfun()">Approved
											<script>
											function approvedfun() {
											var txt;
											if (confirm("Your request is approved and service will be provided shortly")) {
											}
											document.getElementById("demo");
											}
											</script>
											</a></label></td>
											
                                        </tr>
										  <tr>
                                            <td style="padding-left:2%">2</td>
                                            <td><label name="applicationid">001174552</label></td>
                                            <td>
                                                <label name="applicationname">Marksheet</label>
                                            </td>
                                            <td><label name="applicationfees">Rs. 100/-</label> </td>
                                            <td><label name="applicationdate">15/07/2018</label></td>
											<td><label name="applicationstatus"><a href="#" onclick="pendingfun()">Pending
											<script>
											function pendingfun() {
											var txt;
											if (confirm("Your request is pending check after some time")) {
											}
											document.getElementById("demo");
											}
											</script>
											</a></label></td>
										
                                        </tr> 
										<tr>
                                            <td style="padding-left:2%">3</td>
                                            <td><label name="applicationid">001174553</label></td>
                                            <td>
                                                <label name="applicationname">Migration Certificate</label>
                                            </td>
                                            <td><label name="applicationfees">Rs. 200/-</label> </td>
                                            <td><label name="applicationdate">10/9/2018</label></td>
											<td><label name="applicationstatus"><a href="#" onclick="myFunction()">Pending
											<script>
											function myFunction() {
											var txt;
											if (confirm("Your request is pending check after some time")) {
											}
											document.getElementById("demo");
											}
											</script>
											</a></label></td>
										
                                        </tr> 
										<tr>
                                            <td style="padding-left:2%">4</td>
                                            <td><label name="applicationid">001174554</label></td>
                                            <td>
                                                <label name="applicationname">Provisional certificate</label>
                                            </td>
                                            <td><label name="applicationfees">Rs. 100/-</label> </td>
                                            <td><label name="applicationdate">23/10/2018</label></td>
											<td><label name="applicationstatus"><a href="#" onclick="rejectedfun()">rejected
											<script>
											function rejectedfun() {
											var txt;
											if (confirm("Your request is rejected your status details are mailed on your registered email address")) {
											}
											document.getElementById("demo");
											}
											</script>
											</a></label></td>
										
                                        </tr>
										<tr>
                                            <td style="padding-left:2%">5</td>
                                            <td><label name="applicationid">001174555</label></td>
                                            <td>
                                                <label name="applicationname">Rank certificate</label>
                                            </td>
                                            <td><label name="applicationfees">Rs. 50/-</label> </td>
                                            <td><label name="applicationdate">19/11/2018</label></td>
											<td><label name="applicationstatus" onclick="approvedfun()"><a href="#">Approved
											<script>
											function approvedfun() {
											var txt;
											if (confirm("Your request is approved and service will be provided shortly")) {
											}
											document.getElementById("demo");
											}
											</script>
											</a></label></td>
										
                                        </tr>
										<tr>
                                            <td style="padding-left:2%">6</td>
                                            <td><label name="applicationid">001174555</label></td>
                                            <td>
                                                <label name="applicationname">Authentication of degree certificate</label>
                                            </td>
                                            <td><label name="applicationfees">Rs. 200/-</label> </td>
                                            <td><label name="applicationdate">20/09/2018</label></td>
											<td><label name="applicationstatus"><a href="#" onclick="approvedfun()">Approved
											<script>
											function approvedfun() {
											var txt;
											if (confirm("Your request is approved and service will be provided shortly")) {
											}
											document.getElementById("demo");
											}
											</script>
											</a></label></td>
										
                                        </tr>
                                        
                                    </tbody>
                                </table>


	
	</div>
	</body>
	</html>