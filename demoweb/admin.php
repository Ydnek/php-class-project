<?php include 'db_con.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container my-5"> 
    <h1>Admin page</h1>
    <table class="table"> 
        <thead>
            <tr>
            <th scope="col">ID </th>
            <th scope="col">User Type </th>
            <th scope="col">Fullname</th>
            <th scope="col">User Name</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">DOB</th>
            <th scope="col">Education Level</th>
            <th scope="col">City</th>
            <th scope="col">Comment</th>
            <th scope="col">Operations</th>
            </tr>
            
        </thead>
        <tbody>

<?php
$sql = "SELECT * FROM form_data";
$result =mysqli_query($conn,$sql);

//SELECT `Id`, `user_type`, `fname`, `user_name`, `password`, `email`, `gender`, `dob`, `education`, `city`, `comment`
while($row = mysqli_fetch_assoc($result)){
    $id = $row['Id'];
    $user_type = $row['user_type'];
    $fname = $row['fname'];
    $username = $row['user_name'];
    $password = $row['password'];
    $email = $row['email'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $education = $row['education'];
    $city = $row['city'];
    $comment = $row['comment'];

    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$user_type.'</td>
    <td>'.$fname.'</td>
    <td>'.$username.'</td>
    <td>'.$password.'</td>
    <td>'.$email.'</td>
    <td>'.$gender.'</td>
    <th>'.$dob.'</th>
    <th>'.$education.'</th>
    <th>'.$city.'</th>
    <th>'.$comment.'</th>
    <td>
    <a href="update.php?ID='.$id.'" class="btn btn-dark">Update</a>
    <a href="delete.php?ID='.$id.'" class="btn btn-danger">Delete</a>
    </td>
    </tr>';

}
?>
  
        </tbody>
    </table>

    </div>

    <div class="sub_res_div">
        <button class="logoutbtn"> <a href="logout.php">Logout</a> </button>
    </div>
    
    
</body>
</html>
