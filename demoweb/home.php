<?php
include 'db_con.php';
session_start();

if(isset($_SESSION['Id']) && isset($_SESSION['user_name'])){
    $id = $_SESSION['Id'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="info">
        <h1>Hello, <?php echo $_SESSION['fname']; ?> </h1>
        </div>

        <div class="container "> 

            <table class="table table-striped"> 
                <thead>
                    <tr>
                    
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Education Level</th>
                    <th scope="col">City</th>
                    <th scope="col">Comment</th>
                    
                    </tr>
                    
                </thead>
                <tbody>
        
        <?php
        $sql = "SELECT * FROM form_data WHERE id='$id'";
        $result =mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['Id'];
            $fname = $row['fname'];
            $email = $row['email'];
            $gender = $row['gender'];
            $dob = $row['dob'];
            $education = $row['education'];
            $city = $row['city'];
            $comment = $row['comment'];
        
            echo '<tr>
            <td>'.$fname.'</td>
            <td>'.$email.'</td>
            <td>'.$gender.'</td>
            <th>'.$dob.'</th>
            <th>'.$education.'</th>
            <th>'.$city.'</th>
            <th>'.$comment.'</th>
            </tr>';
        }
        ?>
          
                </tbody>
            </table>
        

    
    <div class="sub_res_div">
        <button class="logoutbtn"> <a href="logout.php">Logout</a> </button>
    </div>
    

    </body>
    </html>
    <?php
}
else{
    header("Location: index.php");
    exit();
}
?>
