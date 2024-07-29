function attachFiles() {
    var fileInput = document.getElementById('file-input');
    fileInput.click();
}
function addCampaign(event) {
    event.preventDefault();

    // Get form values
    var campaignName = document.getElementById("campaign-name").value;
    var month = document.getElementById("month").value;
    var region = document.getElementById("region").value;
    var campaignType = document.getElementById("campaign-type").value;
    var startDate = document.getElementById("start-date").value;
    var endDate = document.getElementById("end-date").value;

    // Add new row to the table
    var table = document.getElementById("campaign-table").getElementsByTagName("tbody")[0];
    var newRow = table.insertRow(0);
    var cells = [
        newRow.insertCell(0),
        newRow.insertCell(1),
        newRow.insertCell(2),
        newRow.insertCell(3),
        newRow.insertCell(4),
        newRow.insertCell(5)
    ];
    cells[0].innerText = campaignName;
    cells[1].innerText = month;
    cells[2].innerText = region;
    cells[3].innerText = campaignType;
    cells[4].innerText = startDate;
    cells[5].innerText = endDate;

    // Reset form and hide form
    document.getElementById("campaign-form").reset();
    document.getElementById("add-campaign-form").style.display = "none";

    // Submit form data using AJAX
    var formData = new FormData(document.getElementById("campaign-form"));
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "send_email.php", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log("Email sent successfully!");
        } else {
            console.error("Error sending email.");
        }
    };
    xhr.send(formData);
}
