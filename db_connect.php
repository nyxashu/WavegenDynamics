<?php
$servername = "localhost";
$username = "u924372753_user"; 
$password = "AshuMarket@2023";   
$dbname = "u924372753_campaign_db"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
