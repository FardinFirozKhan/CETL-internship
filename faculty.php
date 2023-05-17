<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CETL Website - Faculty Members</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="faculty.php">Faculty Member</a></li>
				<li><a href="internship.php">Internship Program</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Faculty Members</h1>
		<ul>
			<?php
			// Connect to database
			$host = "localhost";
			$user = "username";
			$password = "password";
			$database = "cetl";
			$conn = mysqli_connect($host, $user, $password, $database);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// Query database for faculty members
			$sql = "SELECT * FROM faculty_members";
			$result = mysqli_query($conn, $sql);

			// Display faculty members
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<li><strong>" . $row['name'] . "</strong><br>";
				echo $row['title'] . "<br>";
				echo $row['email'] . "</li>";
			}

			// Close database connection
			mysqli_close($conn);
			?>
		</ul>
	</main>
	<footer>
		<p>&copy; 2023 CETL. All rights reserved.</p>
	</footer>
</body>
</html>
