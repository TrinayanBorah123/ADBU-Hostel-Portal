<?php
	include("security_session.php");
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
 	$sid = $_POST["sid"];  
    $reason =  $_POST["reason"];  
    $intime = $_POST["intime"];  
    $outtime =  $_POST["outtime"];  
    echo "<script>console.log('PHP: ".$sid."');</script>";
    $query = "INSERT INTO reg_book  VALUES(now(),'$outtime', '$intime', '$reason', '$sid')";
    if(mysqli_query($con, $query))
    {
     $output .= '<label class="text-success">Data Inserted</label>';
	}else{
	$output .= '<label class="text-success">Unable to Insert</label>';
	}
	echo $output; 
?>
