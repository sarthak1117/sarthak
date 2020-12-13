<!Doctype html>
<html>
<head>
	<title>View Users</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@0;1&display=swap" rel="stylesheet">
</head>
<header>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <div class="topnav-right">
  <a class="active" href="viewusers.php">View Users</a>
  <a class="active" href="transferdetails.php">Transfer History</a>
  <a class="active" href="transfer.php">Transfer Credit</a>
  </div>
</header>
<body> 
<table class="viewusers">
	<h1>User Details</h1>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "bankings");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT name, email, credit FROM students";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["name"] ."</td><td>".  $row["email"] ."</td><td>" .  $row["credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>
<footer>
  <p>Copyright &copy;2020</p>
  <a class="btn" href="">
        <i class="fab fa-twitter"></i>
     </a>
     <a class="btn" href="">
        <i class="fab fa-instagram"></i>
     </a>
     <a class="btn" href="">
        <i class="fab fa-github"></i>
     </a>
     <a class="btn" href="">
       <i class="fab fa-linkedin"></i>
     </a>
</footer>
</body>
</html>