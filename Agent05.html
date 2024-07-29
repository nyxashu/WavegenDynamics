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
    background-image: url('https://thetechmarketer.com/wp-content/uploads/2024/05/14979246_SL_060521_43530_02.jpg'); /* Replace 'path_to_your_image.jpg' with the actual path to your image */
    background-size: cover; /* Ensure the background image covers the entire body */
    background-repeat: no-repeat; /* Prevent the background image from repeating */
}

.container {
    max-width: 1350px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent background color to improve readability */
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
    transform: translateY(-1px); /* Move the button slightly up on hover */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
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

.add-button {
    display: block;
    width: 150px; /* Adjust width if needed */
    padding: 10px;
    margin: 20px auto; /* Center the button */
    text-align: center;
    background-color: #38B6FF;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.add-button:hover {
    background-color: #0056b3;
    transform: translateY(-1px); /* Move the button slightly up on hover */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
}

.send-email-button {
    display: block;
    width: 150px; /* Adjust width if needed */
    padding: 10px;
    margin: 10px auto; /* Center the button */
    text-align: center;
    background-color: #FAD02C;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
  
.send-email-button:hover {
    background-color: #38B6FF;
    transform: translateY(-1px); /* Move the button slightly up on hover */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
}
</style>

</head>
<body>

<div class="container">
    <h1>ADDIE Dashboard</h1>
    <div class="header-buttons">
        <a href="https://wavegendynamics.online/leads_dashboard.html" class="dashboard-button">Leads Dashboard</a>
        <a href="https://wavegendynamics.online/delivery_dashboard.html" class="dashboard-button">Delivery Dashboard</a>
        <a href="https://wavegendynamics.online/HR.html" class="dashboard-button">Hr Dashboard</a>
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
            // Database connection
            $conn = new mysqli('localhost:3307', '', '', 'mw');
            if($conn->connect_error) {
                die('Connection Failed : '.$conn->connect_error);
            }

            // Select query
            $sql = "SELECT * FROM campaign_form";

            // Execute query
            $result = $conn->query($sql);

            // Check if there are any rows returned
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["campaignName"]."</td>";
                    echo "<td>".$row["month"]."</td>";
                    echo "<td>".$row["region"]."</td>";
                    echo "<td>".$row["campaignType"]."</td>";
                    echo "<td>".$row["startDate"]."</td>";
                    echo "<td>".$row["endDate"]."</td>";
                    // Add more columns if needed
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }

            // Close connection
            $conn->close();
            ?><!-- Table rows will be added dynamically using JavaScript -->
        </tbody>
    </table>
   <!-- Modal -->
<div id="agentModal" class="modal">
  <div class="modal-content">
   <span class="close" onclick="closeModal()">&times;</span>
   <div class="button-container">
    <a class="agent-button" href="https://wavegendynamics.online/Agent01.html" target="_blank" >Agent 01</a>
     <a class="agent-button" href="https://wavegendynamics.online/Agent02.html" target="_blank" >Agent 02</a>
      <a class="agent-button" href="https://wavegendynamics.online/Agent03.html" target="_blank" >Agent 03</a>
       <a class="agent-button" href="https://wavegendynamics.online/Agent04.html" target="_blank" >Agent 04</a>
        <a class="agent-button" href="https://wavegendynamics.online/Agent05.html" target="_blank" >Agent 05</a>
         <a class="agent-button" href="https://wavegendynamics.online/Agent05.html" target="_blank" >Agent 06</a>
   <!-- Add more buttons as needed -->
   </div>
  </div>
 </div> 
    <div class="add-button-wrapper">
        <a href="#" class="add-button" onclick="showForm()">Add Campaign</a>
        <a href="#" class="send-email-button" id="send-email-button">Send Email</a>
        <input type="file" id="file-input" name="attachments[]" style="display: none;">
        <button id="submit-button" style="display: none;">Submit</button>
    </div>
    
    <div id="add-campaign-form" style="display: none;">
        <h2 style="text-align: center;">Add New Campaign</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="campaign-form" style="text-align: center;">
        <label for="campaign-name">Campaign Name:</label><br>
        <input type="text" id="campaign-name" name="campaign-name" autocomplete="off" required><br><br>

        <label for="month">Month:</label><br>
        <select id="month" name="month" class="select-input" style="width: 180px;" autocomplete="off">
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select><br><br>

        <label for="region">Region:</label><br>
        <select id="region" name="region" class="select-input" style="width: 180px;" autocomplete="off">
            <option value="Middle East">Middle East</option>
            <option value="East">East</option>
            <option value="Asia">Asia</option>
            <option value="Europe">Europe</option>
            <option value="Asia Pacific">Asia Pacific</option>
            <option value="North America">North America</option>
            <option value="USA-Canada">USA-Canada</option>
            <option value="USA">USA</option>
            <option value="South America">South America</option>
        </select><br><br>

        <label for="campaign-type">Campaign Type:</label><br>
        <select id="campaign-type" name="campaign-type" class="select-input" style="width: 180px;" autocomplete="off">
            <option value="BANT">BANT</option>
            <option value="CCL">CCL</option>
            <option value="MQL">MQL</option>
            <option value="SQL">SQL</option>
            <option value="HQL">HQL</option>
            <option value="White Paper">White Paper</option>
            <option value="List">List</option>
            <option value="AG">Appointment Generation</option>
        </select><br><br>

        <label for="start-date">Start Date:</label><br>
        <div>
            <input type="text" id="start-date" name="start-date" class="datepicker-input" autocomplete="off" required>
            <i class="calendar-icon" id="start-date-picker">&#128197;</i>
        </div><br>

        <label for="end-date">End Date:</label><br>
        <div>
            <input type="text" id="end-date" name="end-date" class="datepicker-input" autocomplete="off" required>
            <i class="calendar-icon" id="end-date-picker">&#128197;</i>
        </div><br>

        <!-- New Slot: CPL -->
        <label for="cpl">Cost Per Lead (CPL):</label><br>
        <input type="text" id="cpl" name="cpl" autocomplete="off" required><br><br>

        <!-- New Slot: End Delivery Date -->
        <label for="end-delivery-date">End Delivery Date:</label><br>
        <input type="text" id="end-delivery-date" name="end-delivery-date" class="datepicker-input" autocomplete="off" required>
        <i class="calendar-icon" id="end-delivery-date-picker">&#128197;</i><br><br>

        <input type="submit" value="Submit" style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are set and not empty
    if(isset($_POST['campaign-name'], $_POST['month'], $_POST['region'], $_POST['campaign-type'], $_POST['start-date'], $_POST['end-date'], $_POST['cpl'], $_POST['end-delivery-date'])) {
        // Sanitize user inputs to prevent SQL injection
        $campaignName = htmlspecialchars($_POST['campaign-name']);
        $month = htmlspecialchars($_POST['month']);
        $region = htmlspecialchars($_POST['region']);
        $campaignType = htmlspecialchars($_POST['campaign-type']);
        $startDate = htmlspecialchars($_POST['start-date']);
        $endDate = htmlspecialchars($_POST['end-date']);
        $cpl = htmlspecialchars($_POST['cpl']);
        $endDeliveryDate = htmlspecialchars($_POST['end-delivery-date']);

        // Database connection
        $conn = new mysqli('localhost:3306', 'u924372753_root', 'Wavegendynamics2024', 'u924372753_wavegendynamic');
        if($conn->connect_error) {
            die('Connection Failed : '.$conn->connect_error);
        }

        // Insert data into the database
        $stmt = $conn->prepare("INSERT INTO campaign_form (campaignName, month, region, campaignType, startDate, endDate, cpl, endDeliveryDate) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $campaignName, $month, $region, $campaignType, $startDate, $endDate, $cpl, $endDeliveryDate);
        if ($stmt->execute()) 
        {
            echo "Campaign added successfully.";
            echo '<script>clearForm();</script>';
        } 
        else 
        {
            echo "Error: " . $stmt->error;
        }

        // Close connections
        $stmt->close();
        $conn->close();
    } else {
        echo "All fields are required.";
    }
}
?>
</div>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>

function clearForm() {
        document.getElementById("campaign-name").value = "";
        document.getElementById("month").selectedIndex = 0;
        document.getElementById("region").selectedIndex = 0;
        document.getElementById("campaign-type").selectedIndex = 0;
        document.getElementById("start-date").value = "";
        document.getElementById("end-date").value = "";
        document.getElementById("cpl").value = "";
        document.getElementById("end-delivery-date").value = "";
    }
// Initialize datepickers
// Initialize Flatpickr for date inputs
var dateInputs = document.querySelectorAll(".datepicker-input");
    dateInputs.forEach(function(input) {
        flatpickr(input, {
            dateFormat: "Y-m-d", // Set the date format
            minDate: "today" // Set the minimum selectable date to today
        });
    });

    // Function to validate start and end dates
    function validateDates() {
        var startDate = new Date(document.getElementById("start-date").value);
        var endDate = new Date(document.getElementById("end-date").value);

        if (startDate >= endDate) {
            alert("End date must be after start date.");
            return false;
        }
        return true;
    }

// Function to show the add campaign form
function showForm() {
    document.getElementById('add-campaign-form').style.display = 'block';
}

// Function to close the modal
function closeModal() {
    document.getElementById('agentModal').style.display = 'none';
}

// Function to open the modal
function openModal() {
    document.getElementById('agentModal').style.display = 'block';
}

// Function to submit the form
function addCampaign(event) {
    event.preventDefault();
    const formData = new FormData(event.target);
    const campaignName = formData.get('campaign-name');
    const month = formData.get('month');
    const region = formData.get('region');
    const campaignType = formData.get('campaign-type');
    const startDate = formData.get('start-date');
    const endDate = formData.get('end-date');
    const cpl = formData.get('cpl');
    const endDeliveryDate = formData.get('end-delivery-date');

    // Perform any server-side validation or processing here
    // ...

    // Clear the form
    event.target.reset();

    // Close the modal
    closeModal();

    // Add the new campaign to the table
    addCampaignToTable(campaignName, month, region, campaignType, startDate, endDate);
}

// Function to add a new campaign to the table
function addCampaignToTable(campaignName, month, region, campaignType, startDate, endDate) {
    const table = document.getElementById('campaign-table').getElementsByTagName('tbody')[0];
    const newRow = table.insertRow(table.rows.length);
    const cells = [
        newRow.insertCell(0),
        newRow.insertCell(1),
        newRow.insertCell(2),
        newRow.insertCell(3),
        newRow.insertCell(4),
        newRow.insertCell(5)
    ];

    cells[0].appendChild(document.createTextNode(campaignName));
    cells[1].appendChild(document.createTextNode(month));
    cells[2].appendChild(document.createTextNode(region));
    cells[3].appendChild(document.createTextNode(campaignType));
    cells[4].appendChild(document.createTextNode(startDate));
    cells[5].appendChild(document.createTextNode(endDate));
}
</script>
</body>
</html>
