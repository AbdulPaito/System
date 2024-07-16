<?php
// Database connection parameters
$servername = "localhost";
$username = "your_db_username";
$password = "your_db_password";
$dbname = "dataregister";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM registrations";
$result = $conn->query($sql);

// Collect form data
$uli_number = $_POST['uli_number'];
$entry_date = $_POST['entry_date'];

if ($stmt->affected_rows > 0) {
    echo "Date inserted successfully into database.";
} else {
    echo "Error inserting date into database: " . $conn->error;
}

// Proceed with the rest of your code



$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$address_number_street = $_POST['address_number_street'];
$address_barangay = $_POST['address_barangay'];
$address_district = $_POST['address_district'];
$address_city_municipality = $_POST['address_city_municipality'];
$address_province = $_POST['address_province'];
$address_region = $_POST['address_region'];
$email_facebook = $_POST['email_facebook'];
$contact_no = $_POST['contact_no'];
$nationality = $_POST['nationality'];
$sex = $_POST['sex'];
$civil_status = $_POST['civil_status'];
$employment_status = $_POST['employment_status'];
$birth_month = $_POST['birth_month'];
$birth_day = $_POST['birth_day'];
$birth_year = $_POST['birth_year'];
$age = $_POST['age'];
$birthplace_city_municipality = $_POST['birthplace_city_municipality'];
$birthplace_province = $_POST['birthplace_province'];
$birthplace_region = $_POST['birthplace_region'];
$educational_attainment = $_POST['educational_attainment'];
$parent_guardian_name = $_POST['parent_guardian_name'];
$parent_guardian_address = $_POST['parent_guardian_address'];

// Insert data into database
$sql = "INSERT INTO learners_profile (uli_number, entry_date, last_name, first_name, middle_name, address_number_street, address_barangay, address_district, address_city_municipality, address_province, address_region, email_facebook, contact_no, nationality, sex, civil_status, employment_status, birth_month, birth_day, birth_year, age, birthplace_city_municipality, birthplace_province, birthplace_region, educational_attainment, parent_guardian_name, parent_guardian_address)
        VALUES ('$uli_number', '$entry_date', '$last_name', '$first_name', '$middle_name', '$address_number_street', '$address_barangay', '$address_district', '$address_city_municipality', '$address_province', '$address_region', '$email_facebook', '$contact_no', '$nationality', '$sex', '$civil_status', '$employment_status', '$birth_month', '$birth_day', '$birth_year', '$age', '$birthplace_city_municipality', '$birthplace_province', '$birthplace_region', '$educational_attainment', '$parent_guardian_name', '$parent_guardian_address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: regis2.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>