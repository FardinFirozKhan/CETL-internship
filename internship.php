<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CETL Website - Internship Program</title>
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
		<h1>Internship Program</h1>
		<p>CETL offers a variety of internship programs to help students gain hands-on experience in their chosen fields. Our internship programs are designed to give students the opportunity to work with industry professionals and gain valuable skills and knowledge that will help them succeed in their future careers.</p>
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

		// Query database for internship programs
		$sql = "SELECT * FROM internship_programs";
		$result = mysqli_query($conn, $sql);

		// Display internship programs
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<li><strong>" . $row['name'] . "</strong><br>";
			echo $row['description'] . "</li>";
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