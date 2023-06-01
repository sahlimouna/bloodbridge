<?php

$servername = "localhost";
$username = "mounasahli";
$password = "1607mouna";
// Retrieve form data
$date = $_POST['date'];
$result = $_POST['result'];
$bloodCode = $_POST['bloodCode'];
$seeker = $_POST['seeker'];

// Perform database insertion
// Assuming you have a database connection established

// Prepare the SQL query
$sql = "INSERT INTO comptest (date_comptest, result, code_bb, Id_seeker) 
        VALUES ('$date', $result, '$bloodCode', $seeker)";

// Execute the query
if (mysqli_query($connection, $sql)) {
  echo "Test result submitted successfully.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// Close the database connection
mysqli_close($connection);
?>