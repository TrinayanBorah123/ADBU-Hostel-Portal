<?php
	session_start();
    ob_get_contents();
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
		$sql = "SELECT * FROM student WHERE sid = '".$_SESSION["login_user"]."'";
    	$result = mysqli_query($con,$sql);
    	$row = mysqli_fetch_array($result);
		$sdate=$_POST['sdate'];
		$edate=$_POST['edate'];
		$reason=$_POST['reason'];
		$place=$_POST['place'];
		$sid=$row['sid'];
		$status="Pending";
		$rs=mysqli_query($con,"insert into leave_t value('$sdate','$edate','$place','$reason','$status','$sid')");
	  	if($rs)
 		{   
 	  		
			echo '<script>window.location.href = "leaveformSent.php";</script>';
			
		}
		else
		{
		echo "<center><div ><b><center>Unable to Register</center><b></div></center>";
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
<style>
input[type=date]:required:invalid::-webkit-datetime-edit {
    color: transparent;
}
input[type="date"]:not(:valid):before {
   content: attr(placeholder);
   // style it like it real placeholder
}


</style>
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
  
	<center>
	 <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 40%;height:600px;border-radius: 5px; ">
	<div style="margin-top:120px;">
	 <p id="header" style="text-align:center;font-size: 35px;font-family: Consolas;">Leave Request</p>
	<hr/>
	<?php 
		$sql = "SELECT * FROM student WHERE sid = '".$_SESSION["login_user"]."'";
    	$result = mysqli_query($con,$sql);
    	$row = mysqli_fetch_array($result);
	?>
	<p id="header" style="text-align:center;font-size: 24px;font-family: Consolas;">STUDENT ID : <?php echo $row['sid']?></p>
	<p id="header" style="text-align:center;font-size: 24px;font-family: Consolas;">NAME : <?php echo $row['sname']?></p>
	<hr/>
	</div >
	<div>
  	<form style="word-spacing: 50px;margin-top: 20px" action="" method="POST">
		  <input  style="margin-left: 10px;margin-top:20px" type="text" id="reason" name="reason" placeholder="Reason of Leave" required></br>
		 <input  style="margin-left: 10px;margin-top:20px;border: 2px solid #000000" type="date" id="sdate" name="sdate" placeholder="Start Date" required>
		 <input  style="margin-left: 10px;margin-top:20px;border: 2px solid #000000" type="date" id="edate" name="edate" placeholder="End Date" required>
		 <input  style="margin-left: 10px;margin-top:20px" type="text" id="place" name="place" placeholder="Place to Stay" required></br>
		
		<input  style="margin-left: 10px;margin-top:20px" type="submit" name="submit" value="SUBMIT">
    </form> 
	
	</center>
	
	</div>
   	
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
