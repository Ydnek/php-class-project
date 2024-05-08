<?php

include 'db_con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usertype = filter_var($_POST["user_type"], FILTER_SANITIZE_STRING);
    $fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
    $uname = filter_var($_POST["uname"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $gender = filter_var($_POST["gender"], FILTER_SANITIZE_STRING);
    $dob = filter_var($_POST["dob"], FILTER_SANITIZE_STRING);
    $city = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
    $edulvl = filter_var($_POST["edulvl"], FILTER_SANITIZE_STRING);
    $comment = $_POST["desc"]; 
    $pass = $_POST["password"];

    if (empty($fname) || empty($fname) || empty($uname) || empty($email) || empty($gender) || empty($dob) || empty($city) || empty($edulvl) || empty($pass)) {
        echo "All fields are required.";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit();
    }

    // Assuming $conn is a valid database connection
    $sql = "INSERT INTO form_data (user_type,fname, user_name, password, email, gender, dob, education, city, comment)
            VALUES ('$usertype','$fname', '$uname', '$pass', '$email', '$gender', '$dob', '$edulvl', '$city', '$comment')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Inserted Successfully";
        header('Location: index.php?error=Inserted Successfully'); 
        exit();
    } else {
        echo "Error inserting data into the database.";
        header('Location: index.php?error=Error inserting data into the database.'); 
        exit();
    }
}


?>
