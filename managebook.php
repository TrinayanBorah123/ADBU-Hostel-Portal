<?php
	include("session.php");
	$con=new mysqli("localhost","root","");
	if($con){
	  echo "Connected";
	}else{
	  echo "Not Connected";
	}
	$db_selected=mysqli_select_db($con,'adbu');
	if(!$db_selected)
	{
		die("DB selection error!".mysqli_error());
	}
	$req_status="Approved";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
	$sql_room="select * from student where sid='".$_SESSION["login_user"]."'  and room_assign_status='".$req_status."'";
	$records0=mysqli_query($con,$sql_room);
	$count0 = mysqli_num_rows($records0);
	echo $count0;
	if($count0!=1){
		$status="Request";
		//$rs=mysqli_query($con,"update room set r_status='".$status."', sid_fk='".$_SESSION["login_user"]."' where r_no='".$_GET['id']."'");
		$rs=mysqli_query($con,"update student set room_assign_status='".$status."',room_id='".$_GET['id']."' where sid='".$_SESSION["login_user"]."'");
		//$rs=mysqli_query($con,"insert into student value('$stdid','$firstname','$lastname','$dept','$semester','$email','$password','$roomnumber','$roomtype','$contact','$status')");
	
 		if($rs)
 		{  
 	 		 echo "<div style='margin-top:70px;'><b><center>Succesfully Request has sent</center><b></div>";
		}
		else
		{
			echo "<center><div ><b><center>Unable to Send Request</center><b></div></center>";
		}
	  
	}else{
		echo "<div style='margin-top:70px;'><b><center>Already your request has been Approved(Contact Warden to cancel Approved request)</center><b></div>";
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
          <a class="nav-link" href="studentDash.php" style="margin-right: 20px;"> HOME </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="StatusPage.php" style="margin-right: 20px;">CHECK STATUS </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkavailabilitylogin.php" style="margin-right: 20px;"> SERVICES </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 100px;"> CONTACT </a>
        </li>
		<li class="nav-item">
        <div class="btn-group dropleft">
		   <button type="button" class="btn btn-secondary " aria-haspopup="true" aria-expanded="false">
			<font style="margin-left:6px"><a  href="logout.php" style="color:white;text-decoration:none  ">LOGOUT</font> <i class="fas fa-sign-out-alt"></i></a>
		  </button>
		</div>
        </li>
      </ul>
    </div>
  </nav>  
	
	<center>
  	 <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 40%;height:590px;border-radius: 5px; ">
	<div style="margin-top:130px;margin-botton:30px">
	
	<div style="margin-top:0px;">
	 <p id="header" style="text-align:center;font-size: 35px;font-family: Consolas;">Send Reservation Requst</p>
	<hr/>
	<?php 
		$sql = "SELECT * FROM student WHERE sid = '".$_SESSION["login_user"]."'";
    	$result = mysqli_query($con,$sql);
    	$row = mysqli_fetch_array($result);
		
	?>
	 <p id="header" style="text-align:center;font-size: 24px;font-family: Consolas;">STUDENT ID : <?php echo $row['sid']; ?></p>
	<p id="header" style="text-align:center;font-size: 24px;font-family: Consolas;">NAME : <?php echo $row['sname']; ?></p>
	 <p id="header" style="text-align:center;font-size: 24px;font-family: Consolas;">BRANCH : <?php echo $row['branch']; ?></p>
	<hr/>
	 <p id="header" style="text-align:center;font-size: 24px;font-family: Consolas;">ROOM NUMBER :<?php echo $_GET['id']; ?></p>
	</div >
	<div>
	<form style="word-spacing: 50px;margin-top: 20px" action="" method="POST">
		
		
		<?php
		 $id=$_GET['id'];
		 $sql1="SELECT * FROM `room` WHERE r_no = '".$id."'";
		 $records=mysqli_query($con,$sql1);
		 $Cust=mysqli_fetch_assoc($records);
		?>
		<select  style="margin-left: 10px;margin-top: 20px" id="rtype" name="rtype">
  			<option value="<?php echo $Cust['r_type']; ?>"> <?php echo $Cust['r_type']; ?></option>
		</select>
		<select style="margin-left: 10px;margin-top: 20px" id="floor" name="floor">
  			<option value="<?php echo $Cust['r_floor']; ?>"> <?php echo $Cust['r_floor']; ?></option>
		</select></br>
		<input style="margin-left: 10px;margin-top: 20px" target="ifregister" type="submit" name="submit" value="SEND REQUEST"></br>
  	</form>
	
  </center>
	
	</div>
	<footer id="footer" style="margin-top:40px;" class="card-body bg-light" >
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-6 f-left" style="color:#000000 ">
        <p>© Copyright 2019 Assam DonBosco University Hostel Portal</p>
      </div>
      <div class="col-md-6 f-right">
        <i class="icons fb fab fa-facebook-f"></i>
        <i class="icons insta fab fa-instagram"></i>
        <i class="icons twitter fab fa-twitter"></i>
        <i class="icons you fab fa-youtube"></i>

      </div>
    </div>
    </div>
  </footer>
</html>
