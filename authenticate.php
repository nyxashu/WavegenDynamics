<?php
// Define the username and password
$valid_username = "Sean";
$valid_password = "2024";

// Database connection parameters
$servername = "localhost"; // Hostinger's MySQL server address
$username = "u924372753_root"; // Your MySQL username
$password = "Wavegendynamics2024"; // Your MySQL password
$database = "u924372753_wavegendynamic"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// API endpoint to authenticate user
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $username = $data['username'];
    $password = $data['password'];

    // Check if the provided username and password match the valid credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        http_response_code(200); // OK
    } else {
        // Authentication failed
        http_response_code(401); // Unauthorized
    }
}
    
// Close connection
$conn->close();
?>
