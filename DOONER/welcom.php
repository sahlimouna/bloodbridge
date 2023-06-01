<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    echo "<p>username ".$username  ."</p>";
    echo "<p>password ".$password  ."</p>";



    // Add your validation and authentication logic here
    // ...

    // If authentication is successful, redirect to another page
    header("Location: otherpage.php");
    exit();
}

if(isset($_POST['Send'])){
    $username = $_POST['tel'];

     
    echo "<p>tel ".$tel  ."</p>";
   
}


if(isset($_POST['Next'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    echo "<p>username ".$username  ."</p>";
    echo "<p>passworde ".$password  ."</p>";

    // Add your validation and authentication logic here
    // ...

    // If authentication is successful, redirect to another page
    header("Location: otherpage.php");
    exit();
}
if(isset($_POST['next']))
?>