<?php
	session_start();
	$db = mysqli_connect("localhost","root","","NSTU_ADMISSION_SYSTEM");

	if(isset($_GET['registration_no'])){
		$registration_no = $_GET['registration_no'];
		
  		$sql = "SELECT * FROM StudentInfo WHERE registration_no='$registration_no'";
		$result = mysqli_query($db, $sql);
		$row=mysqli_fetch_assoc($result);
    	//mysqli_close($db);
	}
?> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Update Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Style.css"/>
    </head>
    <body> 
    <body>

    <div class="container"><!--container start-->
    <!--header start-->
    <div class="header">
    <img src="logo.png" width="50" height="70">
    <div class="userarea"><!--userarea start-->
      <form>
            <input type="text" name="text" class="search" placeholder="search Here">
            <input type="submit" name="submit" class="submit" value="Search">
       </form>
    </div><!--userarea end-->
    </div>
    <!--header end-->

  <div class="menucontainer">
  <!--menucontainer start--> 
    <nav class="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="registration_form.php">Registration</a></li>
      <li><a href="student_list.php">Students</a></li>
      <li><a href="about_us.php">About us</a></li>
      <!--sub link-->
  </ul>
  </nav>
  </div>
  <!--menucontainer end-->
  <div class="headline">  <h2>Update Form</h2> </div>
  <div class="form">
        <form action="update.php?=registration_no <?php echo $row['registration_no']; ?>"" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="student_name">Student Name *</label>
            <input type="text" class="form-control" value="<?php echo $row['student_name'];?>" id="student_name" name="student_name" required>
        </div>
        <div class="form-group">
            <label for="registration_no">Registration No *</label>
            <input type="text" class="form-control" value="<?php echo $row['registration_no'];?>" id="registration_no" name="registration_no" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" value="<?php echo $row['phone'];?>" id="phone" name="phone">
        </div>
        <div class="form-group">
                    <label>Gender </label>
                    <select name="gender" class="select"> 
                        <option value="<?php echo $row['gender'];?>"><?php echo $row['gender'];?>
                        </option>
                        <option value="Female">Female
                        </option>
                        <option value="Male">Male
                        </option>
                    </select>
        </div>
        <div class="form-group">
                    <label>Department 
                    </label>
                    <select name="department" class="select" ">
                    	<option value="<?php echo $row['department'];?>"><?php echo $row['department'];?>
                        </option>
                       <option value="ICE">ICE
                        </option>
                        <option value="CSTE">CSTE
                        </option>
                        <option value="EEE">EEE
                        </option>
                        <option value="ACCE">ACCE
                    </select>  
        </div>
        <div class="form-group">
            <label for="Merit">Merit Position</label>
            <input type="text" class="form-control" value="<?php echo $row['merit'];?>" id="merit" name="merit">
        </div>
        <button type="submit" class="register-button" value="submit" name="submit">Update</button>
        </form>
  </div>


  <!--map and address-->
  <div class="footer">
    <!--map-->
  <div class="row">
  <div class="col-4">
      <h3 class="head">UNIVERSITY LOCATION</h3>
      <div class="map">
        <img src="map.png" width="170" height="170">
      </div>
  </div><!--col-4-->

  <div class="col-4">
       <h3 class="head">UNIVERSITY ADDRESS</h3>
       <div class="para">
        <p>Postal Code: 3814</p>
        <p>+88032172720</p>
        <p>info@nstu.edu.bd</p>
        <p>Sunday - Thursday:</p>
        <p> 9:00 AM - 5:00 PM</p>
    </div>
  </div><!--col-4-->

  </div><!--row-->


  <div class="clearfix">  
  </div>
  </div>
<!--map and address end-->


  <footer class="copyright text-center">
    &copy;2018 |<a href="#"> Noakhali Science and Technology University </a>| All Rights Reserved
  </footer>

  </div>
  <!--container end-->   
  </body>
</html>
 
