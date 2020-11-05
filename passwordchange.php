<?php
	include("warden_session.php");
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
	
	 $output = '';
 	$oldpass = $_POST["oldpass"];  
    $newpass =  $_POST["newpass"];  
     $sql="select * from warden where password='".$oldpass."' and userid='".$_SESSION["login_warden"]."'";
	$record=mysqli_query($con,$sql);
	$count=mysqli_num_rows($record);
	if($count==1){
    	$query = "update warden set password='".$newpass."'where password='".$oldpass."' and userid='".$_SESSION["login_warden"]."'";
    	if(mysqli_query($con, $query))
   	 	{
     		$output .= '<label>Password Updated Succesfully</label>';
		}
	}else{
		$output .= '<label>Unable to change!</label>';
	}
	
	
	echo $output; 
?>