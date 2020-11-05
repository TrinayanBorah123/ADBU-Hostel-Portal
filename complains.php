<?php
	include("warden_session.php");
	if(isset($_POST['sid'])){
		$sql="SELECT * FROM student where sid='".$_POST['sid']."'";
	}else{
		$sql="SELECT * FROM complains";
	}
	$result = mysqli_query($con, $sql); 
	
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
 <div  class="container mt-5">
	 <p style="text-align:center;font-size: 35px;font-family: Consolas;margin-top:100px;">Complain List</p>
	<hr/>
	</div >
	</body>
	<div  style="margin-top:60px;margin-left:40px;margin-right:40px;margin-bottom:40px">
  
  	<table class="table table-striped">
    <thead class="thead-dark">
   	<tr>
  		<th scope="col">Complain ID</th>
  		<th scope="col">Subject</th>
		<th scope="col">Submitted By</th>
  		<th scope="col">Details</th>
		
 	 </tr>	
 	  </thead>
  	 <tbody>
	
      <?php
	   
      while($Cust=mysqli_fetch_assoc($result)){
      echo '<tr >';
        echo '<th scope="row">'.$Cust['c_id'].'</td>';
        echo '<td>'.$Cust['c_sub'].'</td>';
		if($Cust['sid_fk']==NULL){
			echo '<td>Not Mentioned</td>';
		}else{
		echo '<td>'.$Cust['sid_fk'].'</td>';
		
		}
		
		?>
		 <td><input type="button" name="view" value="Click here" id="<?php echo $Cust["c_id"]; ?>" class="btn btn-info btn-xs view_data" data-toggle="modal" data-target="#dataModal" /></td>
        <?php
	   echo '</tr>';
      }
    ?>   
   </tbody>
  </TABLE>      
  </div>
  <div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    
    <h4 class="modal-title">Complain Details</h4>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
   </div>
   <div class="modal-body" id="employee_detail">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
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
$(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var c_id = $(this).attr("id");
  $.ajax({
   url:"selectComplaindata.php",
   method:"POST",
   data:{c_id:c_id},
   success:function(data){
    $('#employee_detail').html(data);
    $('#dataModal').modal('show');
	
   }
  });
 });
</script>
