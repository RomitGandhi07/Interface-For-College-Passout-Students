<html>
<body>
		<form method="POST" enctype="multipart/form-data" >
		
		Select image to upload:
        <input type="file" name="image" />
		
		Store image to database
		<input type="submit" name="submit_to_databse" value="DataBase"/>
		</form>
<?php
if(isset($_POST["submit_to_databse"])){
  
	if($_FILES["image"]["name"])
    {
        echo "Name Come";
		$check = $_FILES['image']['size'];
 echo $check;
		//$fileExtension = $_FILES['image']['name'];
		$imageFileType = strtoupper(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));
		if($check !== false)
		{
      
			$image = $_FILES['image']['tmp_name'];          
			$imgContent = addslashes(file_get_contents($image)); 
if (isset($imgContent))
{
	echo "yes";
}else
{
	echo "No";
}
	

 
			if($imageFileType != "PDF" ) 
			{
				echo " You have uploaded <b> " .$imageFileType ."  </b>file.</br> Sorry, only PDF files are allowed!!";
			}
			else
			{
				$dbHost = 'localhost';       
				$dbUsername = 'root';
				$dbPassword = '';
				$dbName     = 'db1';
				$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        
				// Check connection
				if (!$conn) 
				{
					die("Connection failed: " . mysqli_connect_error());
				}
    
				$dataTime = date("Y-m-d H:i:s");
				$sql = "INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')"; 
				//echo $sql;
				$result = mysqli_query($conn, $sql); 
				if($result)
				{
					echo "File uploaded successfully.";
				}
				else
				{
					echo "File upload failed, please try again.";
				}      
			}
		}
		else
		{
			echo " You have uploaded <b> " .$imageFileType ."  </b>file.</br> Sorry, only PDF files are allowed!!";
		}
	}
}
?>
</body>
</html>