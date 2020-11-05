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
	
	 
   	 	
		$type=$_POST['rtype'];
		$floor=$_POST['floor'];
		$status="Free";
		  $sql="SELECT * FROM `room` WHERE r_type = '".$type."' and r_floor='".$floor."' and r_status='".$status."'";
   	   // $sql="SELECT * FROM student WHERE type =$type and floor=$floor and Status=$status";
   	    $records=mysqli_query($con,$sql);
        $count = mysqli_num_rows($records);
       
       
		
	  
   }
  
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ADBU hostel portal</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jqery.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="formdesign.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body style="background-image: linear-gradient(white, lightblue, white); ">
  <nav class="navbar fixed-top navbar-expand-lg  navbar-light bg-light">
    <a class="navbar-brand h1" href=""><img src="images/logo.png" width="70" height="70" alt="">ADBU HOSTEL PORTAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="hp.html" style="margin-right: 20px;"> HOME </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hp.html" style="margin-right: 20px;"> ABOUT US </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkavailability.php" style="margin-right: 20px;"> SERVICES </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hp.html" style="margin-right: 100px;"> CONTACT </a>
        </li>
		<li class="nav-item">
       <div class="btn-group dropleft">
		  <button id="login" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
	<div style="margin-top:160px;" style="background:green ">
	 <p style="text-align:center;font-size: 35px;font-family: Consolas;"><font style="margin-right:16px; ">Available Rooms</font><i class="fas fa-check"></i></p>
	<hr/>
	</div >
	<?php 
	if($count>0){
	?>
	<div  style="margin-top:60px;margin-left:20px;margin-right:20px;margin-bottom:180px">
  
  	<table class="table table-striped">
    <thead class="thead-dark">
   	<tr>
  		<th scope="col">RoomNumber</th>
  		<th scope="col">RoomType</th>
  		<th scope="col">Floor</th>
  		<th scope="col">Status</th>
		<th scope="col">Go To</th>
 	 </tr>	
 	  </thead>
  	 <tbody>
	
    <?php  
     
      while($Cust=mysqli_fetch_assoc($records)){
      echo '<tr >';
        echo '<th scope="row">'.$Cust['r_no'].'</td>';
        echo '<td>'.$Cust['r_type'].'</td>';
        echo '<td>'.$Cust['r_floor'].'</td>';
        echo '<td>'.$Cust['r_status'].'</td>';
		echo "<td ><a style=\"cursor:pointer;text-decoration:none;\"  href=\"managebook.php?id={$Cust['r_no']}\">Click Here</a></td>";
      echo '</tr>';
      }
     
   
  ?>   
   </tbody>
  </TABLE>      
  </div>
   <?php
   }else{
   ?>
    <p style="text-align:center;font-size: 24px;font-family: Consolas;margin-top:30px;margin-bottom:80px">No rooms are available</p>
  <?php 
  }
  ?>
  
  <section id="contact">
    <div class="container-fluid">
      <h1 class="contact-title">Contact</h1>
      <div class="divider">
      </div>

      <div class="row contact-box">
        <div class="col-lg-3">
          <h5 class="contact-details">Azara Campus</h5>
          <hr class="h-line">
          <p class="contact-desp">Airport Road,Azara,</p>
          <p class="contact-desp">Guwahati-781 017</p>
          <p class="contact-desp">Assam- INDIA</p>
          <p class="contact-desp">Phone:09435 545 754(03612 139 291)</p>
        </div>
        <div class="col-lg-3">
          <h5 class="contact-details">Tapesia Campus</h5>
            <hr class="h-line">
            <p class="contact-desp">Tapesia Gardens, Kamarkuchi,</p>
            <p class="contact-desp">Sonapur-782 402</p>
            <p class="contact-desp">Assam- INDIA</p>
            <p class="contact-desp">Phone:09476 690 950(08011 403 982)</p>
        </div>
        <div class="col-lg-3">
          <h5 class="contact-details">Kharguli Campus</h5>
            <hr class="h-line">
            <p class="contact-desp">Joypur, Kharguli,</p>
            <p class="contact-desp">Guwahati-781 004</p>
            <p class="contact-desp">Assam- INDIA</p>
            <p class="contact-desp">Phone:09101 340 457</p>
        </div>
        <div class="col-lg-3">
          <h5 class="contact-details">HR Queries</h5>
            <hr class="h-line">
            <p class="contact-desp">HR Queries - </p>
            <p class="contact-desp">Distance Education Queries - </p>
        </div>

      </div>


    </div>



  </section>
  <!-- Footer -->

  <footer id="footer">
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-6 f-left">
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



