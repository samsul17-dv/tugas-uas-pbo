<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Local CSS  -->
    <link rel="stylesheet" href="assets/css/regist.css">
    <!-- End Local CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <form method="post" action="assets/koneksi/register.php">
        <div class="regist-container-mobile">
            <a href="login.php">
                <box-icon name='arrow-back' color='#fff' class="back"></box-icon>
                </box-icon>
            </a>
            <img src="assets/images/icon/6.png">
            <div class="regist-card" style="margin-top: 10%;">
                <h1 class="title">Register</h1>
                <div class="input-container">
                    <box-icon name='user' type='solid' color='#5e17eb' class="bx"></box-icon>
                    <input type="text" name="fullname" placeholder="Full Name" required />
                </div>
                <div class="input-container">
                    <box-icon name='id-card' type='solid' color='#5e17eb' class="bx"></box-icon>
                    <input type="text" name="nim" placeholder="NIM" required />
                </div>
                <button type="submit" class="login-btn" style="font-weight: 600;">Continue</button>
                <h5 class="version" style="font-weight: 300; font-family: 'Poppins', sans-serif; color: #5E17EB;">
                    Already have an account? <a href="login.php" style="color: #5E17EB;">Login Now</a>
                </h5>
            </div>
        </div>
    </form>

    <div class="regist-container-desktop">
        <div class="regist-card" style="margin-top: 10%;">
            <h1 class="title">Register</h1>
            <div class="input-container">
                <box-icon name='user' type='solid' color='#5e17eb' class="bx"></box-icon>
                <input type="text" placeholder="Full Name" required />
            </div>
            <div class="input-container">
                <box-icon name='id-card' type='solid' color='#5e17eb' class="bx"></box-icon>
                <input type="password" placeholder="NIM" required />
            </div>
            <button type="submit" class="login-btn" style="font-weight: 600;">Continue</button>
            <h5 class="version" style="font-weight: 300; font-family: 'Poppins', sans-serif; color: #5E17EB;">
                Already have an account? <a href="login.php" style="color: #5E17EB;">Login Now</a>
            </h5>
        </div>
    </div>


    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</body>

</html>