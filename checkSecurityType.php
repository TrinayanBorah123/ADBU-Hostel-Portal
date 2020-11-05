<?php 
 	//session_start();
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
	
	
	$user_check = $_SESSION["login_security"];
	$query = "SELECT * FROM security WHERE userid = '".$user_check."'";
	$result = mysqli_query($con, $query);
	$cust = mysqli_fetch_assoc($result);
	
    if($cust['Status'] === "Approved"){
	
      
		 echo '<script type="text/javascript"> document.getElementById("Astatus").style.display = "none"; </script>';
    }
    else if($cust['Status'] === "Pending"){
	 echo '<script type="text/javascript"> document.getElementById("viewlog").style.display = "none"; </script>';
     echo "<script type='text/javascript'>console.log('console log message');</script>";
      echo '<script type="text/javascript"> document.getElementById("approve").style.display = "none"; </script>';
      
    }
	
?>