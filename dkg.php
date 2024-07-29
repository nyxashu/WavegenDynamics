<?php
// Database credentials
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $campaignName = $_POST['campaign-name'];
    $month = $_POST['month'];
    $region = $_POST['region'];
    $campaignType = $_POST['campaign-type'];
    $startDate = $_POST['start-date'];
    $endDate = $_POST['end-date'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO campaigns (campaign_name, month, region, campaign_type, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $campaignName, $month, $region, $campaignType, $startDate, $endDate);

    // Execute the query
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Fetch data from the database
$sql = "SELECT campaign_name, month, region, campaign_type, start_date, end_date FROM campaigns";
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Wavegen</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://thetechmarketer.com/wp-content/uploads/2024/05/14979246_SL_060521_43530_02.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .container {
            max-width: 1350px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8);
        }
        h1 {
            text-align: center;
        }
        .header-buttons {
            text-align: right;
            margin-bottom: 20px;
        }
        .dashboard-button {
            display: inline-block;
            padding: 10px 20px;
            margin-left: 10px;
            background-color: #38B6FF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .dashboard-button:hover {
            background-color: #0056b3;
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        .add-button, .send-email-button {
            display: block;
            width: 150px;
            padding: 10px;
            margin: 20px auto;
            text-align: center;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .add-button {
            background-color: #38B6FF;
        }
        .add-button:hover, .send-email-button:hover {
            background-color: #0056b3;
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .send-email-button {
            background-color: #FAD02C;
        }
        .send-email-button:hover {
            background-color: #38B6FF;
        }
        #add-campaign-form {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>ADDIE Dashboard</h1>
    <div class="header-buttons">
        <a href="https://wavegendynamics.online/leads_dashboard.html" class="dashboard-button">Leads Dashboard</a>
        <a href="https://wavegendynamics.online/delivery_dashboard.html" class="dashboard-button">Delivery Dashboard</a>
        <a href="https://wavegendynamics.online/HR.html" class="dashboard-button">HR Dashboard</a>
        <a href="https://wavegendynamics.online/" class="dashboard-button">Home</a>
        <a href="#" class="dashboard-button" onclick="openModal()">View Agents</a>
        <a href="https://wavegendynamics.online/master_dashboard.html" class="dashboard-button">Watchtower</a>
    </div>
    <table id="campaign-table">
        <thead>
            <tr>
                <th>Campaign Name</th>
                <th>Month</th>
                <th>Region</th>
                <th>Campaign Type</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["campaign_name"] . "</td>";
                    echo "<td>" . $row["month"] . "</td>";
                    echo "<td>" . $row["region"] . "</td>";
                    echo "<td>" . $row["campaign_type"] . "</td>";
                    echo "<td>" . $row["start_date"] . "</td>";
                    echo "<td>" . $row["end_date"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div id="agentModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="button-container">
                <a class="agent-button" href="https://wavegendynamics.online/Agent01.html" target="_blank">Agent 01</a>
                <a class="agent-button" href="https://wavegendynamics.online/Agent02.html" target="_blank">Agent 02</a>
                <a class="agent-button" href="https://wavegendynamics.online/Agent03.html" target="_blank">Agent 03</a>
                <a class="agent-button" href="https://wavegendynamics.online/Agent04.html" target="_blank">Agent 04</a>
                <a class="agent-button" href="https://wavegendynamics.online/Agent05.html" target="_blank">Agent 05</a>
                <a class="agent-button" href="https://wavegendynamics.online/Agent05.html" target="_blank">Agent 06</a>
            </div>
        </div>
    </div> 
    <div class="add-button-wrapper">
        <a href="#" class="add-button" onclick="showForm()">Add Campaign</a>
        <a href="#" class="send-email-button" id="send-email-button">Send Email</a>
        <input type="file" id="file-input" name="attachments[]" style="display: none;">
        <button id="submit-button" style="display: none;">Submit</button>
    </div>
    
    <div id="add-campaign-form">
        <form method="post" action="">
            <div>
                <label for="campaign-name">Campaign Name:</label>
                <input type="text" id="campaign-name" name="campaign-name" required>
            </div>
            <div>
                <label for="month">Month:</label>
                <input type="text" id="month" name="month" required>
            </div>
            <div>
                <label for="region">Region:</label>
                <input type="text" id="region" name="region" required>
            </div>
            <div>
                <label for="campaign-type">Campaign Type:</label>
                <input type="text" id="campaign-type" name="campaign-type" required>
            </div>
            <div>
                <label for="start-date">Start Date:</label>
                <input type="date" id="start-date" name="start-date" required>
            </div>
            <div>
                <label for="end-date">End Date:</label>
                <input type="date" id="end-date" name="end-date" required>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    function openModal() {
        document.getElementById("agentModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("agentModal").style.display = "none";
    }

    function showForm() {
        document.getElementById("add-campaign-form").style.display = "block";
    }

    document.getElementById("send-email-button").addEventListener("click", function() {
        document.getElementById("file-input").click();
    });

    document.getElementById("file-input").addEventListener("change", function() {
        var file = this.files[0];
        var formData = new FormData();
        formData.append("attachment", file);

        axios.post("/upload.php", formData, {
            headers: {
                "Content-Type": "multipart/form-data"
            }
        }).then(function(response) {
            console.log(response.data);
        }).catch(function(error) {
            console.error("Error uploading file:", error);
        });
    });

    flatpickr("#start-date");
    flatpickr("#end-date");
</script>

</body>
</html>
