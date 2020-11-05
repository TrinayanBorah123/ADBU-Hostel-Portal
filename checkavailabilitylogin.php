
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
        
		  <button type="button" class="btn btn-secondary " aria-haspopup="true" aria-expanded="false">
			<font style="margin-left:6px"><a  href="logout.php" style="color:white  ">LOGOUT</font> <i class="fas fa-sign-out-alt"></i></a>
		  </button>
		 
		
        </li>
      </ul>
    </div>
  </nav>
  	<center>
  <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 40%;height:490px;border-radius: 5px; ">
	<div style="margin-top:160px;">
	 <p style="text-align:center;font-size: 35px;font-family: Consolas;"><font style="margin-right:16px ">Check Availability</font><i class="fas fa-check"></i></p>
	<hr/>
	</div >
	
  	<form style="word-spacing: 50px;margin-top: 80px" action="showAvailableroom.php" method="POST">
		<!-- <input  style="margin-left: 10px;margin-top: 20px" type="text" id="stdid" name="stdid" placeholder="Student ID" required> !-->
  		
		<select style="margin-left: 10px;margin-top: 20px" id="rtype" name="rtype">
  			<option value="null"> - - Select Room Type - -</option>
			<option value="Single">Single</option>
			<option value="Double">Double</option>
			<option value="Triple">Triple</option>
		
		</select>
		<select style="margin-left: 10px;margin-top: 30px" id="floor" name="floor">
  			<option value="null"> - - Select Floor - -</option>
			<option value="1st floor">1st Floor</option>
			<option value="2nd Floor">2nd Floor</option>
			<option value="3rd Floor">3rd Floor</option>
		
		</select>
		
		
		<input style="margin-left: 10px;margin-top: 20px"  type="submit" name="submit" value="CHECK">
    </form> 
	
	
	</div>
	</center>

</html>
