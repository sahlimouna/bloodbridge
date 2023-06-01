<?php
// Database connection parameters

$servername = "localhost";
$username = "mounasahli";
$password = "1607mouna";
$dbname = "bloodbridge&bloodbag";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch records from the bloodbag table
$sql = "SELECT * FROM bloodbag";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['code_bb']."</td>";
        echo "<td>".$row['bloodGrp_donor']."</td>";
        echo "<td>".$row['vol_bb']."</td>";
        echo "<td>".$row['status_bb']."</td>";
        echo "<td>".$row['date_don']."</td>";
        echo "<td>".$row['date_exp']."</td>";
        echo "<td>".$row['type_bb']."</td>";
        echo "<td>".$row['Id_donor']."</td>";
        echo "<td>".$row['Id_result']."</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='9'>No records found</td></tr>";
}

// Close the database connection
$conn->close();


?>