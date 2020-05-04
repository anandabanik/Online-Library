<?php
	session_start();
	$db = mysqli_connect("localhost","root","","NSTU_ADMISSION_SYSTEM");
	if (!$db) {
    	die("Connection failed: " . mysqli_connect_error());
		}

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Students List</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Style.css"/>
    </head>
    <body>    
    <div class="container">
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
      <li><a href="about-us.php">About us</a></li>
      <!--sub link-->
  </ul>
  </nav>
  </div>
  <!--menucontainer end-->
  <div>	
  		<h2>Students List</h2>
  		<?php
  			$sql = "SELECT student_name,registration_no,phone,gender,department,merit FROM StudentInfo";
			$result = mysqli_query($db, $sql);
  		echo "<table "; echo "class="; echo " 'table table-bordered' >";
      	echo "<tr>";
      	    echo "<th>"; echo "Registration No"; echo "</th>";
        	echo "<th>"; echo "Student Name"; echo "</th>";
        	echo "<th>"; echo "Phone"; echo "</th>";
        	echo "<th>"; echo "Gender"; echo "</th>";
        	echo "<th>"; echo "Department"; echo "</th>";
        	echo "<th>"; echo "Merit"; echo "</th>";
        	echo "<th>"; echo "Action"; echo "</th>";
      	echo "</tr>";
      while ($row=mysqli_fetch_array($result)) {
      	echo "<tr>";
      		echo "<td>"; echo $row['registration_no']; echo "</td>";
      		echo "<td>"; echo $row['student_name']; echo "</td>";
      		echo "<td>"; echo $row['phone']; echo "</td>";
      		echo "<td>"; echo $row['gender']; echo "</td>";
      		echo "<td>"; echo $row['department']; echo "</td>";
      		echo "<td>"; echo $row['merit']; echo "</td>";
      		echo "<td>"; ?>
      		<a class ="btn btn-info btn-sm" href="edit.php?registration_no=<?php echo $row['registration_no']; ?>" >Edit</a>
      		<a class ="btn btn-danger btn-sm" href="delete.php?registration_no=<?php echo $row['registration_no']; ?>" onclick="return confirm('Are Your Sure');"> Delete </a>
      		<?php
      		echo "</td>";
      	echo "</tr>";
      }
	?>
  	</table>
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

