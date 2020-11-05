<?php
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
if(isset($_POST["id"]))
{
 $status="Present";
 $absstatus="Absent";
 $adate=$_POST['adate'];
 foreach($_POST["id"] as $id)
 {
  $sql1="SELECT * FROM attendance WHERE att_date=".$adate." and sid_fk='". $id."' and status='".$status."'";
  $result1 = mysqli_query($con,$sql1);
  $Cust1=mysqli_fetch_assoc($result1);
  $count=mysqli_num_rows($result1);
  
  if( $count==0){
  	$sql = "SELECT * FROM student WHERE sid = '".$id."'";
  	$result = mysqli_query($con,$sql);
 	 $Cust=mysqli_fetch_assoc($result);
  	$stdid=$Cust['sid'];
 	 //$room=$Cust['r_no'];
  	//$email=$Cust['Email'];
  	$status="Present";
	
  	$rs=mysqli_query($con,"insert into attendance value('$adate','$status','$stdid')");
  
  	
  } 
 
 }
}
?>