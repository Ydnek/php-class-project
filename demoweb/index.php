<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body>
    <section>
        <form action="login.php" method="post" autocomplete="off">
            <h1>Login</h1>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            
            <div class="inputbox">
                <ion-icon name="people-outline"></ion-icon>
                <input type="text" name="uname" >
                <label for="uname" >User Name</label>
            </div>

            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password"  name="password" >
                <label for="password" >Password</label>
            </div>
            <div class="forget">
                <label for="" ><input type="checkbox" class="form-check-input" >Remember Me</label>
            <a href="#">Forget Password</a>
            </div>
            
            <button>Log in</button>
            <div class="register">
                <p>Don't have a account? <a href="register.php">Register</a> </p>
            </div>
        </form>
    </section>
    
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>