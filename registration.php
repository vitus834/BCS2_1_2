if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and validate inputs
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $gender = $_POST['gender'];

        // Validate password and confirm password match
        if ($password !== $confirm_password) {
            echo "<p style='color: red;'>Passwords do not match!</p>";
        } else {
            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            echo "<p style='color: green;'>Registration successful!</p>";
            $conn = new mysqli("localhost", "root", "", "solmusic_database");
             $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, gender) VALUES (?, ?, ?, ?, ?)");
             $stmt->bind_param("sssss", $first_name, $last_name, $email, $hashed_password, $gender);
             $stmt->execute();
             $stmt->close();
            $conn->close();
        }
    }
    ?>