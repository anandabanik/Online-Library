<?php
  session_start();
  $db = mysqli_connect("localhost","root","","Books_Store");

  if(isset($_POST['login'])){

    $id = mysqli_real_escape_string($db,$_POST['id']);
    $password= mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT id,password FROM User_Info WHERE id='$id' AND password='$password' ";
    $result = mysqli_query($db, $sql);
//    $rowData= mysql_fetch_array(result);
    $rowCount= mysqli_num_rows($result);
    if($rowCount==1){
        session_start();
        $_SESSION['login']=true;
        $_SESSION['success']=true;
        $_SESSION['message']='Login Succesfully';
        header('Location: books_catalogue.php');
     //   header('Location: user_profile.php?id=$rowData['id']');
    }
    else{
        session_start();
        $_SESSION['error']=true;
        $_SESSION['message']='Login Not Succesfully';
        header('Location: index.php'); 
    }
    mysqli_close($db);
  }
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Login Form</title>
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

  <div class="headline">  <h2>Login Form</h2> </div>
  <div class="form">
        <form action="login_form.php" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
          <label for="registration_no">ID *</label>
          <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="register-button" value="login" name="login">Login</button>
        <button type="submit" class="register-button" href="registration_form.php" value="registration" name="registration">Create New Account</button>
        </form>
  </div>



  <footer class="copyright text-center">
    &copy;2018 |<a href="#"> XYZ Online Book Storage </a>| All Rights Reserved
  </footer>

  </div>
  <!--container end-->   
  </body>
</html>
