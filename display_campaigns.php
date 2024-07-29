<?php
include 'db_connect.php';  // Include the connection script

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// SQL query to select all data from the campaigns table
$sql = "SELECT * FROM campaigns";

// Execute the query
$result = $conn->query($sql);

// Check if there are any rows returned
if ($result->num_rows > 0) {
    echo '<table id="campaign-table"><thead><tr><th>Campaign Name</th><th>Month</th><th>Region</th><th>Campaign Type</th><th>Start Date</th><th>End Date</th><th>CPL</th><th>Multiple Dates</th></tr></thead><tbody>';
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["campaign_name"] . "</td><td>" . $row["month"] . "</td><td>" . $row["region"] . "</td><td>" . $row["campaign_type"] . "</td><td>" . $row["start_date"] . "</td><td>" . $row["end_date"] . "</td><td>" . $row["cpl"] . "</td><td>" . $row["multiple_dates"] . "</td></tr>";
    }
    echo '</tbody></table>';
} else {
    echo "0 results";
}

$conn->close();
?>
