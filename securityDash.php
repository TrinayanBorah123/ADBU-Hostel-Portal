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
	$query = "SELECT * FROM security";
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
        <li class="nav-item" style="margin-left:540px ">
          <a class="nav-link" href="securityDash.php" style="margin-right: 20px;"> HOME </a>
        </li>
      <li class="nav-item" id="viewlog">
          <a class="nav-link" href="logbookdisplay.php" style="margin-right: 20px;">VIEW LOGBOOK </a>
        </li>
         <!-- <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 20px;"> SERVICES </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 100px;"> COMPLAINS/FEEDBACK </a>
        </li> !-->
		<li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 20px;" data-toggle="modal" data-target="#change_data_Modal"><b style="font-family: Consolas;color:#000000">HI,<font style="margin-right:10px"><?php echo $_SESSION["login_security"]?></font><i class="fas fa-user-check"></i></b>  </a> 
        </li>
		  <button type="button" class="btn btn-secondary " aria-haspopup="true" aria-expanded="false">
			<font style="margin-left:6px"><a  href="logoutsecurity.php" style="color:white  ">LOGOUT</font> <i class="fas fa-sign-out-alt"></i></a>
		  </button>
      </ul>
    </div>
  </nav>
  <div  class="container mt-5">
	 <p style="text-align:center;font-size: 35px;font-family: Consolas;margin-top:120px;">Security Panel</p>
	<hr/>
	</div >
  <div  class="container">
	<center>
  	<div id="approve" class="row">
 	 <div style="margin-top:60px" class="col-sm-6">
  	  <div style="width:400px" class="card">
   	   <div class="card-body">
        <h5 class="card-title">Upload Attendance</h5>
        <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p> !-->
        <a href="AttendenceSelect.php" class="btn btn-primary">CLICK HERE</a>
      </div>
   	 </div>
 	 </div>
  	<div style="margin-top:60px" class="col-sm-6">
    <div style="width:400px" class="card">
      <div class="card-body">
        <h5 class="card-title">Daily Record Page</h5>
       <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> !-->
       <!-- <a href="" class="btn btn-primary">CLICK HERE</a> !-->
		<button type="button" name="rbook" id="rbook" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary">CLICK HERE</button>
      </div>
      </div>
 	 </div>
	 </div>
	</center>
	  
	<?php
	 include("checkSecurityType.php");
		echo "<script type='text/javascript'>console.log('console log message');</script>";
	 ?>
	 <div id="Astatus" align="center">
	 <p   style="font-size:26px;font-family:Constantia ">Your Acount is not Approved Yet</p>
	<button  type="button" name="btn_request" id="btn_request" class="btn btn-success">Send Request</button>
	 </div>
	 <?php
	 include("checkSecurityType.php");
		echo "<script type='text/javascript'>console.log('console log message');</script>";
	 ?>
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
<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
   
    <h3 id="h1" name="h1" class="modal-title">Log Book</h3>
	 <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>Enter Student ID</label>
     <input type="text" name="sid" id="sid" class="form-control" required/>
     <br />
     <label>Reason</label>
     <textarea name="reason" id="reason" class="form-control" required></textarea>
     <br />
	
     
     <label>Outtime</label>
     <input type="time" name="outtime" id="outtime" class="form-control"   required/>
     <br />  
     <label>Intime</label>
     <input type="time" name="intime" id="intime" class="form-control" required/>
     <br />  
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<div id="change_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
   
    <h5  id="he2" class="modal-title">Your Profile </h5></br>
	
	 <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">
   <p>Current User ID:<b> <?php echo $_SESSION["login_security"];?></b></p>
   <h5  id="he1" class="modal-title">Password Change Section :</h5></br>
   <hr/>
    <form method="post" id="insert_form1">
     <label>Enter old password:</label>
     <input type="password" name="oldpass" id="oldpass" class="form-control" required/>
     <br />
     <label>New password:</label>
     <input type="password" name="newpass" id="newpass" class="form-control" required></input>
     <br />
	
    
     <input type="submit" name="insert1" id="insert1" value="Submit" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<script>  
$(document).ready(function(){
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
   $.ajax({  
    url:"logbookInsert.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
	// $('#h1').val("Inserted Succesfully");
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     //$('#add_data_Modal').modal('hide'); 
	  $('#h1').html(data);
      alert("Really want to add");
    }
   });  
  });
  }); 
</script>
<script> 
$(document).ready(function(){
 $('#insert_form1').on("submit", function(event){  
  event.preventDefault();  
   $.ajax({  
    url:"securitypasschange.php",  
    method:"POST",  
    data:$('#insert_form1').serialize(),  
    beforeSend:function(){  
     $('#insert1').val("Updating..");  
	// $('#h1').val("Inserted Succesfully");
    },  
    success:function(data){  
     $('#insert_form1')[0].reset();  
     //$('#add_data_Modal').modal('hide'); 
	 $('#he2').html(data);
      alert("Really want to update");
    }
   });  
  });
  }); 
  

  }
</script>