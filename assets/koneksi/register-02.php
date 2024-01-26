<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regist_mahasiswa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $nomor = $_POST["nomor"]; 

    $stmt = $conn->prepare("INSERT INTO sosmed (email, nomor) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $nomor); 

    if ($stmt->execute()) {
        header("Location: ../../regist-03.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
