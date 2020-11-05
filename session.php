<?php session_start();
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
	
	$user_check = $_SESSION["login_user"];
   //echo $_SESSION["login_user"];
   $ses_sql = mysqli_query($con,"SELECT sid FROM Student WHERE sid = '".$user_check."'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
    
   $login_session = $row['sid'];
   
   
    $sql = "SELECT sid FROM Student WHERE sid = '".$_SESSION["login_user"]."'";
    //echo $sql;
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    //echo $count;
   
    if($count==0) {
    
    echo '<script>window.location.href = "studentlogin.php";</script>';
   
   
   }
?>