<?php
session_start();
include 'db_con.php';

if (isset($_POST['uname']) && isset($_POST['password'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }

    if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM form_data WHERE user_name = '$uname' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_name'] === $uname && $row['password'] === $pass) {
            // Set session variables
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['Id'] = $row['Id'];
            
            // Check if the user is an admin
            if ($row['user_type'] === 'admin') {
                header("Location: admin.php"); // Redirect to admin page
            } else {
                header("Location: home.php"); // Redirect to user home page
            }
            exit();
        } else {
            header("Location: index.php?error=Incorrect User Name or Password");
            exit();
        }
    } 
    else {
        header("Location: index.php?error=Incorrect User Name or Password");
        exit();
    }
}
?>







<?php
session_start();
include 'db_con.php';

if (isset($_POST['uname']) && isset($_POST['password'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }

    if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM form_data WHERE user_name = '$uname' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_name'] === $uname && $row['password'] === $pass) {
            // Set session variables
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['Id'] = $row['Id'];

            // Check if the user is an admin
            if ($row['user_type'] === 'admin') {
                header("Location: admin.php"); // Redirect to admin page
            } else {
                header("Location: home.php"); // Redirect to user home page
            }
            exit();
        } else {
            header("Location: index.php?error=Incorrect User Name or Password");
            exit();
        }
    } else {
        header("Location: index.php?error=Incorrect User Name or Password");
        exit();
    }
}
?>


