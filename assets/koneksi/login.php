<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regist_mahasiswa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM data_mahasiswa WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;

        header("Location: ../../beranda.php");
        exit();

    } else {
        header("Location: ../../login-warning.html");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>