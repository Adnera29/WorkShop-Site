<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $fname = $_POST['fname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $course = $_POST['course'];
    $lang = $_POST['lang'];

    //Database Connection
    $conn=new mysqli('localhost','root','','database');

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into registration_data(fname,gender,age,mob,email,address,city,pin,state,country,course,lang)values(?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param("ssiisssissss",$fname,$gender,$age,$mob,$email,$address,$city,$pin,$state,$country,$course,$lang);

        $stmt->execute();

        echo '<h1 align="center" style="background-color: black; color: white;">Registration Successful</h1>';
        echo '<table align="center">';
        echo '<tr>';
        echo '<td>';
        echo '<h3 align="center">Your Entered Details Are As Follows:- </h3>';
        echo '</td>';
        echo '</tr>';
        // echo '<h4 align="center">';
        echo '<tr>';
        echo '<td>';
        echo "<b>Name:-</b> ".$fname;
        // echo '<br>';
        echo '</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>';
        echo "<b>Gender:-</b> ".$gender;
        echo '</td>';
        echo '</tr>';
        //echo '<br>';
        echo '<tr>';
        echo '<td>';
        echo "<b>Age:-</b> ".$age;
        echo '</td>';
        echo '</tr>';
        //echo '<br>';
        echo '<tr>';
        echo '<td>';
        echo "<b>Contact No.:-</b> ".$mob;
        echo '</td>';
        echo '</tr>';
        //echo '<br>';
        echo '<tr>';
        echo '<td>';
        echo "<b>Email:-</b> ".$email;
        echo '</td>';
        echo '</tr>';
        //echo '<br>';
        echo '<tr>';
        echo '<td>';
        echo "<b>Address:-</b> ".$address;
        echo '</td>';
        echo '</tr>';
        //echo '<br>';
        echo '<tr>';
        echo '<td>';
        echo "<b>City:-</b> ".$city;
        echo '</td>';
        echo '</tr>';
        //echo '<br>';
        echo '<tr>';
        echo '<td>';
        echo "<b>Pincode:-</b> ".$pin;
        echo '</td>';
        echo '</tr>';
        //echo '<br>';
        echo '<tr>';
        echo '<td>';
        echo "<b>State:-</b> ".$state;
        echo '</td>';
        echo '</tr>';
        //echo '<br>';
        echo '<tr>';
        echo '<td>';
        echo "<b>Country:-</b> ".$country;
        echo '</td>';
        echo '</tr>';
       // echo '<br>';
        echo '<tr>';
        echo '<td>';
        echo "<b>Course:-</b> ".$course;
        echo '</td>';
        echo '</tr>';
        //echo '<br>';
        echo '<tr>';
        echo '<td>';
        echo "<b>Language Opted:-</b> ".$lang;
        echo '</td>';
        echo '</tr>';
        // 
        // echo '</h4>';
        echo '</table>';
        echo '<br>';
        echo '<h1 align="center" style="background-color: black; color: white;">Thank You For Enrolling </h1>';
        
        $stmt->close();
        $conn->close();
    }
?>

</body>
</html>