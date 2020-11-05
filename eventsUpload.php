<?php
	include("warden_session.php");
	$con=new mysqli("localhost","root","");
	if($con){
	 // echo "Connected";
	}else{
	 // echo "Not Connected";
	}
	$db_selected=mysqli_select_db($con,'adbu');
	if(!$db_selected)
	{
		die("DB selection error!".mysqli_error());
	}
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	 $image = $_FILES['image']['name'];
	  $head=($_POST['ehead']);
	 $detail=($_POST['edetails']);
	$sdate=($_POST['sdate']);
	$edate=$_POST['edate'];
	$target = "hostel_events/".basename($image);
	$rs=mysqli_query($con,"insert into events value('$head','$detail','$sdate','$edate','$image')");
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
	}
?>
<style>
input[type=date]:required:invalid::-webkit-datetime-edit {
    color: transparent;
}
input[type="date"]:not(:valid):before {
   content: attr(placeholder);
   // style it like it real placeholder
}


</style>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ADBU hostel portal</title>
  <!--<link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="formdesign.css"> !-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg  navbar-light bg-light">
    <a class="navbar-brand h1" href="">ADBU HOSTEL PORTAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item">
          <a class="nav-link" href="wardendash.php" style="margin-right: 20px;"> HOME </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AttendanceUploadWarden.php" style="margin-right: 20px;"> ATTENDANCE </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="eventsUpload.php" style="margin-right: 20px;">UPLOAD EVENTS </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="complains.php" style="margin-right: 100px;" >CHECK COMPLAINS </a> 
        </li>
		
		  <button type="button" class="btn btn-secondary " >
			<font style="margin-left:6px"><a  href="logoutwarden.php" style="color:white  ">LOGOUT</font> <i class="fas fa-sign-out-alt"></i></a>
		  </button>
      </ul>
    </div>
  </nav> 
	<center>
  <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 40%;height:600px;border-radius: 5px; ">
	<div style="margin-top:160px;margin-bottom:20px">
	
	<div style="margin-top:0px;">
	 <p id="header" style="text-align:center;font-size: 35px;font-family: Consolas;">Event Upload</p>
	<hr/>
	</div >
	<div>
	
	
  	<form style="word-spacing: 0px;margin-top: 30px;" action="" method="POST" enctype="multipart/form-data" >
		<input style="margin-left: 10px;margin-top: 20px;width:360px;" type="text" name="ehead" placeholder="Event Heading" required class="form-control">
		 <textarea style="margin-left: 10px;margin-top: 20px;width:360px "  name="edetails" placeholder="Event Details" required class="form-control"></textarea>
		 <input type="date" style="margin-left: 10px;margin-top: 20px;width:360px" type="text" name="sdate" placeholder="Event Start date" required required class="form-control">
		 <input type="date" style="margin-left: 10px;margin-top: 20px;width:360px" type="text" name="edate" placeholder="Event End date" required required class="form-control">
		 
		 <input  type="hidden" name="size" value="1000000" class="form-control">
		
  		<div  style="margin-left: 130px;margin-top: 30px" class="row">
		
  	  	<b>Select an Events Gallery:</b>
		<input style="margin-left: 10px;margin-top: 10px;width:360px" type="file" name="image" class="form-control">
  		</div>
		<button style="margin-left: 10px;margin-top: 20px;width:360px;height:40px"  type="submit" name="submit" value="UPLOAD" class="btn btn-primary">Upload</button>
  	</form>
	
  
	
	</div>
	</center>
	
	
	</body>
	 <footer id="footer" style="margin-top:40px;" class="card-body  bg-light">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-6 f-left" style="color:#000000 ">
        <p>© Copyright 2019 Assam DonBosco University Hostel Portal</p>
      </div>
      <div class="col-md-6 f-right">
        <a href="https://www.facebook.com"><i class="icons fb fab fa-facebook-f"></i></a>
        <i class="icons insta fab fa-instagram"></i>
        <i class="icons twitter fab fa-twitter"></i>
        <i class="icons you fab fa-youtube"></i>

      </div>
    </div>
    </div>
  </footer>
</html>