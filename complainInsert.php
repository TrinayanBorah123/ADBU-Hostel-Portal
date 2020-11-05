<?php
	include("session.php");
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
	
	 $output = '';
 	$csub = $_POST["csub"];  
    $reason =  $_POST["reason"];  
    $related = $_POST["relatedto"];
	$sid=$_SESSION['login_user'];  
	if(isset($_POST['annoid'])){
    $query = "INSERT INTO complains  VALUES(default,'$csub', '$reason',now(), '$related','$sid')";
	}else{
	$ac="Not Mentioned";
	$query = "INSERT INTO complains  VALUES(default,'$csub', '$reason',now(), '$related',NULL)";
	}
    if(mysqli_query($con, $query))
    {
     $output .= 'Complain Submitted Succesfully';
	}else{
	$output .= 'Complain unable Upload!';
	}
	echo $output; 
?>