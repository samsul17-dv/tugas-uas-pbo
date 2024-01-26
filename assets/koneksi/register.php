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
    $fullName = $_POST["fullname"];
    $nim = $_POST["nim"];

    $stmt = $conn->prepare("INSERT INTO users (full_name, nim) VALUES (?, ?)");
    $stmt->bind_param("ss", $fullName, $nim);
    $stmt->execute();
    $stmt->close();

    header("Location: ../../regist-02.php");
    exit();
}

$conn->close();
?>
