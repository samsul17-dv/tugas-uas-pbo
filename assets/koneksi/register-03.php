<?php
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "regist_mahasiswa";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $errors[] = "Username is required";
    }

    if (empty($_POST["email"])) {
        $errors[] = "Email is required";
    }

    if (empty($_POST["password"])) {
        $errors[] = "Password is required";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        exit();
    }

    $username = $_POST["username"];
    $email = $_POST["email"];
    $userPassword = $_POST["password"];

    $stmt = $conn->prepare("INSERT INTO data_mahasiswa (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $userPassword);  
    $stmt->execute();
    $stmt->close();

    header("Location: ../../login.php");
    exit();
}

$conn->close();
?>
