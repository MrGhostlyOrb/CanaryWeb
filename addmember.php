<?php
	$title = "Add Member";
	require_once('head.php');
	echo"<body>";
	echo"<h2>Add Member</h2>";
	
	if ( empty ($_POST['firstName']))
		echo"<p>You must enter a First Name</p>";
	else if ( empty ($_POST['lastName']))
		echo"<p>You must enter a Last Name</p>";
	else if ( empty ($_POST['grade']))
		echo"<p>You must enter a Grade</p>";
	
	
	else{
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$grade = $_POST['grade'];
	
	$conn = mysqli_connect('localhost', 'root', 'password', 'canary');
	
	$query = "INSERT INTO member VALUES(NULL, '$firstName', '$lastName', '$grade')";
	$result = mysqli_query($conn, $query);
	
	mysqli_close($conn);
	
	
	echo"<p>$firstName $lastName ,Grade: $grade Has been added to the membership database</p>";
	echo"<p> Your query result is: $result </p>";
	}
	
	
	echo"<a href = 'index.php'>Continue</a>";
	echo"</body>";
	echo"</html>";
?>