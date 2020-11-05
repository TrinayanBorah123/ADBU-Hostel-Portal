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
	$Status="Approved";
	if(isset($_GET['id'])){
		$sql="update appointmentrequest set A_STATUS='".$Status."' where A_ID='".$_GET['id']."'";
		mysqli_query($con,$sql);
	}
	if(isset($_GET['cancelid'])){
	    $Status="Pending";
		$sql="update appointmentrequest set A_STATUS='".$Status."' where A_ID='".$_GET['cancelid']."'";
		mysqli_query($con,$sql);
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
          <a class="nav-link" href="wardendash.php" style="margin-right: 20px;"> HOME </a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="AttendenceSelectWarden.php" style="margin-right: 20px;"> ATTENDANCE </a>
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
 
	</body>
	
	<div style="margin-top:160px;">
	  <p style="text-align:center;font-size: 35px;font-family: Consolas;"><font style="margin-right:16px ">Appointment Requests</font><i class="fas fa-check"></i></p>
 	 </div>
	<hr/>
	<div  style="margin-top:60px;margin-left:20px;margin-right:20px;margin-bottom:40px">
  
  	<table class="table table-striped">
    <thead class="thead-dark">
   	<tr>
  		<th scope="col">Appointment ID</th>
		<th scope="col">Requested From</th>
  		<th scope="col">Date</th>
  		<th scope="col">Time</th>
  		<th scope="col">Status</th>
		<th scope="col">Place</th>
		<th scope="col">Action</th>
		<th scope="col">Cancellation</th>
 	 </tr>	
 	  </thead>
  	 <tbody>
	
      <?php
	  
	  $sql="SELECT * FROM appointmentrequest ";
	  $result = mysqli_query($con, $sql); 
      while($Cust=mysqli_fetch_assoc($result)){
      	echo '<tr >';
        echo '<th scope="row">'.$Cust['A_ID'].'</td>';
		 echo '<td>'.$Cust['sid_fk'].'</td>';
        echo '<td>'.$Cust['A_DATE'].'</td>';
		echo '<td>'.$Cust['a_time'].'</td>';
		echo '<td>'.$Cust['A_STATUS'].'</td>';
		echo '<td>'.$Cust['a_place'].'</td>';
		if($Cust['A_STATUS']=='Pending'){
			echo "<td ><a class=\"btn btn-primary\" style=\"cursor:pointer;text-decoration:none;\"  href=\"approveappointment.php?id={$Cust['A_ID']}\">Approve</a></td>";
			echo "<td ><p style=\"color:blue;text-decoration:none;\">No Action</p></td>";
		}else{
			echo "<td ><p style=\"color:blue;text-decoration:none;\">Successfully Approved</p></td>";
			echo "<td ><a class=\"btn btn-primary\" style=\"cursor:pointer;text-decoration:none;\"  href=\"approveappointment.php?cancelid={$Cust['A_ID']}\">Cancel</a></td>";
		}
		
       echo '</tr>';
      } 
    ?>   
   </tbody>
  </TABLE>      
  </div>
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
<script>
jQuery(document).ready(function($) {

      if (window.history && window.history.pushState) {

        $(window).on('popstate', function() {
          var hashLocation = location.hash;
          var hashSplit = hashLocation.split("#!/");
          var hashName = hashSplit[1];

          if (hashName !== '') {
            var hash = window.location.hash;
            if (hash === '') {
              
                window.location='wardendash.php';
                return false;
            }
          }
        });

        window.history.pushState('forward', null, './#forward');
      }

    });
</script>
