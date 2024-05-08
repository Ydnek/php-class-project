<!DOCTYPE html>
<html>
<head>
 <title>Registration Form</title>
 <link rel="stylesheet"  href="styles.css">
</head>
<body>
    <section class="form_section">
        <form action="validation.php" method="post" autocomplete="off">
            <h1>REGISTRATION FORM</h1>
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
            <div class="sub_res_div">
                <input type="submit" value="Register" class="sub_res">
                <input type="reset" value="Clear" class="sub_res">
                <button><a href="index.php">Login</a> </button>
            </div> 
        </form>
    </section>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>