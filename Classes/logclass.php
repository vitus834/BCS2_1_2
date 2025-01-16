<?php
session_start();

// Database connection (update with your actual credentials)
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "solmusic_database";     

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are set in the form submission
    if (isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'])) {
        // Retrieve form data and escape for security
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        // Basic validation to check if fields are empty
        if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
            echo "Please fill in all fields.";
            exit();
        }

        // Use prepared statements to avoid SQL injection
        $stmt = $conn->prepare("SELECT id, firstName, lastName, password FROM users WHERE email = ? AND firstName = ? AND lastName = ?");
        $stmt->bind_param("sss", $email, $firstName, $lastName);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows > 0) {
            // Email and name match found, verify password
            $row = $result->fetch_assoc();
            
            // Verify password using password_verify (assuming hashed password in DB)
            if (password_verify($password, $row['password'])) {
                // Success, set session and redirect
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['first_name'] = $row['firstName'];
                $_SESSION['last_name'] = $row['lastName'];

                echo "Login successful!";
                header("Location: ../ent.php"); // Redirect to a protected page
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with this email, first name, and last name combination.";
        }

        // Close statement and connection
        $stmt->close();
    } else {
        echo "Please fill in all fields.";
    }

    // Close the database connection
    $conn->close();
} else {
    // Redirect to login page if accessed directly
    // header("Location: index.html");
    exit();
}
?>
