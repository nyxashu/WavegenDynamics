<?php
header('Content-Type: application/json');

// Database connection
$host = 'localhost';
$dbname = 'u924372753_wavegendynamic';
$username = 'u924372753_root';
$password = 'Wavegendynamics2024';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch data query
    $stmt = $pdo->query('SELECT total_employees, active_projects, pending_leaves FROM your_table_name LIMIT 1');
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode($data);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
