<?php
	include("securitysession.php");
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
	if(isset($_POST['sdate'])){
		$query = "SELECT * FROM reg_book where log_date='".$_POST['sdate']."'";
	}else{
		$query = "SELECT * FROM reg_book";
	}
	$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ADBU hostel portal</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 
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
		<button  class="btn btn-primary"  style="width:120px;margin-left: 10px" type="submit" id="myBtn"><i class="fas fa-search"></i> Search</button>
				<!-- Large modal -->
	</form>
        <li class="nav-item" style="margin-left:10px ">
          <a class="nav-link" href="securityDash.php" style="margin-right: 20px;"> HOME </a>
        </li>
      <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 20px;">VIEW LOGBOOK </a>
        </li>
         <!-- <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 20px;"> SERVICES </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 100px;"> COMPLAINS/FEEDBACK </a>
        </li> !-->
		
		  <button type="button" class="btn btn-secondary " aria-haspopup="true" aria-expanded="false">
			<font style="margin-left:20px"><a  href="logoutsecurity.php" style="color:white  ">LOGOUT</font> <i class="fas fa-sign-out-alt"></i></a>
		  </button>
      </ul>
    </div>
  </nav>
  
    
	
	
  <div style="margin-top:180px;">
 
	</div>
	 <p style="text-align:center;font-size: 35px;font-family: Consolas;"><font style="margin-right:16px ">Students daily records</font><i class="fas fa-check"></i></p>
	<hr/>
	

	</div >
  <div  style="margin-top:60px;margin-left:20px;margin-right:20px;margin-bottom:40px">
  
  	<table class="table table-striped">
    <thead class="thead-dark">
   	<tr>
	    <th scope="col">Student ID</th>
  		
  		<th scope="col">Date</th>
  		<th scope="col">Outtime</th>
		<th scope="col">Intime</th>
 	 </tr>	
 	  </thead>
  	 <tbody>
	
    <?php  
     
      while($Cust=mysqli_fetch_assoc($result)){
      echo '<tr >';
        echo '<th scope="row">'.$Cust['sid_fk'].'</td>';
		echo '<td>'.$Cust['log_date'].'</td>';
        echo '<td>'.$Cust['in_time'].'</td>';
        echo '<td>'.$Cust['out_time'].'</td>';
		
      echo '</tr>';
      }
     
   
  ?>   
   </tbody>
  </TABLE>      
  </div>
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
