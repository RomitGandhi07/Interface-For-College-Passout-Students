<?php include_once"header_loggout.php" ?>
<?php
session_start();

//$con = mysqli_connect("localhost","root","","finaldatabae");
require_once('dbconnection.php');

//Code for Registration 
//if($con)
//{
if(isset($_POST['fetch']) && isset($_POST['enrollmentno']))
{
	
	$enrol_no=$_POST['enrollmentno'];
	$query=mysqli_query($con,"SELECT * FROM student_details where enrollment_no='".$enrol_no."'");
	//echo "SELECT * FROM student_details where enrollment_no='".$enrol_no."'";
	$row[]=0;
	while($raw=mysqli_fetch_array($query))
	{
		//echo "andar 6u";
		//$enrollment_no=$row[0];
		$fname=$raw[1];
		$lname=$raw[2];
		$dob=$raw[3];
		$gender=$raw[4];
		$mobno=$raw[5];
		$emailid=$raw[6];
		if($gender==0)
	{
		$male=true;
		//echo "true";
		$female=false;
	}
	else
	{
		$female=true;
		//echo "false";
		$male=false;
	}
	} 
}
else
{
		$enrol_no="";
		$fname="First Name";
		$lname="Last Name";
		$dob="dd/mm/yyyy";
		$male=false;
		$female=false;
		$mobno="Mobile No";
		$emailid="Email Id";
		
		
}
if(isset($_POST['SignUp']))
{
	
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$email=$_POST['emailid'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$mobile=$_POST['mobileno'];
	$enrol_no=$_POST['enrollmentno'];
	//$adhar_no=$_POST[''];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$flat=$_POST['addline1'];
	$colony=$_POST['addline2'];
	$landmark=$_POST['landmark'];
	$pincode=$_POST['pincode'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	
	if($gender=='male')
	{
		$gen='0';
	}
	else
	{
		$gen='1'; 
	}
	if($password==$cpassword)
	{
		$msg=mysqli_query($con, "insert into user_details(user_id,fname,lname,email_id,password,mobile_no,d_o_b,gender,enrollment_no) values('".$email."','".$fname."','".$lname."','".$email."','".$password."',".$mobile.",".$dob.",".$gen.",".$enrol_no.")");
	/*echo "insert into user_details(user_id,fname,lname,email_id,password,mobile_no,d_o_b,gender,enrollment_no) values('".$email."','".$fname."','".$lname."','".$email."','".$password."',".$mobile.",".$dob.",".$gen.",".$enrol_no.")";*/
		
		$add=mysqli_query($con,"INSERT INTO `user_address` (`address_id`, `user_id`, `block_no`, `colony`, `land_mark`, `city`, `state`, `pincode`) VALUES (NULL, '".$email."', '".$flat."', '".$colony."', '".$landmark."', '".$city."', '".$state."', '".$pincode."');");
//echo "INSERT INTO `user_address` (`address_id`, `user_id`, `block_no`, `colony`, `land_mark`, `city`, `state`, `pincode`) VALUES (NULL, '".$email."', '".$flat."', '".$colony."', '".$landmark."', '".$city."', '".$state."', '".$pincode."'); ";

		$edu = mysqli_query($con,"INSERT INTO `finaldatabae`.`education_details` (`user_id`, `enrollment_no`, `university_name`, `college_name`, `course`, `dept_name`, `starting_year`, `passing_year`) VALUES ('".$email."', '".$enrol_no."', 'Gujarat Technological University', 'GP Ahmedabad', 'diploma', 'ce', '2013', '2016')");
		if($msg && $add)
		{
			$sendmail=mailsender($email,$con);
			header("location:email_verification.php");}
		
	
		else{echo "nai thayu";}
	}
	else
	{
		echo "else part";
	}
	
}
if (isset($email))
{
$_SESSION['username']=$email;
}
function mailsender($email,$con)
{
	function generatePIN($digits = 4)
	{
    $i = 0; //counter
    $pin = ""; //our default pin is blank.
    while($i < $digits)
	{
        //generate a random number between 0 and 9.
        $pin .= mt_rand(0, 9);
        $i++;
    }
    return $pin;
	}
	$pin = generatePIN();
	require_once 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	
// SMTP configuration
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';                      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'alpeshrthakergp@gmail.com';                    // SMTP username
$mail->Password = 'ABcd!@34';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;   


$mail->setFrom('alpeshrthakergp@gmail.com', 'Edu Interface');
$mail->addReplyTo('alpeshrthakergp@gmail.com', 'Edu Interface');

// Add a recipient
$mail->addAddress("$email");


// Email subject
$mail->Subject = 'Email Verification';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = "$pin";
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else{
    //echo 'Message has been sent';
	mysqli_query($con,"delete from otp where '".$email."'=email");
	mysqli_query($con,"insert into otp values('".$email."',".$pin.")");
}

}
?>
<html>
	<head>
	
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">


<style>
.register
{
	margin-top:7%;
}


.btn-signup
{
margin-left:55%;
margin-top:5%;	
}

.login_text
{
	margin-top:2%;
	margin-left:47%;
}

.rb
{
	margin-top:10%;
}

.register
{
	margin-left:25%;
}

.register_text
{
	margin-left:25%;
}
</style>
</head>
<body>

<div class="container">
<div class="register">
<form id="reg" name="reg" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()">
<h2 class="register_text">Registration</h2>
	<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group">
                        <legend for="enrollmentno" class="col-lg-12 control-label">Enrollment No</legend>
						<input type="text" name="enrollmentno"  class="form-control input-lg" placeholder="Enter Enrollment No" maxlength="12" tabindex="1" value="<?php echo $enrol_no;?>" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-1" style="margin-top:5%">
					<div class="form-group">
					<input type="submit"   class="btn btn-success btn-signup" value="Get Data From University" name="fetch" tabindex="2" readonly formnovalidate>
						
					</div>
				</div>
			</div>

	<br/>
	<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group">
                        <legend for="firstname" class="col-lg-12 control-label">First Name</legend>
						<input type="text" name="firstname" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="3" readonly value="<?php echo $fname;?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group">
						<legend for="lastame" class="col-lg-12 control-label">Last Name</legend>
						<input type="text" name="lastname" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="4" readonly value="<?php echo $lname;?>">
					</div>
				</div>
			</div>
		
		


		<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group">
                        <legend for="dob" class="col-lg-12 control-label">Date Of Birth</legend>
						<input type="date" name="dob"  class="form-control input-lg" placeholder="First Name" tabindex="5" readonly value="<?php echo $dob?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group">
						<legend for="gender" class="col-lg-12 control-label"><center>Gender</center></legend>
						<center><label class="radio-inline">
						<input type="radio" name="gender" class="rb" tabindex="6" readonly value="<?php echo $male; ?>" checked=checked>Male 
						</label>
						&nbsp; &nbsp; &nbsp; 
						<label class="radio-inline">
						<input type="radio" name="gender" tabindex="7" class="rb" readonly value="<?php echo $female; ?>">Female
						</label>
						</center>
						</div>
				</div>
			</div>
			
			
			
			
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group">
                        <legend for="mobileno" class="col-lg-12 control-label">Mobile No</legend>
						<input type="text" name="mobileno"  class="form-control input-lg" placeholder="Mobile No" tabindex="8" maxlength="12" required value="<?php echo $mobno;?>" pattern="[0-9]{10}">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group">
						<legend for="emailid" class="col-lg-12 control-label">Email Id</legend>
						<input type="email" name="emailid" id="last_name" class="form-control input-lg" placeholder="Email Id" tabindex="9" required value="<?php echo $emailid;?>">
					</div>
				</div>
			</div>

			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group">
                        <legend for="password" class="col-lg-12 control-label">Password</legend>
						<input type="password" name="password" id="first_name" class="form-control input-lg" placeholder="Password" tabindex="10" required min=8 max=25>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group">
						<legend for="cpassword" class="col-lg-12 control-label">Confirm Password</legend>
						<input type="password" name="cpassword" id="last_name" class="form-control input-lg" placeholder="Confirm Password" tabindex="11" required>
					</div>
				</div>
			</div>
			
			
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
					<div class="form-group">
                        <legend for="addline1" class="col-lg-12 control-label">Address</legend>
						<input type="text" name="addline1" id="first_name" class="form-control input-lg" placeholder="Flat No.,Building Name" tabindex="12" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:5%">
					<div class="form-group">
					
						<input type="text" name="addline2" id="flatno" class="form-control input-lg" placeholder="Street,Colony" tabindex="13" required>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:1%">
					<div class="form-group">
                      
						<input type="text" name="landmark" id="street" class="form-control input-lg" placeholder="Landmark" tabindex="14" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:1%">
					<div class="form-group">
					
						<input type="text" maxlength="6" name="pincode" id="last_name" class="form-control input-lg" placeholder="Pincode" tabindex="15" required pattern="[0-9]{6}">
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:1%">
					<div class="form-group">
                      
						<input type="text" name="city" id="first_name" class="form-control input-lg" placeholder="City" tabindex="16" required>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top:1%">
					<div class="form-group">
					
						<input type="text" name="state" id="last_name" class="form-control input-lg" placeholder="State" tabindex="17" required>
					</div>
				</div>
			</div>
			
			
			
			
			<div class="col-sm-6 controls">
                
				<input type="submit" class="btn btn-success btn-signup" value="Sign Up" tabindex="18" name="SignUp"/>
				</div>
		  
				
	
	
				<div class="col-sm-12 controls">
                
				<p class="login_text">Already A User?<a href="login.php">Login</a></p>
		  
				</div>	
</div>
</form>
</div>
</div>
<script>
function validateForm() {
    var x = document.forms["reg"]["password"].value;
	var y = document.forms["reg"]["cpassword"].value;
    if (x != y) {
		document.forms["reg"]["password"].value="";
		document.forms["reg"]["cpassword"].value="";
		document.forms["reg"]["password"].focus();
        alert("password and cpassword does not matched");
		
        return false;
    }
}
</script>


</body>
</html>