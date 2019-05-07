<?php
	$title = "Delete Race";
	require_once('head.php');
	echo"<body>";
	echo"<h2>Delete Race</h2>";
	
	if ( empty ($_POST['raceID']))
		echo"<p>You must enter a Race ID</p>";
	else{
	$raceID = $_POST['raceID'];
	
	$conn = mysqli_connect('localhost', 'root', 'password', 'canary');
	
	$query = "DELETE FROM race WHERE $raceID = race.raceID";
	$result = mysqli_query($conn, $query);
	
	mysqli_close($conn);
	
	
	echo"<p>Race: $raceID has successfully been deleted from the database</p>";
	echo"<p> Your query result is: $result </p>";
	}
	
	
	echo"<a href = 'index.php'>Continue</a>";
	echo"</body>";
	echo"</html>";
?>