<?php
	$title = "Home";
	require_once('head.php');
?>

<body>

	<h1>Add a Member</h1>

	<form action = "addmember.php" method = "post">
	
		First Name <input type = "text" name = "firstName"><br>
		Last Name <input type = "text" name = "lastName"><br>
		Grade <input type = "text" name = "grade"><br>
		<input type = "submit" value = "Add Member">
	
	</form>
	
	<h1>All Members</h1>
	
	<form action = "allmembers.php" method = "post">
	
		<input type = "submit" value = "See all members">
		
	</form>
	
	<h1>Delete Race</h1>
	
	<form action = "deleterace.php" method = "post">
	
		Race ID <input type = "text" name = "raceID"><br>
		<input type = "submit" value = "Delete Race">
		
	</form>
	
	<h1>Member Sign Up</h1>
	
	<form action = "assignmember.php" method = "post">
	
		Member ID <input type = "text" name = "memberID"><br>
		Race ID <input type = "text" name = "raceID"><br>
		<input type = "submit" value = "Assign Member">
		
	</form>
	
	<h1>Add Result</h1>
	
	<form action = "addresult.php" method = "post">
	
		Member ID <input type = "text" name = "memberID"><br>
		Race ID <input type = "text" name = "raceID"><br>
		Position <input type = "text" name = "position"><br>
		<input type = "submit" value = "Add Result">
		
	</form>
	
	<h1>Previous Participation</h1>
	
	<form action = "participation.php" method = "post">
	
		First Name <input type = "text" name = "firstName"><br>
		Last Name <input type = "text" name = "lastName"><br>
		<input type = "submit" value = "Show Participation">
		
	</form>
	
	<h1>Course Participation</h1>
	
	<form action = "courseparticipation.php" method = "post">
	
		Course Name <input type = "text" name = "courseName"><br>
		<input type = "submit" value = "Show Participation">
		
	</form>
	
	<h1>Course Enrollment</h1>
	
	<form action = "courseenrollment.php" method = "post">
	
		First Name <input type = "text" name = "firstName"><br>
		Last Name <input type = "text" name = "lastName"><br>
		Course Name <input type = "text" name = "courseName"><br>
		<input type = "submit" value = "Enroll on Course">
		
	</form>
	
	<h1>Add Race</h1>
	
	<form action = "addrace.php" method = "post">
	
		Race Name <input type = "text" name = "raceName"><br>
		Race Date <input type = "text" name = "raceDate"><br>
		Series Name <input type = "text" name = "seriesName"><br>
		Series Year <input type = "text" name = "seriesYear"><br>
		<input type = "submit" value = "Add Race">
		
	</form>
	
	<h1>Join Race</h1>
	
	<form action = "assignrace.php" method = "post">
	
		First Name <input type = "text" name = "firstName"><br>
		Last Name <input type = "text" name = "lastName"><br>
		Race Name <input type = "text" name = "raceName"><br>
		Series Name <input type = "text" name = "seriesName"><br>
		Series Year <input type = "text" name = "seriesYear"><br>
		<input type = "submit" value = "Add Race">
		
	</form>
	
</body>
</html>