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
	$floor=$_POST['floor'];
	$r1=100;
	$r2=200;
	$r3=300;
	$r4=400;
	$status="Approved";
	if($floor=="1stFloor"){
		$query = "SELECT * FROM student where room_assign_status='".$status."' and room_id between '".$r1."' and '".$r2."'";
	}else if($floor=="2ndFloor"){
		$query = "SELECT * FROM student where room_assign_status='".$status."' and room_id between '".$r2."' and '".$r3."'";
	}else{
		$query = "SELECT * FROM student where room_assign_status='".$status."' and room_id between '".$r3."' and '".$r4."'";
	}
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	
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

	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> !-->
  
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg  navbar-light bg-light">
    <a class="navbar-brand h1" href=""><img src="images/logo.png" width="70" height="70" alt="">ADBU HOSTEL PORTAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item" >
          <a class="nav-link" href="securityDash.php" style="margin-right: 50px;"> HOME </a>
        </li>
       <!-- <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 20px;"> CHECK STATUS </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 20px;"> SERVICES </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="" style="margin-right: 100px;"> COMPLAINS/FEEDBACK </a>
        </li> !-->
		
		  <button type="button" class="btn btn-secondary " aria-haspopup="true" aria-expanded="false">
			<font style="margin-left:6px"><a  href="logoutsecurity.php" style="color:white  ">LOGOUT</font> <i class="fas fa-sign-out-alt"></i></a>
		  </button>
      </ul>
    </div>
  </nav> 
   <div style="margin-top:130px;margin-bottom:60px;">
	 <p style="text-align:center;font-size: 35px;font-family: Fabric;"><font style="margin-right:16px ">List of Students</font><i class="fas fa-check"></i></p>
	<hr/>
	</div >
	
	
   <?php
   if(mysqli_num_rows($result) > 0)
   {
   ?>
   <div  style="margin-top:60px;margin-left:20px;margin-right:20px;margin-bottom:40px">
   <div class="table-responsive">
    <table   class="table table-striped">
      <thead class="thead-dark">
	 <tr>
      <th>Student Id</th>
	  
      <th> Room number</th>
	   <th> Update</th>
      <th>Status</th>
     </tr>
	 </thead>
   <?php
    while($row = mysqli_fetch_array($result))
    {
   ?> 
   <?php 
   
    $sql1="SELECT * FROM attendance where att_date= '".$_POST['adate']."' and sid_fk='".$row["sid"]."'" ;
    $result1 = mysqli_query($con,$sql1);
    $Cust1=mysqli_fetch_assoc($result1);
	$count=mysqli_num_rows($result1);
	//echo $_POST['adate'];
	?>
	
     <tr id="<?php echo $row["sid"]; ?>" >
      <td><?php echo $row["sid"]; ?></td>
	 
	  <td><?php echo $row["room_id"]; ?></td>
      <td><input type="checkbox" name="student_id[]" class="update_student" value="<?php echo $row["sid"]; ?>" /></td>
	  <td><?php if($count==1){echo $Cust1["status"];}else{ echo "Absent";} ?></td>
     </tr>
   <?php
    }
   ?>
    </table>
   </div>
   <div align="left">
    <button style="margin-left:20px" type="button" name="btn_upload" id="btn_upload" class="btn btn-success">Upload Attendence</button>
   </div>
   <?php
   }else{
   ?>
   </div>
   <p style="text-align:center;font-size: 35px;font-family: Fabric;"><font style="margin-right:16px ">No Students record found</font></p>
   <?php 
   }
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
<script>
$(document).ready(function(){
 
 $('#btn_upload').click(function(){
  
  if(confirm("Are you sure you want to Upload this?"))
  {
   var id = [];
   
   
   $(':checkbox:checked').each(function(i){
    id[i] = $(this).val();
	$adate='<?php echo $_POST["adate"]; ?>';
	console.log($adate);
   });
   
   if(id.length === 0) //tell you if the array is empty
   {
    alert("Please Select atleast one checkbox");
   }
   else
   {
    $.ajax({
     url:'attendenceInsert.php',
     method:'POST',
     data:{id:id,adate:$adate},
     success:function()
     {
      for(var i=0; i<id.length; i++)
      {
       $('tr#'+id[i]+'').css('background-color', '#ccc');
       $('tr#'+id[i]+'').fadeOut('slow');
      }
     }
     
    });
   }
   
  }
  else
  {
   return false;
  }
 });
 
});
</script>