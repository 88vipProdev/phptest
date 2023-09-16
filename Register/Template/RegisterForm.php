<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel agency</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php  require_once "./Register/Template/RegisterStyle.php"; ?>
    <div class="container">
        <div class="form-box">
            <form action="RegisterUser" method="POST" enctype="multipart/form-data">
                <h2>Register</h2>
                <div class="input-box">
                <i class='bx bx-user'></i>
                    <input type="text" name="username" placeholder="username">
                </div>
                <div class="input-box">
                <i class='bx bxs-envelope'></i>
                    <input type="email" name="email" placeholder="email">
                </div>
                <div class="input-box">
                <i class='bx bx-lock-alt' ></i>
                    <input type="Password" name="password" placeholder="password">
                </div>
                <div class="input-box">
                <i class='bx bx-lock-alt' ></i>
                    <input type="Password" name="cpassword" placeholder="Confirm Password">
                </div>
                <div class = "button">
                    <input type="submit" class ="btn" value="Register">
                </div>
                <div class="group">
                    <span><a href="#">Forget-Password</a></span>
                    <span><a href="#">Login</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>