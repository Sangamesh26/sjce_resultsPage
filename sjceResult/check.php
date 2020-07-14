<?php
require_once("config.php");
if(isset($_POST['results']))
{
	$usn=mysqli_real_escape_string($db,$_POST['USN']);
	$dob=mysqli_real_escape_string($db,$_POST['DOB']);
	$check=mysqli_query($db,"select * from checking where usn='$usn' and dob='$dob'");
	$num=mysqli_num_rows($check);
	if($num==1)
		header("Location:https://sjce.ac.in/");
	     //echo "success";
	else
		header("Location:https://jssstuniv.in/");
	    //echo "failed";
	
	
}


?>