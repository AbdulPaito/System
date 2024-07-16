<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dataregister";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$classifications = isset($_POST['classification']) ? implode(',', $_POST['classification']) : '';
$disabilities = isset($_POST['disability']) ? implode(',', $_POST['disability']) : '';
$causes_of_disability = isset($_POST['cause_of_disability']) ? implode(',', $_POST['cause_of_disability']) : '';
$taken_ncae = isset($_POST['taken_ncae']) ? $_POST['taken_ncae'] : '';
$where = isset($_POST['where']) ? $_POST['where'] : '';
$when = isset($_POST['when']) ? $_POST['when'] : '';
$qualification = isset($_POST['qualification']) ? $_POST['qualification'] : '';
$scholarship = isset($_POST['scholarship']) ? $_POST['scholarship'] : '';
$privacy_disclaimer = isset($_POST['privacy_disclaimer']) ? $_POST['privacy_disclaimer'] : '';
$applicant_signature = isset($_POST['applicant_signature']) ? $_POST['applicant_signature'] : '';
$date_accomplished = isset($_POST['date_accomplished']) ? $_POST['date_accomplished'] : '';
$registrar_signature = isset($_POST['registrar_signature']) ? $_POST['registrar_signature'] : '';
$date_received = isset($_POST['date_received']) ? $_POST['date_received'] : '';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO registrations (classification, disability, cause_of_disability, taken_ncae, `where`, `when`, qualification, scholarship, privacy_disclaimer, applicant_signature, date_accomplished, registrar_signature, date_received) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssssssss", $classifications, $disabilities, $causes_of_disability, $taken_ncae, $where, $when, $qualification, $scholarship, $privacy_disclaimer, $applicant_signature, $date_accomplished, $registrar_signature, $date_received);

if ($stmt->execute()) {
    echo "New record created successfully";
    header("Location: login.php");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
