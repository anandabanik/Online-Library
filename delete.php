<?php
	if(isset($_GET['registration_no']))
	{
		$registration_no=$_GET['registration_no'];
		$db = mysqli_connect("localhost","root","","NSTU_ADMISSION_SYSTEM");
		$sql = "DELETE FROM StudentInfo WHERE registration_no='$registration_no' ";
		mysqli_query($db, $sql);
    	mysqli_close($db);
    	header('Location: student_list.php');
	}

?> 
