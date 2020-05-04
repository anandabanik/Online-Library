<?php
	session_start();
	$db = mysqli_connect("localhost","root","","Books_Store");

	if(isset($_POST['register'])){

		$name = mysqli_real_escape_string($db,$_POST['name']);
		$id = mysqli_real_escape_string($db,$_POST['id']);
    $number= mysqli_real_escape_string($db,$_POST['number']);
		$address= mysqli_real_escape_string($db,$_POST['address']);
		$password= mysqli_real_escape_string($db,$_POST['password']);

		$sql = 
		"INSERT INTO User_Info (id, name, address, contact_number, password) VALUES ('$id','$name','$address','$number','$password')";

		$_SESSION['message']='Registration Succesfully';
		mysqli_query($db, $sql);
    mysqli_close($db);
    header('Location: books_catalogue.php');
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Student Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Style.css"/>
    </head>
    <body> 
<body>
  <div class="container"><!--container start-->
    <!--header start-->
    <div class="header">    
    <marquee> <h3>Online Book Storage</h3> </marquee>

    </div>
    <!--header end-->

<div class="menucontainer">
 <!--menucontainer start--> 
  <nav class="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="login_form.php">Login</a></li>
      <li><a href="user_profile.php">User Profile</a></li>
      <li><a href="shoping_cart">Shoping Cart</a></li>
      <li><a href="payment.php">Payment</a></li>
      <!--sub link-->
  </ul>
</nav>
</div>
<!--menucontainer end-->

  <div class="headline">  <h2>Registration Form</h2> </div>
  <div class="form">
        <form action="registration_form.php" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
          <label for="registration_no">ID *</label>
          <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="student_name">Name *</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="address">Address *</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="number">Contact Number</label>
            <input type="number" class="form-control" id="number" name="number">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="register-button" value="Register" name="register">Submit</button>
        </form>
  </div>



  <footer class="copyright text-center">
    &copy;2018 |<a href="#"> XYZ Online Book Storage </a>| All Rights Reserved
  </footer>

  </div>
  <!--container end-->   
  </body>
</html>
