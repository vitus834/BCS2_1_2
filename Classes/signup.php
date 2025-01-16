<?php
// Include the database connection file
include_once('connect.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Check if POST data is being passed correctly (optional)
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    // Trim input values to avoid issues with spaces
    $first_name = trim($_POST['firstName']);
    $last_name = trim($_POST['lastName']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['Password']);
    $confirm_password = trim($_POST['confirm_password']);
    $gender = trim($_POST['gender']);

    // Check if all required fields are filled
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password) || empty($gender)) {
        echo "All fields are required!<br>";
    } else {
        // Validate password and confirm password match
        if ($password !== $confirm_password) {
            echo "Passwords do not match!<br>";
        } else {
            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format!<br>";
            } else {
                // Hash the password for security
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Create a new instance of the Database class to connect to the database
                $db = new Database();
                $conn = $db->connect();  // Establish database connection

                // Prepare the query (removed confirm_password from the query as it's unnecessary)
                $query = "INSERT INTO users (firstName, lastName, email, password, gender) 
                VALUES (?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($query);

                // Check if the statement was prepared correctly
                if ($stmt === false) {
                    die("Error preparing statement: " . $conn->error);
                }

                // Bind parameters (we only need 5 parameters)
                $stmt->bind_param("sssss", $first_name, $last_name, $email, $hashed_password, $gender);

                // Execute the query and check for success
				if ($stmt->execute()) {
				// Registration successful
				echo "Registration successful!<br>";

				// Redirect after successful registration
				header("Location: ../ent.php");
				exit();  // Stop further script execution after redirect
			} else {
				// Error executing query
				echo "Error executing query: " . $stmt->error . "<br>";

                // Close statement and connection
                $stmt->close();
                $conn->close();
            }
        }
    }
}
}
?>
