<!DOCTYPE html>
<html>
<head>
    <title>DOCTOR</title>
    <link rel="stylesheet" type="text/css" href="stylesdnr.css">
</head>
<body>
    <header>
    
        <a  class="logo"><span>B</span>lood<span>B</span>ridge</a>  
    
    </header>


  <section class="home" id="home">
    <div class="content">

    </div>

    <!------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------>

    <div class="controls">
        <span class="video-btn red " data-src="teqn.mp4"></span>
        <span class="video-btn" data-src="89a8368e-7275-487d-82e4-516ea5a17e9b.jpeg"></span>
 
    </div>
    <div class="video-container">
        <video src="teqn.mp4 " id="video-slider" loop autoplay muted></video>
        
    </div>
</section>

    <!------------------------------------------------------------------------------------>
    <!------------------------------------------------------------------------------------>

    <section class="book" id="book">
        <h1 class="heading">
            <span>D</span>
            <span>o</span>
            <span>C</span>
           
            <span>T</span>
            <span>O</span>
            <span>R</span>         
        </h1>
           
        <div class="row">
            <div class="image">
                <img src=" doctor.png" alt="">
            </div>

            <form action="login.php" method="POST">

                <div class="inputdiv">

               <h3>  Name:</h3>
                <input type="text" id="fullName_doctor" name="fullName_doctor" placeholder=" Name" required>
                </div>

<div class="inputdiv">

               <h3>City:</h3>
                <select id="adress_donor" name="adress_donor" required>
                    <option value="23">Annaba</option>
                    <option value="ob">Oum El Bouaghi</option>
                   <option value="5">Batna</option>
                   <option value="11">Tebessa</option>
                   <option value="19">Stif</option>
                                           
                   <option value="24">Guelma</option>
                  <option value="25">Constantine</option>
                   <option value="36">EL taref</option>
                    </select>
                </select>
</div>
<div class="inputdiv">
                <h3>Email:</h3>
                <input type="email" id="email_doctor" name="email_doctor" placeholder="Your Email" required>
                   </div>
                   <div class="inputdiv">
                <h3>Phone:</h3>
                <input type="tel" id="tel_doctor" name="tel_doctor" placeholder="Your Phone" required>
                   </div>
                   <div class="inputdiv">
                <h3>Password:</h3>
               <input type="text" id="password_doctor" name="password_doctor" required>
</div>
               <button onclick="location.href='.html'" class="btn"> Sign Up</button>
            </form>

        </section>

    <footer>
        <p>&copy; 2023 Blood Bridge</p>
    </footer>
    <script src="scriptdnr.js"></script>
</body>
</html>





<?php
include 'config.php';

// Get form data
$fullName = $_POST['fullName_labTech'];
$password = $_POST['password_labTech'];
$gender = $_POST['gender_labTech'];
$birthDate = $_POST['birthDate_labtech'];
$tel = $_POST['tel_labTech'];
$email = $_POST['email_labTech'];
$response = $_POST['response_labTech'];

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO labtech (fullName_labTech, password_labTech, gender_labTech, birthDate_labtech, tel_labTech, email_labTech, response_labTech) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisiss", $fullName, $password, $gender, $birthDate, $tel, $email, $response);
$stmt->execute();
$stmt->close();
// Close the database connection
$conn->close();

echo "Registration successful!";


// Get form data
$fullName = $_POST['name_hospital'];
$password = $_POST['password_hospital'];
$email = $_POST['email_labTech'];
$type = $_POST['type_hospital'];
$adress = $_POST['adress_hospital'];


// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO hospital (name_hospital, password_hospital, type_hospital, adress_hospital) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisiss", $fullName, $password, $type, $email, $adress);
$stmt->execute();
$stmt->close();
// Close the database connection
$conn->close();

echo "Registration successful!";



// Get form data
$fullName = $_POST['fullName_doctor'];
$password = $_POST['password_doctor'];
$gender = $_POST['gender_doctor'];
$birthDate = $_POST['birthDate_doctor'];
$tel = $_POST['tel_doctor'];
$email = $_POST['email_doctor'];
$valid =$_POST['doctor_validation'];
// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO doctor (fullName_doctor, password_doctor, gender_doctor, birthDate_doctor, tel_doctor, email_doctor, doctor_validation) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssisiss", $fullName, $password, $gender, $birthDate, $tel, $email, $response);
$stmt->execute();
$stmt->close();
// Close the database connection
$conn->close();

echo "Registration successful!";



// Get form data
$fullName = $_POST['fullName_donor'];
$password = $_POST['password_donor'];
$gender = $_POST['gender_doctor'];
$birthDate = $_POST['birthDate_donor'];
$tel = $_POST['tel_donor'];
$email = $_POST['email_donor'];
$blood= $_POST['bloodGrp_donor'];
$adress= $_POST['adress_donor'];
// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO donor (fullName_donor, password_donor, gender_donor, birthDate_donor, tel_donor, email_donor, adress_donor,bloodGrp_donor) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
$stmt->bind_param("ssisiss", $fullName, $password, $gender, $birthDate, $tel, $email, $blood,$adress);
$stmt->execute();
$stmt->close();
// Close the database connection
$conn->close();

echo "Registration successful!";



?>

