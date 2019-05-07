<?php
	$title = "Assign Member";
	require_once('head.php');
	echo"<body>";
	echo"<h2>Assign Member</h2>";
	
	if ( empty ($_POST['memberID']))
		echo"<p>You must enter a Member ID</p>";
	else if ( empty ($_POST['raceID']))
		echo"<p>You must enter a Race ID</p>";
	else{
	$memberID = $_POST['memberID'];
	$raceID = $_POST['raceID'];
	
	$conn = mysqli_connect('localhost', 'root', 'password', 'canary');
	
	$query = "INSERT INTO competitor VALUES(NULL, '$memberID', '$raceID', NULL)";
	$result = mysqli_query($conn, $query);
	
	mysqli_close($conn);
	
	
	echo"<p>$memberID has successfully been entered into $raceID</p>";
	echo"<p> Your query result is: $result </p>";
	}
	
	
	echo"<a href = 'index.php'>Continue</a>";
	echo"</body>";
	echo"</html>";
?>