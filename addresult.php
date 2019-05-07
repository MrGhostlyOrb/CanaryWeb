<?php
	$title = "Add Result";
	require_once('head.php');
	echo"<body>";
	echo"<h2>Add Result</h2>";
	
	if ( empty ($_POST['memberID']))
		echo"<p>You must enter a Member ID</p>";
	else if ( empty ($_POST['raceID']))
		echo"<p>You must enter a Race ID</p>";
	else if ( empty ($_POST['position']))
		echo"<p>You must enter a Position</p>";
	
	
	else{
	$memberID = $_POST['memberID'];
	$raceID = $_POST['raceID'];
	$position = $_POST['position'];
	
	$conn = mysqli_connect('localhost', 'root', 'password', 'canary');
	
	
	
	/* Maybe Add IF statement here to check if member exists in table already */
	
	$query = "INSERT INTO competitor VALUES(NULL, NULL, NULL, '$position') WHERE memberID = $memberID AND raceID = $raceID";
	$result = mysqli_query($conn, $query);
	
	mysqli_close($conn);
	
	
	echo"<p>Member: $memberID Has had race: $raceID position: $position added</p>";
	echo"<p> Your query result is: $result </p>";
	}
	
	
	echo"<a href = 'index.php'>Continue</a>";
	echo"</body>";
	echo"</html>";
?>