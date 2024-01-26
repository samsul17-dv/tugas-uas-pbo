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

    <form method="post" action="assets/koneksi/register-03.php">
    <div class="regist-container-mobile">
        <a href="regist.php">
            <box-icon name='arrow-back' color='#fff' class="back"></box-icon>
            </box-icon>
        </a>
        <img src="assets/images/icon/6.png" alt="Welcome Image" class="welcome-image">
        <div class="regist-card" style="margin-top: 10%;">
            <h1 class="title" style="margin-top: 20px;">Register</h1>
            <div class="input-container">
                <box-icon name='user' type='solid' color='#5e17eb' class="bx"></box-icon>
                <input type="text" name="username" placeholder="Username" required/>
            </div>
            <div class="input-container">
                <box-icon name='gmail' type='logo' color='#5e17eb' class="bx"></box-icon>
                <input type="text" name="email" placeholder="Email Address" required/>
            </div>
            <div class="input-container">
                <box-icon name='lock-alt' type='solid' color='#5e17eb' class="bx"></box-icon>
                <input type="password" name="password" placeholder="Create Password" required/>
            </div>
            <a href="#"><button class="login-btn" style="font-weight: 600;">Register</button></a>
        </div>
    </div>
    </form>

    <div class="regist-container-desktop">
        <div class="regist-card" style="margin-top: 10%;">
            <h1 class="title">Register</h1>
            <div class="input-container">
                <box-icon name='gmail' type='logo' color='#5e17eb' class="bx"></box-icon>
                <input type="text" placeholder="Email Address" />
            </div>
            <div class="input-container">
                <box-icon name='whatsapp' type='logo' color='#5e17eb' class="bx"></box-icon>
                <input type="password" placeholder="WhatsApp Number" />
            </div>
            <a href="regist-03.html"><button class="login-btn" style="font-weight: 600;">Continue</button></a>
            <h5 class="version" style="font-weight: 300; font-family: 'Poppins', sans-serif; color: #5E17EB;">
                Go back to the previous? <a href="regist.html" style="color: #5E17EB;">Page</a>
            </h5>
        </div>
    </div>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>