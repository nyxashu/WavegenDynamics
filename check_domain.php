<?php
// check_domain.php

header('Content-Type: application/json');

if (isset($_POST['domain'])) {
    $domain = $_POST['domain'];

    // Perform SSL certificate check using cURL
    $ch = curl_init("https://$domain");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if (!$error) {
        // SSL certificate is valid
        $ssl_health = "Good";
    } else {
        // SSL certificate error
        $ssl_health = "Bad";
    }

    // Determine credibility score based on SSL health
    if ($ssl_health === "Bad") {
        $credibility_score = 0; // Bad
    } else {
        // Generate random credibility score for demonstration purposes
        $credibility_score = rand(1, 100);
    }

    // Determine health status based on credibility score
    if ($credibility_score <= 25) {
        $health = "Poor";
    } elseif ($credibility_score <= 75) {
        $health = "Fair";
    } else {
        $health = "Good";
    }

    // Return response as JSON
    $response = [
        'domain' => $domain,
        'ssl_health' => $ssl_health,
        'credibility_score' => $credibility_score,
        'health' => $health
    ];

    echo json_encode($response);
} else {
    echo json_encode(['error' => 'No domain provided']);
}
?>
