<?php
include 'db_connect.php';  // Include the connection script

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $campaign_name = $_POST['campaign-name'];
    $month = $_POST['month'];
    $region = $_POST['region'];
    $campaign_type = $_POST['campaign-type'];
    $start_date = $_POST['start-date'];
    $end_date = $_POST['end-date'];
    $cpl = $_POST['cpl'];
    $multiple_dates = $_POST['multiple-dates'];

    // Sanitize form data
    $campaign_name = $conn->real_escape_string($campaign_name);
    $month = $conn->real_escape_string($month);
    $region = $conn->real_escape_string($region);
    $campaign_type = $conn->real_escape_string($campaign_type);
    $start_date = $conn->real_escape_string($start_date);
    $end_date = $conn->real_escape_string($end_date);
    $cpl = $conn->real_escape_string($cpl);
    $multiple_dates = $conn->real_escape_string($multiple_dates);

    // Insert data into the database
    $sql = "INSERT INTO campaigns (campaign_name, month, region, campaign_type, start_date, end_date, cpl, multiple_dates)
            VALUES ('$campaign_name', '$month', '$region', '$campaign_type', '$start_date', '$end_date', '$cpl', '$multiple_dates')";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error: " . $conn->error;
    }
}

$conn->close();
?>
