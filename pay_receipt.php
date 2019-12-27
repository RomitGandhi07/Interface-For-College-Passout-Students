<?php	if(!isset($_SESSION['username'])){session_start();}
	$con = mysqli_connect("localhost","root","","finaldatabae");
	if($con)
	{
		//$mail=mysqli_query($con,"select user_id from application where user_id='".$_SESSION['username']."'");
		
		$all = mysqli_query($con,"Select education_details.*,user_details.*,user_address.*,application.*,request_type.* from user_details INNER JOIN education_details on education_details.user_id=user_details.user_id INNER join user_address on user_details.user_id=user_address.user_id INNER JOIN application on user_details.user_id=application.user_id INNER JOIN request_type on application.request_type_id=request_type.request_type_id");
		$row=0;
		while($row=mysqli_fetch_array($all))
		{
			$appid=$row['application_id'];
			$cat=$row['request_type'];
			$enroll=$row['enrollment_no'];
			$course=$row['course'];
			$name=$row['fname'];
			//$sem=$row['']; 
			$sem=6;
			$addb=$row['block_no'];
			$addc=$row['colony'];
			$addl=$row['land_mark'];
			$addc=$row['city'];
			$adds=$row['state'];
			$addp=$row['pincode'];
			$mob=$row['mobile_no'];
			$amt=$row['fees'];
			$add=$addb."-".$addc.",".$adds.",".$addl.".".$addc." ".$addp." ".$adds;
		}
	
	}
	
?>

<html>
<body>


<div class="top_content" style="margin:0% 20% 0% 20%;">


	<div class="receipt_table" style="margin:4% 20% 0% 20%;">
	
	
	<table border="2" cellpadding="7%" width="100%">
	<tr>
	<td colspan="2">
	<img src="images/logo.png" height=15% width=20%><p style="margin:-15% 0% 0% 25%;"> EDU Interface <br />Address: 5/A Plasma Colony, Satellite, Pin:380015 </p>
	<p style="margin:-3% 0% 0% 70%"> Date: 26/3/2018 </p>
	</td>
	</tr>


	<tr>
	<td colspan="2">
	<center><h3>Application Receipt</h3></center>
	</td>
	</tr>
		<tr>
			<td width="40%">Application id :</td>
			<td width="60%"><label name=""><?php echo $appid; ?></label></td>
		</tr>
		<tr>
			<td>Category :</td>
			<td><label name=""><?php echo $cat; ?></label></td>
		</tr>
		<tr>
			<td>Enrollment No :</td>
			<td><label name=""><?php echo $enroll; ?></label></td>
		</tr>
		<tr>
			<td>Course :</td>
			<td><label name=""><?php echo $course; ?></label></td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><label name=""><?php echo $name; ?></label></td>
		</tr>
		<tr>
			<td>Semester :</td>
			<td><label name=""><?php echo $sem; ?></label></td>
		</tr>
		<tr>
			<td>Address :</td>
			<td><label name=""><?php echo $add; ?></label></td>
		</tr>
		<tr>
			<td>Mobile no :</td>
			<td><label name=""><?php echo $mob; ?></label></td>
		</tr>
		<tr>
			<td>Amount :</td>
			<td><label name=""><?php echo $amt; ?></label></td>
		</tr>
	</table>
	</div>
</body>
</html>