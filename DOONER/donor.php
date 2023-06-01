<?php
if ($_SERVER["REQUEST_METHODE"] == "POST"){
    $fullName = $_POST["fullname"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $gender = $_POST["gender"];
    $weight = $_POST["weight"];
   
    $bloodGroup = $_POST["bloodGroup"];
    // do something with the form data, like save it to a database

    // redirect to a confirmation page
    header("Location: confirmation.php");
    exit();
  }  
 if ($_SERVER["REQUEST_METHODE"] == "POST"){
     $dateOfBirth = $_POST['date'];
     $city = $_POST["city"];
 
     $gender = $_POST["gender"];
     $fullName = $_POST["fullname"];
     $email = $_POST["email"];
 }
?>



