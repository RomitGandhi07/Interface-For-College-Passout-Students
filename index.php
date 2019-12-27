<?php include_once"header.php" ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - EDU Interface </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/full-width-pics.css" rel="stylesheet">

	
	<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	
	<style>

	

.container2
	{
		margin-top:4%;
		margin-left:2%;
		height:100%;
		width:60%;
		float:left;
		
	}
	
	
	.container3
	{
		
		margin-top:4%;
		margin-left:2%;
		height:100%;
		width:30%;
		float:left;
		font-size:10px;
	}

	
	.news_text
	{
		font-weight:bold;
		text-decoration:underline;
		font-size:28px;
		text-align:center;
	}
	
	.news
	{
		font-size:22px;
	}
	
	.requst_container
	{
		margin-left:22%;
		margin-top:3%;
	}

	.content{
	
	height:80px;
	width:300px;
	
	margin-left:20%;
	margin-top:10%;
	}
	
		
	.i1
	{
		height:70px;
		width:70px;
		float:left;
	}
	
	.text
	{
	margin-top:2%;
	color:black;
	margin-left:15%;
	}
	
	.apply_text
	{
		font-weight:bold;
		text-decoration:underline;
		font-size:28px;
		margin-left:30%;
	}
	
	
	.img1
	{
		float:left;
		border:1px solid;
	}

	.img2
	{
		
		border:1px solid;
	}
	
	table
	{
		cellspacing:10;
	}
	
	</style>
	
	
  </head>
<body>
<div class="container">
<div class="w3-content w3-display-container">
  <button class="w3-button w3-black w3-display-left" style="margin-top:20%;position:absolute" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" style="margin-top:20%;position:absolute;margin-left:80%" onclick="plusDivs(1)">&#10095;</button>
  <img class="mySlides" src="../Hackathon/images/img3.png" style="width:100%;height:70%">
  <img class="mySlides" src="../Hackathon/images/img2.jpg" style="width:100%;height:70%">
  <img class="mySlides" src="../Hackathon/images/img1.jpeg" style="width:100%;height:70%">
  <img class="mySlides" src="../Hackathon/images/img4.jpg" style="width:100%;height:70%">

  
  
</div>

</div>



<div class="container2">


<div class="apply_text" style="margin-left:35%">We Provide You</div>

<div class="row">
    
	
	<div class="content">
	
	<table>
		<tr>
				<td><a href="request.php"><img src="images/request.png" height="250" width="250"></a></td>
				<td><a href="information.php"><img src="images/information.png" height="250" width="250"></a></td>
		</tr>
		
		<tr>
				
				<td style="width:300px"><a href="profile.php"><img src="images/profile.png" height="250" width="250"></a></td>
				
				<td style="width:300px"><a href="contactus.php"><img src="images/contactus.png" height="250" width="250"></a></td>
		</tr>
	</table>
	
	</div>
	
  
  


</div>
</div>









<div class="container3">



	
<p class="news_text">Leatest News</p>
<marquee direction="up" height="75%" width="100%">
<ul type="square" class="news">
<li>The exam Dates for Diploma will be going to held between 5th May to 25th May.</li><br>
<li>The Dates for hall ticket will be going to held between 2nd May.</li><br>
<li>The Techfest will be going to held on 1st June and 2nd June.</li><br>
<li>The Techfest will be going to held on 1st June and 2nd June.</li><br>
<li>The Techfest will be going to held on 1st June and 2nd June.</li><br>
<li>The Techfest will be going to held on 1st June and 2nd June.</li><br>
<li>The Techfest will be going to held on 1st June and 2nd June.</li><br>
<li>The exam Dates for Diploma will be going to held between 5th May to 25th May.</li><br>
<li>The exam Dates for Diploma will be going to held between 5th May to 25th May.</li><br>
<li>The exam Dates for Diploma will be going to held between 5th May to 25th May.</li><br>
</ul>
</marquee>


</div>





<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>

<?php include_once"footer.php" ?>


