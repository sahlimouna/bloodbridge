<?php
$servername = "localhost";
$username = "mounasahli";
$password = "1607mouna";
$dbname = "bloodbridge&bbmanagment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve appointments
$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);

$appointments = [];

if ($result->num_rows > 0) {
    // Loop through each row and add to the appointments array
    while ($row = $result->fetch_assoc()) {
        $appointments[] = $row;
    }
}

$conn->close();

// Return the appointments as JSON
header('Content-Type: application/json');
echo json_encode($appointments);


// Assuming you have established a database connection

// Query to fetch appointments
$appointmentQuery = "SELECT appointment.Id_app, appointment.date_app, appointment.description_app, donor.fullName_donor, doctor.fullName_doctor
                     FROM appointment
                     INNER JOIN donor ON appointment.Id_donor = donor.Id_donor
                     INNER JOIN doctor ON appointment.Id_doctor = doctor.Id_doctor";

// Execute the query
$appointmentResult = mysqli_query($connection, $appointmentQuery);

// Check if any appointments exist
if (mysqli_num_rows($appointmentResult) > 0) {
    // Loop through the appointments and generate HTML
    while ($row = mysqli_fetch_assoc($appointmentResult)) {
        $appointmentId = $row['Id_app'];
        $appointmentDate = $row['date_app'];
        $appointmentDescription = $row['description_app'];
        $donorName = $row['fullName_donor'];
        $doctorName = $row['fullName_doctor'];

        // Generate HTML for each appointment
        echo "
        <div class='appointment'>
            <h3>Appointment ID: $appointmentId</h3>
            <p>Date: $appointmentDate</p>
            <p>Description: $appointmentDescription</p>
            <p>Donor: $donorName</p>
            <p>Doctor: $doctorName</p>
        </div>
        ";
    }
} else {
    echo "No appointments found.";
}

// Close the database connection
mysqli_close($connection);

?>