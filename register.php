 <style>
 div{
    background-image: linear-gradient(  #2ea5d2,#61c0d1);
   color:white;
   text-align:center;
   margin-top:10px;
   height: 50px;
   width: 860px;
   font-family:Consolas;
   font-size:26px;
   font-style:bold;
   transition:all .65s;
 }

 </style>
   <?php
	$con=new mysqli("localhost","root","");
	if($con){
	 // echo "Connected";
	}else{
	 // echo "Not Connected";
	}
	$db_selected=mysqli_select_db($con,'adbuhp');
	if(!$db_selected)
	{
		die("DB selection error!".mysqli_error());
	}
	 if($_SERVER["REQUEST_METHOD"]=="POST"){
	  $stdid=($_POST['stdid']);
	 $firstname=($_POST['firstname']);
	$lastname=$_POST['lastname'];
	$dept=$_POST['dept'];
	$semester=$_POST['semester'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$password=$_POST['password'];
    $roomnumber=$_POST['roomnumber'];
	$status="Pending";
	$rs=mysqli_query($con,"insert into student value('$stdid','$firstname','$lastname','$dept','$semester','$email','$password','$roomnumber','$contact','$status')");
 	if($rs)
 	{  echo "<center><div ><b><center>Successfully Registered</center></b></div></center>";
 	  
	}
	else
	{
		echo "<center><div ><b><center>Unable to Register</center><b></div></center>";
	}
	 }
    ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="formdesign.css">
</head>
<body>
  <center>
  	<form style="word-spacing: 50px;margin-top: 30px" action="" method="POST">
		 <input  style="margin-left: 10px" type="text" name="stdid" placeholder="Student ID" required>
  		 <input  style="margin-left: 10px" type="text" name="firstname" placeholder="First Name" required></br>
  		  <input style="margin-left: 10px" type="text" name="lastname" placeholder="Last Name" required>
  		 <input style="margin-left: 10px;margin-top: 20px" type="text" name="email" placeholder="Email" required></br>
  		<input style="margin-left: 10px;margin-top: 20px" type="number" name="contact" placeholder="Contact" required>
  		<input style="margin-left: 10px;margin-top: 20px" type="text" name="password" placeholder="password" required></br>
		
  		<select  style="margin-left: 10px" id="dept" name="dept">
  			<option value="null"> - - Select your Department - -</option>
			<option value="CSE">CSE & IT</option>
			<option value="ECE">ECE</option>
			<option value="EEE">EEE</option>
			<option value="MNE">MNE</option>
			<option value="CVE">CVE</option>
		</select>
		<select  style="margin-left: 10px;margin-top: 20px" id="semester" name="semester">
  			<option value="null"> - - Select your Semester - -</option>
			<option value="1st">1st Semester</option>
			<option value="2nd">2nd Semester</option>
			<option value="3rd">3rd Semester</option>
			<option value="4th">4th Semester</option>
			<option value="5th">5th Semester</option>
			<option value="6th">6th Semester</option>
			<option value="7th">7th Semester</option>
			<option value="8th">8th Semester</option>
		</select></br>
		<input style="margin-left: 10px;margin-top: 20px" type="number" name="roomnumber" placeholder="Room Number" required></br>
		<input target="ifregister" type="submit" name="submit" value="REGISTER">
  	</form>
	
  </center>

</body>
</html>
