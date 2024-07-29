<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Replace with recipient email addresses
    $to = 'spoofgupta2@gmail.com, franchestergenome@gmail.com';

    // Email subject
    $subject = 'New Campaign Update';

    // Email message body
    $message = 'A new campaign has been added. Here are the details: ' . "\r\n";
    $message .= 'Campaign Name: ' . $_POST['campaign-name'] . "\r\n";
    $message .= 'Month: ' . $_POST['month'] . "\r\n";
    $message .= 'Region: ' . $_POST['region'] . "\r\n";
    $message .= 'Campaign Type: ' . $_POST['campaign-type'] . "\r\n";
    $message .= 'Start Date: ' . $_POST['start-date'] . "\r\n";
    $message .= 'End Date: ' . $_POST['end-date'] . "\r\n";

    // Sender email address
    $from = 'ashutosh.singh@marketwavegen.com';

    // Email headers
    $headers = 'From: ' . $from . "\r\n";
    $headers .= 'Reply-To: ' . $from . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: multipart/mixed; boundary="boundary"' . "\r\n";

    // Attachments
    $attachments = array();

    if (!empty($_FILES['attachments']['name'][0])) {
        $file_count = count($_FILES['attachments']['name']);
        for ($i = 0; $i < $file_count; $i++) {
            $file_name = $_FILES['attachments']['name'][$i];
            $file_tmp = $_FILES['attachments']['tmp_name'][$i];
            $attachments[] = $file_tmp;
        }
    }

    foreach ($attachments as $attachment) {
        $file_content = file_get_contents($attachment);
        $file_encoded = base64_encode($file_content);

        $headers .= "--boundary\r\n";
        $headers .= 'Content-Type: application/octet-stream; name="' . basename($attachment) . '"' . "\r\n";
        $headers .= 'Content-Disposition: attachment; filename="' . basename($attachment) . '"' . "\r\n";
        $headers .= 'Content-Transfer-Encoding: base64' . "\r\n\r\n";
        $headers .= chunk_split($file_encoded) . "\r\n";
    }

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email.';
    }
}
?>
