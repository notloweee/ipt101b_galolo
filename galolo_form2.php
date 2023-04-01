<!DOCTYPE html>
<html>
<head>
	<title>PHP Form Example - Form Submission</title>
</head>
<body>
	<h1>WELCOME TO SYMPHONY OF THE SEAS</h1>

	<?php
		// Check if form was submitted using the POST method
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			// Retrieve form data
			$firstname = $_POST["firstname"];
			$lastname = $_POST["lastname"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$confirm_password = $_POST["confirm_password"];

			// Print form data (name and email)
			echo "<h3>Hello $firstname $lastname</h3>";
			echo "<h3>Email: $email</h3>";

			// Count the number of characters in the password
			$password_length = strlen($password);
			echo "<h3>Your password contained $password_length characters</h3>";

			// Check if password and confirm password are equal
			if ($password == $confirm_password) {
				echo "<p>Password match.</p>";
			} else {
				echo "<p>Passwords does not match.</p>";
			}
		} else {
			// If form was not submitted using the POST method, do not process the form
			echo "<p>Error: Form was not submitted using the POST method</p>";
		}
	?>

</body>
</html>