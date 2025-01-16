<?php
// connect.php - Database connection class

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "solmusic_database";

    // Method to establish the database connection
    public function connect() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>
