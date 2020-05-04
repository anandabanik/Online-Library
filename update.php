 <?php
	if(isset($_POST['submit']))
	{
		$registration_no=$_POST['registration_no'];
		$student_name=$_POST['student_name'];
		$phone=$_POST['phone'];
		$gender=$_POST['gender'];
		$department= $_POST['department'];
		$merit= $_POST['merit'];

		$db = mysqli_connect("localhost","root","","NSTU_ADMISSION_SYSTEM");
		
		$sql ="UPDATE StudentInfo SET student_name = '$student_name' , registration_no='$registration_no' ,phone='$phone',gender='$gender',department='$department',merit='$merit' WHERE registration_no='$registration_no' ";
		
		mysqli_query($db, $sql);
    	mysqli_close($db);
    	header('Location: student_list.php');
	}

?> 
