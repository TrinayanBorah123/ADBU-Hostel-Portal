<?php  
//select.php  
if(isset($_POST["employee_id"]))
{
 $output = '';
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
 $query = "SELECT * FROM student WHERE sid = '".$_POST["employee_id"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="30%"><label>Name</label></td>  
            <td width="70%">'.$row["sname"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Parent Name</label></td>  
            <td width="70%">'.$row["pname"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Parent contact</label></td>  
            <td width="70%">'.$row["pcontact"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Address</label></td>  
            <td width="70%">'.$row["Address"].'</td>  
        </tr>
       
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>