<?php 
    include 'db_con.php';

    // Check if the 'updateid' parameter is set in the URL
    if(isset($_GET['ID'])){
        $id = $_GET['ID'];
        // Select the user data from the database
        $sql = "SELECT * FROM form_data WHERE Id=$id";
        $result = mysqli_query($conn, $sql);

        // Check if the query was successful
        if($result){
            $row = mysqli_fetch_assoc($result);
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
        } else {
            echo "Error retrieving data from the database.";
            exit();
        }
    } else {
        echo "Update Successful";
        header('Location: update2.php?message=Update Successful');
        exit();
    }

    // Check if the form is submitted
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $user_type = $_POST['usertype'];
        $fname = $_POST['fname'];
        $username = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $education = $_POST['edulvl'];
        $city = $_POST['city'];
        $comment = $_POST['comment'];

        $sql = "UPDATE form_data SET user_type='$user_type', fname='$fname', user_name='$username',
                email='$email', password='$password', gender='$gender', dob='$dob', education='$education',
                city='$city', comment='$comment' WHERE Id='$id'";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Update Successful";
            header('Location: admin.php?message=Update Successful');
            exit();
        } else {
            echo "Error updating data in the database.";
            header('Location: update2.php?error=Error updating data in the database.'); 
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPDATE USER DATA</title>
</head>
<body>

<!-- This the form in table -->
 
  <section class="form_section">
          <form method="post" autocomplete="off">
              <h1>UPDATE USER DATA</h1>
              <div class="form">
                  <label for="Id">ID:</label>
                  <input type="text" name="id" value="<?php echo($id) ?>">
              </div>
              <div class="form">
                <label for="aname">Account Type:</label>
                <select name="user_type">
                    <option value="admin" hidden>Admin</option>
                    <option value="user" selected>User</option>
                </select>
            </div>
            <div class="form">
                <ion-icon name="accessibility-outline"></ion-icon>
                <label for="fname">Full Name:</label>
                <input type="text" id="fname" name="fname" required >
            </div>
            <div class="form">
                <ion-icon name="people-outline"></ion-icon>
                <label for="lname">User Name:</label>
                <input type="text" name="uname" required >
            </div>
            <div class="form">
                <ion-icon name="mail-outline"></ion-icon>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form">
                <ion-icon name="transgender-outline"></ion-icon>
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                <option value="None" selected disabled hidden>-Gender-</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
            </div>
            <div class="form">
                <label for="dob">Date Of Birth:</label>
                <input type="date" id="dob" name="dob" required >
            </div>
            <div class="form">
                <ion-icon name="chevron-down-outline"></ion-icon>
                <label for="city">City:</label>
                <select id="city" name="city" required>
                    <option value="" selected disabled hidden>-Select City-</option>
                            <option value="Addis Ababa" >Addis Ababa</option>
                            <option value="Riyadh">Riyadh</option>
                            <option value="Jeddah">Jeddah</option>
                            <option value="Demam">Demam</option>
                    </select>
            </div>
            <div class="form">
                <ion-icon name="chevron-down-outline"></ion-icon>
                <label for="edulvl">Education Level:</label>
                <select  name="edulvl" required>
                <option value="None" selected disabled hidden>-None-</option>
                <option value="Diploma">Diploma</option>
                <option value="Degree">Degree</option>
                <option value="Masters">Masters</option>
                <option value="Other">Other</option>
                </select>
            </div>
            <div class="form">  
                <label for="mobile">Description:</label>
                <textarea name="desc" id="" cols="20" rows="05"></textarea>
            </div>
            <div class="form">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>
            </div>
            <div class="sub_res_div ">
                  <button type="submit"  name="update" class="sub_res">Update</button>
                  <button type="reset" class="sub_res">Clear</button>
                  <button class="sub_res"><a href="admin.php">Back</a> </button>
              </div> 
        </form>
    </section>

      <!-- For listing user data info -->
  </section>
      <section class="form_section info">
          <form action=""><table class="table">
              <tr>
                <th>Attributes</th>
                <th>Information</th>
              </tr>
              <tr>
                <td>ID</td>
                <td><?php echo($id) ?></td>
              <tr>
                <td>User Type</td>
                <td><?php echo($user_type) ?></td>
                
              </tr>
              <tr>
                <td>Full Name</td>
                <td><?php echo($fname) ?></td>
                
              </tr>
              <tr>
                <td>User Name</td>
                <td><?php echo($username) ?></td>
                
              </tr>
              <tr>
                <td>Email</td>
                <td><?php echo($email) ?></td>
                
              </tr>
              <tr>
                <td>Gender</td>
                <td><?php echo($gender) ?></td>
                
              </tr>
              <tr>
                <td>Date of Birth</td>
                <td><?php echo($dob) ?></td>
              </tr>
              <tr>
                  <td>City</td>
                  <td><?php echo($city) ?></td>
                </tr>
                <tr>
                  <td>Education Level</td>
                  <td><?php echo($education) ?></td>
                </tr>
                <tr>
                  <td>Description</td>
                  <td><?php echo($comment) ?></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><?php echo($password) ?></td>
                </tr>
            </table>
          </form>
      </section>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>


