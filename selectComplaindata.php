<?php  
//select.php  
if(isset($_POST["c_id"]))
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
 $query = "SELECT * FROM complains WHERE c_id = '".$_POST["c_id"]."'";
 $result = mysqli_query($con, $query);
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
            <td width="40%" ><label ><b>Complain Subject:</b></label></td>  
            <td width="60%">'.$row["c_sub"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label><b>Complain Reason:</b></label></td>  
            <td width="60%">'.$row["c_reason"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label><b>Complain Related to:</b></label></td>  
            <td width="60%">'.$row["related_to"].'</td>  
        </tr>
        <tr>  
            <td width="40%"><label><b>Submission Date:</b></label></td>  
            <td width="60%">'.$row["c_date"].'</td>  
        </tr>
       
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>