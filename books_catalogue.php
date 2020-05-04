<?php
	session_start();
	$db = mysqli_connect("localhost","root","","Books_Store");
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

  <div>	
  		<h2>Books Catalogue</h2>
  		<?php
  			$sql = "SELECT * FROM Books_Catalogue";
			$result = mysqli_query($db, $sql);
  		echo "<table "; echo "class="; echo " 'table table-bordered' >";
      	echo "<tr>";
      	    echo "<th>"; echo "Title"; echo "</th>";
        	echo "<th>"; echo "Author"; echo "</th>";
        	echo "<th>"; echo "ISBN Number"; echo "</th>";
        	echo "<th>"; echo "Publisher"; echo "</th>";
        	echo "<th>"; echo "Edition"; echo "</th>";
        	echo "<th>"; echo "Price"; echo "</th>";
        	echo "<th>"; echo "Action"; echo "</th>";
      	echo "</tr>";
      while ($row=mysqli_fetch_array($result)) {
      	echo "<tr>";
      		echo "<td>"; echo $row['title']; echo "</td>";
      		echo "<td>"; echo $row['author']; echo "</td>";
      		echo "<td>"; echo $row['isbn_number']; echo "</td>";
      		echo "<td>"; echo $row['publisher']; echo "</td>";
      		echo "<td>"; echo $row['edition']; echo "</td>";
      		echo "<td>"; echo $row['price']; echo "</td>";
      		echo "<td>"; ?>
      		<a class ="btn btn-info btn-sm" href="edit.php?registration_no=<?php echo $row['registration_no']; ?>" >Add to Cart</a>
      		<?php
      		echo "</td>";
      	echo "</tr>";
      }
	?>
  	</table>
  </div>

  

  <footer class="copyright text-center">
  	&copy;2018 |<a href="#"> XYZ Online Book Storage </a>| All Rights Reserved
  </footer>

  </div>
  <!--container end-->
    </body>
</html>

