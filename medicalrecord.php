
<?php
  // Connect to the database
  $conn = mysqli_connect('localhost', 'username', 'password', 'donation&bbmanagment');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Retrieve medical records from the database
  $sql = "SELECT * FROM medicalrecord";
  $result = mysqli_query($conn, $sql);

  // Display medical records in the table
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$row['Id_medrec']."</td>";
      echo "<td>".$row['tension']."</td>";
      echo "<td>".$row['weight']."</td>";
      echo "<td>".$row['temperature']."</td>";
      echo "<td>".$row['type_don']."</td>";
      echo "<td>".$row['other_exams']."</td>";
      echo "<td>".$row['date_medrec']."</td>";
      echo "<td>".$row['last_don']."</td>";
      echo "<td>".$row['doctor_validation']."</td>";
      echo "<td>".$row['type_bb']."</td>";
      echo "<td>".$row['Id_donor']."</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='11'>No records found</td></tr>";
  }

  // Close the database connection
  mysqli_close($conn);
?>