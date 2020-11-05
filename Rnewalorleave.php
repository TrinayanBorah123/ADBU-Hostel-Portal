<?php
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
	  if($_POST['ftype']=="leaveform"){
	   echo '<script>window.location.href = "leaveform.php";</script>';
	  }else if($_POST['ftype']=="Renewalform"){
	  echo '<script>window.location.href = "renewform.php";</script>';
	  }
	}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ADBU hostel portal</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="formdesign.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg  navbar-light bg-light">
    <a class="navbar-brand h1" href=""><img src="images/logo.png" width="70" height="70" alt="">ADBU HOSTEL PORTAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="studentDash.php" style="margin-right: 20px;"> HOME </a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="StatusPage.php" style="margin-right: 20px;">CHECK STATUS </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkavailabilitylogin.php" style="margin-right: 20px;"> SERVICES </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 100px;"> COMPLAINS/FEEDBACK </a>
        </li>
		<li class="nav-item">
        <div class="btn-group dropleft">
		   <button type="button" class="btn btn-secondary " aria-haspopup="true" aria-expanded="false">
			<font style="margin-left:6px"><a  href="logout.php" style="color:white ;text-decoration:none ">LOGOUT</font> <i class="fas fa-sign-out-alt"></i></a>
		  </button>
		 
		 
		</div>
        </li>
      </ul>
    </div>
  </nav>
  <div style="margin-top:80px;">
	 <p style="text-align:center;font-size: 35px;font-family: Consolas;"><font style="margin-right:16px ">Get Your Renewal & Leave Form</font><i class="fas fa-check"></i></p>
	
	</div >
	<div>
	<center>
  	<form style="word-spacing: 50px;margin-top: 120px" action="" method="POST">
		
		<select  style="margin-left: 10px;margin-top:20px" id="ftype" name="ftype">
  			<option value="null"> - - Select Your form type - -</option>
			<option value="Renewalform">Renewal Form</option>
			<option value="leaveform">Leave Form</option>
		</select>
		<input  style="margin-left: 10px;margin-top:40px" type="submit" name="submit" value="NEXT">
    </form> 
	</center>
	
	</div>
   	
	</div>
</html>