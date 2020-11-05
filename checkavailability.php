

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
          <a class="nav-link" href="" style="margin-right: 20px;"> ABOUT US </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkavailability.php" style="margin-right: 20px;"> SERVICES </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact" style="margin-right: 100px;"> CONTACT </a>
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
  
  	
	 <div class="container-fluid announcement" style="margin-top:140px; ">
      
        <div class="blink"><span><strong style="font-family: Fabric; ">Announcements</strong></span>
        </div>
      </div>
      <div class="info" style="font-family: Fabric; ">
        <marquee style="margin-right: 220px; "><b>Hostel Admissions From 5th May 2019 | Admissions – PhD 2019 Shortlisted/Waitlisted Candidates | PhD Entrance Test Requirement/Exemptions | Notice for Repeat and Improvement Examinations | Re-Evaluation Result – Autumn 2018 | PhD Admissions – Entrance Test/Interview Schedule 2019 | PhD Notification – Results|Short Term Training on ‘Introduction to Nanotechnology’ | MBA 2 & 5 Trimester Result | National Conference: Trends in Modern Physics 2019 | Results Autumn 2018 | Readmitted List – Carreno & Burns Hall – 2019 | Result of PhD Coursework – 2018 | Job Openings – November 2018|Notifications on Cellphone, Entry-Exit and Uniform | Free Skill Development Training Under PMKVY-TI | PhD Fee Payment | AICTE Online Talent Test
        </b></marquee>
      </div>
    </div>
	<center>
	
  <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;width: 40%;height:490px;border-radius: 5px; margin-bottom:60px;background-color:white">
	<div style="margin-top:80px;background-color:#6c757d;font-family: Fabric;color:#ffffff" >
	 <p style="text-align:center;font-size: 35px;font-family: Fabric;margin-top:6px;"><font style="margin-right:16px ">Check Availability</font></p>
	<hr/>
	</div >
	<div>

  	<form style="word-spacing: 50px;margin-top: 80px" action="showAvailableroomlogout.php" method="POST">
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
		<input style="margin-left: 10px;margin-top: 30px;"  type="submit" name="submit" value="CHECK">
    </form> 
	
	</div>
	
	</center>
	
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
