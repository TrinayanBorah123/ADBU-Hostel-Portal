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
          <a class="nav-link" href="AttendanceUploadWarddn.php" style="margin-right: 20px;"> ATTENDANCE </a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="eventsUpload.php" style="margin-right: 20px;">UPLOAD EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 100px;">CHECK COMPLAINS </a>
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
	 <p id="header" style="text-align:center;font-size: 35px;font-family: Consolas;">Contact Guardian</p>
	<hr/>
	<?php
	    if(isset($_GET['id'])){ 
			$sql="SELECT * FROM student where sid='".$_GET['id']."'";
			$result = mysqli_query($con, $sql);
			$Cust=mysqli_fetch_assoc($result);
		}
	?>
	 <p id="header" style="text-align:center;font-size: 24px;font-family: Consolas;">Student ID:<?php echo $Cust['sid']; ?></p>
	 <p id="header" style="text-align:center;font-size: 24px;font-family: Consolas;">Name:<?php echo $Cust['sname']; ?></p>
	 <p id="header" style="text-align:center;font-size: 24px;font-family: Consolas;">Parent Name:<?php echo $Cust['pname']; ?></p>
	 <p id="header" style="text-align:center;font-size: 24px;font-family: Consolas;">Parent Contact:<?php echo $Cust['pcontact']; ?></p>

	 <hr/>
	</div >
	<div>
	
	
  	<form style="word-spacing: 50px;margin-top: 30px" action="" method="POST">
		  <textarea style="margin-left: 10px;margin-top: 20px; padding-left: 10px;width: 400px;height:80px; box-sizing: border-box;border: 2px solid #000; border-radius: 4px;"  name="message" placeholder="Write Message" required></textarea>
		 
		<input style="margin-left: 10px;margin-top: 20px" target="ifregister" type="submit" name="submit" value="SEND MESSAGE">
  	</form>
	
  
	
	</div>
	</center>
	
	</body>
</html>