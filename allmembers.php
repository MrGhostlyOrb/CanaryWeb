<?php
	$title = "All Members";
	require_once('head.php');
	echo"<body>";
	echo"<h2>All Members</h2>";
	
	$conn = mysqli_connect('localhost', 'root', 'password', 'canary');
	
	$query = "SELECT * FROM member";
	$result = mysqli_query($conn, $query);
	echo"<table>";
	echo"<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";
		while ($row = mysqli_fetch_assoc($result))
		{
			echo"<tr>";
			echo"<td>" .$row['memberID']. "</td>";
			echo"<td>" .$row['firstName']. "</td>";
			echo"<td>" .$row['lastName']. "</td>";
			echo"</tr>";
		}
	echo"</table>";
	mysqli_close($conn);
	
	
	echo"<a href = 'index.php'>Continue</a>";
	echo"</body>";
	echo"</html>";
?>