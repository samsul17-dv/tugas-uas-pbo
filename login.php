<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>

    <!-- MOBILE -->
    <div class="login-container-mobile">
        <a href="index-02.php">
            <box-icon name='arrow-back' color='#fff' class="back"></box-icon>
            </box-icon>
        </a>
        <img src="assets/images/icon/5.png" class="login-images">
        <div class="login-card" style="margin-top: 10%;">
            <h1 class="title">Login</h1>
            <form action="assets/koneksi/login.php" method="post">
                <div class="input-container">
                    <box-icon name='user' type='solid' color='#5e17eb' class="bx"></box-icon>
                    <input type="text" name="username" placeholder="Username" required />
                </div>
                <div class="input-container">
                    <box-icon name='lock-alt' type='solid' color='#5e17eb' class="bx"></box-icon>
                    <input type="password" name="password" placeholder="Password" required />
                </div>
                <a href="#"><button class="login-btn" style="font-weight: 600;">Login</button></a>
                <h5 class="version" style="font-weight: 300; font-family: 'Poppins', sans-serif; color: #5E17EB;">
                    Don't have an account? <a href="regist.php" style="color: #5E17EB;">Create Now</a>
                </h5>
            </form>
        </div>
    </div>
    </div>

    <!-- DESKTOP -->
    <div class="login-container-desktop">
        <div class="login-card">
            <h1 class="title">Login</h1>
            <div class="input-container">
                <box-icon name='user' type='solid' color='#5e17eb' class="bx"></box-icon>
                <input type="text" placeholder="NIM" />
            </div>
            <div class="input-container">
                <box-icon name='lock-alt' type='solid' color='#5e17eb' class="bx"></box-icon>
                <input type="password" placeholder="Password" />
            </div>
            <a href="#"><button class="login-btn" style="font-weight: 600;">Login</button></a>
            <h5 class="version" style="font-weight: 300; font-family: 'Poppins', sans-serif; color: #5E17EB;">
                Don't have an account? <a href="regist.php" style="color: #5E17EB;">Create Now</a>
            </h5>
        </div>
    </div>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>