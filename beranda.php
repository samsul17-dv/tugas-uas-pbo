<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: assets/koneksi/login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/beranda/card-top.css">
    <link rel="stylesheet" href="assets/css/beranda/search.css">
    <link rel="stylesheet" href="assets/css/beranda/new.css">
    <link rel="stylesheet" href="assets/css/beranda/slider.css">
    <link rel="stylesheet" href="assets/css/beranda/menu.css">
    <link rel="stylesheet" href="assets/css/beranda/bottom.css">

</head>

<body>

    <div class="container-beranda-mobile">
    <div class="greetings-card">
        <div class="card-text">
            <h5 class="greetings-title">Welcome Back!</h5>
            <h3 class="sub-title">
                <?php
                echo htmlspecialchars($username);
                ?>
            </h3>
        </div>
    </div>
        <div class="clear"></div>
    </div>
    <img src="assets/images/icon/11.png" alt="Greetings Image" class="card-image">
    <div class="search-box">
        <input type="text" placeholder="Search...">
        <button type="button">Search</button>
    </div>

    <div class="new-arrival">
        <h5 class="new-arrival-title">New Arrival</h5>
        <div class="card-slider">
            <div class="card">
                <a href="#"><img src="assets/images/book/gadis kretek.jpg" alt="Card 1"></a>
                <a href="#" style="text-decoration: none; color: #000;">
                    <p class="card-text">Ratih Kumala</p>
                </a>
                <a href="#" style="text-decoration: none; color: #000;">
                    <p class="card-judul">Gadis Kretek</p>
                </a>
            </div>
            <div class="card">
                <img src="assets/images/book/marxisme.jpg" alt="Card 2">
                <p class="card-text">Andrea Gaviota</p>
                <p class="card-judul">ABC Marxisme</p>
            </div>
            <div class="card">
                <img src="assets/images/book/workshop-onno.jpg" alt="Card 3">
                <p class="card-text" style="margin-top: -15px;">Onno W Purbo</p>
                <p class="card-judul">Workshop Onno</p>
            </div>
            <div class="card">
                <img src="assets/images/book/jokowi.jpg" alt="Card 1">
                <p class="card-text">Yon Thayrun</p>
                <p class="card-judul">Jokowi Pemimpin</p>
            </div>
        </div>

        <div class="banner-slider">
            <div class="banner">
                <img src="assets/images/banner/banner.jpg" alt="Banner Image 1">
                <div class="banner-text">
                    <h5>Cooming Soon!</h5>
                    <h3>Famous Technology Books in Indonesia and the World</h3>
                </div>
            </div>
            <div class="banner">
                <img src="assets/images/banner/banner2.jpg" alt="Banner Image 2">
                <div class="banner-text">
                    <h5>23 Days to Go</h5>
                    <h3>Technology Books Present at ITTS Tangsel Library</h3>
                </div>
            </div>
            <div class="banner">
                <img src="assets/images/banner/banner.jpg" alt="Banner Image 3">
                <div class="banner-text">
                    <h5>SpaceNet</h5>
                    <h3>Welcome to Digital Transformation of Libraries</h3>
                </div>
            </div>
        </div>

        <div class="menu">
            <div class="menu-left">
                <ul>
                    <li><a href="#" class="active">All Books</a></li>
                    <li><a href="#">Recommended</a></li>
                    <li><a href="#">Category</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="all-books">
        <div class="card-slider">
            <div class="card">
                <img src="assets/images/book/atomic.jpg" alt="Card 1">
                <p class="card-text">James Clear</p>
                <p class="card-judul">Atomic Habits</p>
            </div>
            <div class="card">
                <img src="assets/images/book/John_Lennon.jpg" alt="Card 2">
                <p class="card-text">Gilbert Chocky</p>
                <p class="card-judul">John Lennon</p>
            </div>
            <div class="card">
                <img src="assets/images/book/john-lennon.jpg" alt="Card 3">
                <p class="card-text">Philip Norman</p>
                <p class="card-judul">The Life</p>
            </div>
            <div class="card">
                <img src="assets/images/book/che_guevara.jpg" alt="Card 1">
                <p class="card-text">Robert Junaidi</p>
                <p class="card-judul">Che Guevara</p>
            </div>
        </div>
        <div class="all-books">
            <div class="card-slider">
                <div class="card">
                    <img src="assets/images/book/gadis kretek.jpg" alt="Card 1">
                    <p class="card-text">Ratih Kumala</p>
                    <p class="card-judul">Gadis Kretek</p>
                </div>
                <div class="card">
                    <img src="assets/images/book/marxisme.jpg" alt="Card 2">
                    <p class="card-text">Andrea Gaviota</p>
                    <p class="card-judul">ABC Marxisme</p>
                </div>
                <div class="card">
                    <img src="assets/images/book/workshop-onno.jpg" alt="Card 3">
                    <p class="card-text" style="margin-top: -15px;">Onno W Purbo</p>
                    <p class="card-judul">Workshop Onno</p>
                </div>
                <div class="card">
                    <img src="assets/images/book/jokowi.jpg" alt="Card 1">
                    <p class="card-text">Yon Thayrun</p>
                    <p class="card-judul">Jokowi Pemimpin</p>
                </div>
            </div>

            <h4 class="dummy" style=" margin-bottom: 60px; color: #fff;">HAHAHAHA</h4>

            <div class="navbar">
                <a href="#" class="navbar-icon active-icon" onclick="toggleActive(this)">
                    <ion-icon name="grid-outline"></ion-icon>
                </a>
                <a href="#" class="navbar-icon" onclick="toggleActive(this)">
                    <ion-icon name="search-outline"></ion-icon>
                </a>
                <a href="#" class="navbar-icon" onclick="openCameraPopup()">
                    <ion-icon name="scan-outline"></ion-icon>
                </a>
                <a href="#" class="navbar-icon" onclick="toggleActive(this)">
                    <ion-icon name="time-outline"></ion-icon>
                </a>
                <a href="#" class="navbar-icon" onclick="toggleActive(this)">
                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                </a>
            </div>

            <div id="cameraPopup">
                <div class="video-container">
                    <video id="cameraPreview" autoplay playsinline></video>
                </div>
                <div class="button-container">
                    <button onclick="closeCameraPopup()">X</button>
                </div>
                <div id="successCard" class="card-scan">
                    <h2 style="font-size: 22px; color: #5E17EB;">Berhasil</h2>
                    <p style="font-size: 12px; font-weight: 400;">Details : <span id="successDetails"></span></p>
                    <audio id="successSound" src="music/success.mp3"></audio>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="beranda-desktop">
        <nav>
            <div class="logo">
                <img src="assets/images/logo.jpg" alt="" class="logo">
            </div>
            <div class="menu-desktop">
                <a href="#">Menu 1</a>
                <a href="#">Menu 2</a>
                <a href="#">Menu 3</a>
                <a href="#">Menu 4</a>
            </div>
            <div class="language-select">
                <select>
                    <option value="id">Bahasa Indonesia</option>
                    <option value="en">English</option>
                </select>
            </div>
        </nav>
    </div>





    <script src="https://cdn.rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js">
    </script>
    <script src="https://cdn.rawgit.com/sitepoint-editors/jsqrcode/master/src/webqr.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/@zxing/library@0.18.4"></script>
    <script src="assets/js/beranda/slider.js"></script>
    <script src="assets/js/beranda/bottom.js"></script>
</body>

</html>