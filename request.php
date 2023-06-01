<?php
// Establish a database connection

$servername = "localhost";
$username = "mounasahli";
$password = "1607mouna";
$conn = new mysqli($servername, $username, $password, $dbname);


// Retrieve form data
$date = $_POST['date'];
$bloodGroup = $_POST['bloodGroup'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$hospital = $_POST['hospital'];
$requester = $_POST['requester'];

// Perform database insertion
// Assuming you have a database connection established

// Prepare the SQL query
$sql = "INSERT INTO bbrequest (date_bbReq, bloodGrp_seeker, type_bb, qty, Id_hospital, Id_seeker) 
        VALUES ('$date', '$bloodGroup', '$type', $quantity, $hospital, $requester)";

// Execute the query
if (mysqli_query($connection, $sql)) {
  echo "Request submitted successfully.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);


// Assuming you have established a database connection

// Query to fetch blood bag requests
$bbRequestQuery = "SELECT bbrequest.Id_bbReq, bbrequest.date_bbReq, bbrequest.bloodGrp_seeker, bbrequest.type_bb, bbrequest.qty, hospital.name_hospital, seeker.fullName_seeker
                   FROM bbrequest
                   INNER JOIN hospital ON bbrequest.Id_hospital = hospital.Id_hospital
                   INNER JOIN seeker ON bbrequest.Id_seeker = seeker.Id_seeker";

// Execute the query
$bbRequestResult = mysqli_query($connection, $bbRequestQuery);

// Check if any blood bag requests exist
if (mysqli_num_rows($bbRequestResult) > 0) {
    // Loop through the blood bag requests and generate HTML
    while ($row = mysqli_fetch_assoc($bbRequestResult)) {
        $bbRequestId = $row['Id_bbReq'];
        $bbRequestDate = $row['date_bbReq'];
        $bloodGroup = $row['bloodGrp_seeker'];
        $bbRequestType = $row['type_bb'];
        $bbRequestQty = $row['qty'];
        $hospitalName = $row['name_hospital'];
        $seekerName = $row['fullName_seeker'];

        // Generate HTML for each blood bag request
        echo "
        <div class='bb-request'>
            <h3>Request ID: $bbRequestId</h3>
            <p>Date: $bbRequestDate</p>
            <p>Blood Group: $bloodGroup</p>
            <p>Type: $bbRequestType</p>
            <p>Quantity: $bbRequestQty</p>
            <p>Hospital: $hospitalName</p>
            <p>Seeker: $seekerName</p>
        </div>
        ";
    }
} else {
    echo "No blood bag";
  }

?>