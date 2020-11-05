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
	$user=$_SESSION['login_user'];
	$sql="SELECT * FROM `attendance` WHERE sid_fk = '".$user."'";
   	 $records=mysqli_query($con,$sql);
     $count = mysqli_num_rows($records); 
  
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ADBU hostel portal</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jqery.min.js"></script>
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
    <a class="navbar-brand h1" href=""><img src="images/logo.png" width="70" height="70" alt="">ADBU HOSTEL PORTAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto">
	    <form action="" method="POST">
       <div class="row">
  		<input  style="margin-left: 40px;width:340px;" type="date" name="sdate"  id="sdate" placeholder="Date"  class="form-control" required >
		<button  class="btn btn-primary"  style="width:120px;margin-left: 10px;margin-right: 0px" type="submit" id="myBtn"><i class="fas fa-search"></i> Search</button>
				<!-- Large modal -->
		</form>
        <li class="nav-item">
          <a class="nav-link" href="studentDash.php" style="margin-right: 20px;"> HOME </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="StatusPage.php" style="margin-right: 20px;"> CHECK STATUS </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkavailabilitylogin.php" style="margin-right: 20px;"> SERVICES </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 100px;"> COMPLAINS/FEEDBACK </a>
        </li>
		<li class="nav-item">
        <button type="button" class="btn btn-secondary " aria-haspopup="true" aria-expanded="false">
			<font style="margin-left:6px"><a  href="logout.php" style="color:white  ">LOGOUT</font> <i class="fas fa-sign-out-alt"></i></a>
		  </button>
        </li>
      </ul>
    </div>
  </nav>  
  <div style="margin-top:160px;">
	 <p style="text-align:center;font-size: 35px;font-family: Consolas;"><font style="margin-right:16px ">Check Your Attendance</font><i class="fas fa-check"></i></p>
	<hr/>
	</div >
	<?php
	
	if($count>0){
	?>
  <div  style="margin-top:60px;margin-left:20px;margin-right:20px;margin-bottom:40px">
  
  	<table class="table table-striped">
    <thead class="thead-dark">
   	<tr>
	    <th scope="col">Student ID</th>
  		
  		<th scope="col">Date</th>
  		<th scope="col">Status</th>
		
 	 </tr>	
 	  </thead>
  	 <tbody>
	
    <?php  
     
      while($Cust=mysqli_fetch_assoc($records)){
      echo '<tr >';
        echo '<th scope="row">'.$Cust['sid_fk'].'</td>';
		//echo '<td>'.$Cust['r_no'].'</td>';
        echo '<td>'.$Cust['att_date'].'</td>';
        echo '<td>'.$Cust['status'].'</td>';
		
      echo '</tr>';
      }
     
   
  ?>   
   </tbody>
  </TABLE>      
  </div><?php } else{ ?>
  <p style="text-align:center;font-size: 35px;font-family: Consolas;"><font style="margin-right:16px ">No Attendance Available</font></p>
 <?php }?> 
</body>
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
