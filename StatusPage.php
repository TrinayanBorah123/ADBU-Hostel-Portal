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
	$user=$_SESSION["login_user"];
	$sql="SELECT * FROM `student` WHERE sid = '".$user."'";
	$records=mysqli_query($con,$sql);
    $count = mysqli_num_rows($records);
	$Cust=mysqli_fetch_assoc($records);
	
	$sql1="SELECT * FROM `appointmentrequest` WHERE sid_fk = '".$user."'";
	$records1=mysqli_query($con,$sql1);
    $count1 = mysqli_num_rows($records1);
	$Cust1=mysqli_fetch_assoc($records1);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>ADBU hostel portal</title>
 
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
           <a class="nav-link" href="" style="margin-right: 100px;" data-toggle="modal" data-target="#add_data_Modal"> COMPLAINS </a>
        </li>
		<li class="nav-item">
          <button type="button" class="btn btn-secondary " aria-haspopup="true" aria-expanded="false">
			<font style="margin-left:6px"><a  href="logout.php" style="color:white  ">LOGOUT</font> <i class="fas fa-sign-out-alt"></i></a>
		  </button>
        </li>
      </ul>
    </div>
  </nav>
 <div  class="container mt-5">
	 <p style="text-align:center;font-size: 35px;font-family: Consolas;margin-top:100px;">Your Status</p>
	<hr/>
	</div >
	<?php
	$sql0="SELECT * FROM `room` WHERE r_no = '".$Cust['room_id']."'";
	$records0=mysqli_query($con,$sql0);
	
    //$count0 = mysqli_num_rows($records0);
	$Cust0=mysqli_fetch_assoc($records0);
	
	?>
	<div  style="margin-top:60px ;font-size:18px;" class="container">
	<p style="text-align:center;font-familiy:Fabric;font-size:22px;"><u>Know Your Status according to your different types of Requests</u></p>
	</div>
	
	 <div  class="container">
	<center>
  	<div id="approve" class="row">
 	 <div style="margin-top:60px" class="col-sm-6">
  	  <div style="width:400px" class="card">
   	   <div class="card-body">
        <h5 class="card-title"><u>Room reservation Request </u></h5>
        <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p> !--> 
      	<?php if($count>0){ if($Cust['room_assign_status']=="Request")
			{ echo "<b>Your request is : ".$Cust['room_assign_status']."</br> Status is : Pending</b></br>";}
		    else{   if($Cust['room_id']!=NULL){  echo "<b>Your request is : Done</br>Status is : ".  $Cust['room_assign_status']  ." </br>(Allocated room ".$Cust['room_id'].", ".$Cust0['r_floor'].")</b>"; 
				    }else{
					echo "No Request Found";
					}
			}
		    }else{ echo "No Request Found"; } 
		  ?>
      </div>
   	 </div>
 	 </div>
  	<div style="margin-top:60px" class="col-sm-6">
    <div style="width:400px" class="card">
      <div class="card-body">
        <h5 class="card-title"><u>Appointment Request</u></h5>
       <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> !-->
       <!-- <a href="" class="btn btn-primary">CLICK HERE</a> !-->
		<!--<button type="button" name="rbook" id="rbook" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary">CLICK HERE</button> !-->
		<?php if($count1>0){ echo "<b>Your request date is : ".$Cust1['A_DATE']." </br>Status is : ".$Cust1['A_STATUS']."</br>( You can meet Warden at :".$Cust1['a_time'].")</b>"; 
		}else{ echo "No Request Found"; } ?></p>
      </div>
      </div>
 	 </div>
	 </div>
	</center>
</body>
<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
   
    <h5 id="he1" class="modal-title">Anonymous Complain Submission</h5></br>
	
	 <button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>Enter Complain Subject</label>
     <input type="text" name="csub" id="csub" class="form-control" required/>
     <br />
     <label>Reason</label>
     <textarea name="reason" id="reason" class="form-control" required></textarea>
     <br />
	
     <label>Related to</label>
    <select name="relatedto" id="relatedto" class="form-control">
	  <option value="null">-- Select Your Option --</option>  
      <option value="Room">To your Room</option>  
      <option value="Warden">To the Warden</option>
	  <option value="Hostel">To your Hostel</option>  
      <option value="Food">To the Food</option>
	  <option value="Water">To your Water</option>  
      <option value="Environment">To the Environment</option>
     </select>
     <br />  
     <input type="submit" name="insert" id="insert" value="Submit" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<footer id="footer" style="margin-top:40px;" class="card-body  fixed-bottom bg-light" >
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
<script>  
$(document).ready(function(){
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
   $.ajax({  
    url:"complainInsert.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
	// $('#h1').val("Inserted Succesfully");
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     //$('#add_data_Modal').modal('hide'); 
	 $('#he1').text(data);
      alert("Really want to add");
    }
   });  
  });
  }); 
</script>