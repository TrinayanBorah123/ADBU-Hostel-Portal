
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
          <a class="nav-link" href="" style="margin-right: 20px;"> HOME </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 20px;"> ABOUT US </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkavailability.php" style="margin-right: 20px;"> SERVICES </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 100px;"> CONTACT </a>
        </li>
		<li class="nav-item">
        <div class="btn-group dropleft">
		  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			LOGIN
		  </button>
		  <div class="dropdown-menu">
		      <a class="dropdown-item" href="studentlogin.php">STUDENT</a>
    		<a  class="dropdown-item" href="admin.php">WARDEN</a>
			<a  class="dropdown-item" href="securitylogin.php">SECURITY</a>
 		 </div>
		</div>
        </li>
      </ul>
    </div>
  </nav> 
  <center>
  <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 900px;height:560px;border-radius: 5px; ">
	<div style="margin-top:120px;margin-bottom:20px;">
	
	<div style="margin-top:0px;background-color:#6c757d;color:#ffffff">
	 <p id="header" style="text-align:center;font-size: 35px;font-family: Fabric;">Make Your Account</p>
	<hr/>
	</div >
	<div>
	
  	<form style="word-spacing: 50px;margin-top: 30px;margin-left:45px;" action="" method="POST">
		<div class="row">
		
		<input  style="margin-left: 10px;margin-top:20px;margin-right: 10px" type="text" name="stdid" placeholder="Student ID" required>
		 
		 
		  <input style="margin-left: 10px;margin-top: 20px" type="text" name="email" placeholder="Email" required>
  		  
		</div>
		<div class="row">
		 <input  style="margin-left: 10px;margin-top: 20px;margin-right: 10px" type="text" name="fullname" placeholder="Full Name" required>
  		  <input style="margin-left: 10px;margin-top: 20px" type="text" name="branch" placeholder="Branch" required>
		  </div>
		  <div class="row">
  		<input style="margin-left: 10px;margin-top: 20px;margin-right: 10px" type="number" name="sem" placeholder="Semester" required>
  		<input style="margin-left: 10px;margin-top: 20px" type="password" name="password" placeholder="password" required>
		</div>
		 <div class="row">
		<input style="margin-left: 10px;margin-top: 20px;margin-right: 10px" type="number" name="contact" placeholder="Contact" required>
		 <input style="margin-left: 10px;margin-top: 20px" type="text" name="pname" placeholder="Parent Name" required>
		</div>
		 <div class="row">
		<input style="margin-left: 10px;margin-top: 20px;margin-right: 10px" type="number" name="pcontact" placeholder="Parent Contact" required>
		 <input style="margin-left: 10px;margin-top: 20px" type="text" name="address" placeholder="Address" required>
		</div>
		<input style="margin-left: 10px;margin-top: 30px" target="ifregister" type="submit" name="submit" value="REGISTER" class="btn btn-secondary">
  	</form>
	
  
	
	</div>
	</center>
	 <footer id="footer" style="margin-top:40px;" class="card-body fixed-bottom bg-light">
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
<?php
	
	$con=new mysqli("localhost","root","");
	if($con){
	 // echo "Connected";
	}else{
	  //echo "Not Connected";
	}
	$db_selected=mysqli_select_db($con,'adbu');
	if(!$db_selected)
	{
		die("DB selection error!".mysqli_error());
	}
	
	 if($_SERVER["REQUEST_METHOD"]=="POST"){
	  $stdid=($_POST['stdid']);
	 $fullname=($_POST['fullname']);
	$branch=$_POST['branch'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$semester=$_POST['sem'];
	$contact=$_POST['contact'];
	$pcontact=$_POST['pcontact'];
	$pname=$_POST['pname'];
	$address=$_POST['address'];
	
	$emailvalid=filter_var($email, FILTER_VALIDATE_EMAIL);
	if($emailvalid== true){
		$rs=mysqli_query($con,"insert into student value('$stdid','$fullname','$email','$password','$branch','$semester','$contact','$pcontact','$pname','$address',NULL,NULL)");
 		if($rs)
 		{ // echo "<center><div><b><center>Successfully Registered</center></b></div></center>";
	 	  echo '<script>window.location.href = "studentlogin.php";</script>';
 	 	
		}
		else
		{   
		echo "<div style='margin-top:10px;margin-bottom:120px'><b><center>Give Proper Inputs</center><b></div>";
		}
	}else{
	echo "<div style='margin-top:10px;margin-bottom:120px'><b><center>Give Proper Inputs</center><b></div>";
	}
}
  
?>
 