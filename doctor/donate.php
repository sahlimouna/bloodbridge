
<form action="donate.php" method="POST" onsubmit="showThankYouMessage();">
  <!-- بقية العناصر في النموذج -->
  <input type="submit" value="تبرع" class="btn">
</form>
<?php
// استقبال البيانات من النموذج
$name = $_POST['name'];
$email = $_POST['email'];
$bloodType = $_POST['bloodType'];

// إجراء اتصال بقاعدة البيانات
$servername = "localhost";
$username = "Macbook Air";
$password = "mouna";
$dbname = "اسم_قاعدة_البيانات";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// إدخال بيانات المستخدم في جدول المستخدمين
$sql = "INSERT INTO users (name, email, blood_type) VALUES ('$name', '$email', '$bloodType')";

if ($conn->query($sql) === TRUE) {
  echo "User saved successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
