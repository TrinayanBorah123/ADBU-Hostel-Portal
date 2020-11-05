<?php
  // Create database connection
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

  $result = mysqli_query($con, "SELECT * FROM events");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>About Hostel</title>
 <link rel="icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/slick.css" >
  <link rel="stylesheet" href="css/hostel.css">
  <link rel="stylesheet" href="css/slider.css">
	

</head>

<body>
  <!--**************TITLE***************** -->
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
          <a class="nav-link" href="hostel.php" style="margin-right: 20px;"> ABOUT US </a>
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

    <!--**************HEADER***************** -->

  </section>
  <section class="about-hos" id="dbu-hos">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>About Hostel</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="intro-bread">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="hp.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <!--**************Ongoing events***************** -->
  <section id="current_evt">
    <div class="container-fluid current_events">
      <div class="row">
        <div class="blink"><span><strong>Announcements</strong></span>
        </div>
        <div class="info">
          <marquee><b>Hostel Admissions From 5th May 2019 | Admissions – PhD 2019 Shortlisted/Waitlisted Candidates | PhD Entrance Test Requirement/Exemptions | Notice for Repeat and Improvement Examinations | Re-Evaluation Result – Autumn 2018 |
              PhD Admissions – Entrance Test/Interview Schedule 2019 | PhD Notification – Results|Short Term Training on ‘Introduction to Nanotechnology’ | MBA 2 & 5 Trimester Result | National Conference: Trends in Modern Physics 2019 | Results
              Autumn 2018 | Readmitted List – Carreno & Burns Hall – 2019 | Result of PhD Coursework – 2018 | Job Openings – November 2018|Notifications on Cellphone, Entry-Exit and Uniform | Free Skill Development Training Under PMKVY-TI | PhD Fee
              Payment | AICTE Online Talent Test
            </b></marquee>
        </div>
      </div>
  </section>

  <section id="brief-intro">
    <div class="container-fluid intro">
      <h6>
        <p>College marks the coming of age for many students. With college, students learn to take their first tentative steps into adulthood. It's their first brush with living life on their own and it comes with its own set of perks and drawbacks.</p>
        <p>The Assam Don Bosco University understands how being away from home can affect the mental and physical wellbeing of students. We understand how overwhelming it can be to leave everything familiar and live in a strange environment
          surrounded by hundreds of strange people.</p>
        <p>We make every effort in providing our students with convenient residential options. All our efforts are directed towards giving our students a home away from home and making their stay as enjoyable and comfortable as possible.</p>
        <p>The Assam Don Bosco University offers separate hostel accommodation for boys and girls. These well furnished hostels are available to students of all the campuses – Tapesia, Azara and Kharguli.</p>
      </h6>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        CLICK HERE!
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
  <!--***********************************FACILITIES AND SERVICES********************************************-->
  <section id="fac-serv1">
    <div class="container-fluid">
          <h1 class="fac-title">Facilities & Services</h1>

        <div class="divider">
        </div>
      </section>



  <section id="fac-serv">

      <div class="row fac-box">
        <div class="rag-desp col-lg-2  col-md-4 ">
          <i class="fas fa-ban fa-4x fac-icon"></i>
          <h6 class="fac-desp">Anti-Ragging</h6>
        </div>
        <div class="rag-info col-lg-4">
          <h6>Ragging free hostel</h6>

        </div>

        <div class="facility-box col-lg-2 col-md-4 ">
          <i class="icon fas fa-wifi fa-4x fac-icon"></i>
          <h6 class="fac-desp">Wifi</h6>
        </div>
        <div class="rag-info col-lg-4">
          <h6>High speed internet and intranet services</h6>

        </div>
      </div>
      <div class="row fac-box">
        <div class="facility-box col-lg-2  col-md-4 ">
          <i class="icon fas fa-bed fa-4x fac-icon"></i>
          <h6 class="fac-desp">Well-Furnished Rooms</h6>
        </div>
        <div class="rag-info col-lg-4">
          <h6>Well furnished rooms with wifi enabled.</h6>

        </div>


        <div class="facility-box col-lg-2 col-md-4 ">
          <i class="icon fas fa-lock fa-4x fac-icon"></i>
          <h6 class="fac-desp">Security</h6>
        </div>
        <div class="rag-info col-lg-4">
          <h6>Round the clock security</h6>

        </div>
      </div>
      <div class="row fac-box">
        <div class="facility-box col-lg-2 col-md-4 ">
          <i class="icon fas fa-utensils fa-4x fac-icon"></i>
          <h6 class="fac-desp">Fooding</h6>
        </div>
        <div class="rag-info col-lg-4">
          <h6>Hygienically prepared vegetarian and non-vegetarian food</h6>

        </div>

        <div class="facility-box col-lg-2 col-md-4 ">
          <i class="icon fas fa-dumbbell fa-4x fac-icon"></i>
          <h6 class="fac-desp">Gym</h6>
        </div>
        <div class="rag-info col-lg-4">
          <h6>Common room with Gym facilities and television</h6>

        </div>
      </div>
      <div class="row fac-box">
        <div class="facility-box col-lg-2 col-md-4 ">
          <i class="icon fas fa-table-tennis fa-4x fac-icon"></i>
          <h6 class="fac-desp">Indoor-Sports</h6>
        </div>
        <div class="rag-info col-lg-4">
          <h6>Indoor sports facilities such as Table tennis, badminton, carrom, basketball, etc</h6>

        </div>


        <div class="facility-box col-lg-2 col-md-4 ">
          <i class="icon fas fa-table-tennis fa-4x fac-icon"></i>
          <h6 class="fac-desp">Outdoor-Sports</h6>
        </div>
        <div class="rag-info col-lg-4">
          <h6>Outdoor-Sports facilities like cricket, football.</h6>

        </div>
      </div>

      </div>


  </section>

<!--*****************************************events***************************************-->
<section id="event-gallery" >
  <div class="container-fluid">
        <h1 class="fac-title">Events</h1>

      <div class="divider">
      </div>
    </section>

  <section class="slider-area slider" >
    <?php
      while ($row = mysqli_fetch_array($result)) {
        ?>
    <div class="card" style="width: 19rem;">
      <?php
				echo "<img style='width:20rem;height:180px' src='hostel_events/".$row['image']."' >";
		?>
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['heading']; ?></h5>
        <p class="card-text"><?php echo $row['Details']; ?></p>

      </div>
    </div>
    <?php
    }
  ?>


  </section>
  
<!-- Footer -->

  <footer id="footer" >
    <div class="container-fluid">
      <div class="row">
      <div class="col-md-6 f-left">
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








</body>

</html>
<script src="js/jquery-3.2.1.js" type="text/javascript"> </script>
  <script src="js/slick.js" type="text/javascript"> </script>
  <script type="text/javascript">
  $(document).ready(function(){
    $('.slider').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

  });
  </script>