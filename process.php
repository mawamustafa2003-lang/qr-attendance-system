<?php
// process.php
header('Content-Type: application/json');

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

// Check if data exists
if (isset($input['qrData'])) {
    $qrData = $input['qrData'];
	echo $qrData;
include "conn.php";	
	$d1=1;
$sql="UPDATE  emp11 SET d5='$d1' WHERE d2='$qrData'";
	$result=mysql_query($sql);
    // Example: Log the QR data or process it
    file_put_contents('qr_log.txt', $qrData . PHP_EOL, FILE_APPEND);

    // Respond to the client
    echo json_encode(['status' => 'success', 'message' => 'QR data received.', 'data' => $qrData]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'No QR data received.']);
}
