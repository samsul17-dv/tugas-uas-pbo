<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index-02.css">
</head>

<body>

    <div class="update-container" id="#login">
        <img src="assets/images/icon/3.png">
        <h3 class="title">Application Updates</h3>
        <h5 class="slogan">Added Features and Bug <br> Fixes that Have Been Found</h5>
        <button
            style="background-color: #5E17EB; border: none; color: #fff; font-family: Poppins; font-weight: 600; padding: 10px 20px; font-size: 16px; width: 80%; height: 20%; border-radius: 20px; cursor: pointer;"
            onclick="simulateDownload()" class="button-animation" id="downloadButton">
            Update Available
            <span class="download-animation"></span>
        </button>
    </div>

    <div class="welcome-container-mobile">
        <img src="assets/images/icon/4.png">
        <h3 class="title">Digital Library</h3>
        <h5 class="slogan">Find Books, and Book Now <br> without Having to Wait Anymore</h5>
        <a href="login.php" style="text-decoration: none;"><button class="btn-login">Login</button></a>
    </div>

    <div class="welcome-container-desktop">
        <img src="assets/images/icon/4.png">
        <h3 class="title">Digital Library</h3>
        <h5 class="slogan">Find Books, and Book Now <br> without Having to Wait Anymore</h5>
        <a href="login.php" style="text-decoration: none;"><button class="btn-login">Login</button></a>
    </div>

    <script>
        function simulateDownload() {
            var button = document.getElementById('downloadButton');
            var buttonText = button.innerHTML;

            button.innerHTML = 'Downloading';
            button.classList.add('downloading');

            setTimeout(function () {
                button.innerHTML = 'Update Complete';
                button.classList.remove('downloading');
                setTimeout(function () {
                    window.location.hash = '#login';
                    button.innerHTML = buttonText;
                }, 2000);
            }, 10000);
        }
    </script>
</body>

</html>