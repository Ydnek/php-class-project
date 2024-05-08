<?php 
    $host = "localhost";
    $dbname = "form_db";
    $username = "root";
    $password = "";

    $conn = mysqli_connect( hostname:$host,
                username:$username,
                password:$password,
                database:$dbname);

        if(!$conn){
            echo "Connection Failed";
        }
?>