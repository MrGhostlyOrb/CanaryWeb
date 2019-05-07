<?php
	$title = "Participation";
	require_once('head.php');
	echo"<body>";
	echo"<h2>Participation</h2>";
	
	if ( empty ($_POST['firstName']))
		echo"<p>You must enter a First Name</p>";
	else if ( empty ($_POST['lastName']))
		echo"<p>You must enter a Last Name</p>";
	else{
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	
	$conn = mysqli_connect('localhost', 'root', 'password', 'canary');
	
		/*Add IF statement to check if there is a position, if not do not include in results*/
	
	$query = "SELECT raceName, raceDate, position WHERE race.raceID = competitor.raceID AND member.memberID = competitor.memberID AND $firstname = member.firstName AND $lastName = member.lastName ORDER BY position";
	$result = mysqli_query($conn, $query);
	
	echo"<table>";
	echo"<tr><th>Race Name</th><th>Race Date</th><th>Position</th></tr>";
		while ($row = mysqli_fetch_assoc($result))
		{
			echo"<tr>";
			echo"<td>" .$row['raceName']. "</td>";
			echo"<td>" .$row['raceDate']. "</td>";
			echo"<td>" .$row['position']. "</td>";
			echo"</tr>";
		}
	echo"</table>";
	
	mysqli_close($conn);
	
	
	echo"<p>$firstName $lastName</p>";
	echo"<p> Your query result is: $result </p>";
	}
	
	
	echo"<a href = 'index.php'>Continue</a>";
	echo"</body>";
	echo"</html>";
?>