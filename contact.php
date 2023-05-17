<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CETL Website - Contact Us</title>
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
		<h1>Contact Us</h1>
		<p>If you have any questions or comments, please don't hesitate to contact us.</p>
		<form action="contact-form.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required><br>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required><br>
			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea><br>
			<input type="submit" value="Submit">
		</form>
	</main>
	<footer>
		<p>&copy; 2023 CETL. All rights reserved.</p>
	</footer>
</body>
</html>